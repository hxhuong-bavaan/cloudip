
<!--
  - @copyright Copyright (c) 2022 Julius Härtl <jus@bitgrid.net>
  -
  - @author Julius Härtl <jus@bitgrid.net>
  -
  - @license GNU AGPL version 3 or any later version
  -
  - This program is free software: you can redistribute it and/or modify
  - it under the terms of the GNU Affero General Public License as
  - published by the Free Software Foundation, either version 3 of the
  - License, or (at your option) any later version.
  -
  - This program is distributed in the hope that it will be useful,
  - but WITHOUT ANY WARRANTY; without even the implied warranty of
  - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  - GNU Affero General Public License for more details.
  -
  - You should have received a copy of the GNU Affero General Public License
  - along with this program. If not, see <http://www.gnu.org/licenses/>.
  -->

<template>
  <nav
    class="app-menu show"
    :aria-label="t('core', 'Applications menu')"
  >
    <ul
      class="app-menu-main"
      :class="{ 'app-menu-main__hidden-label': hiddenLabels === 1, 'app-menu-main__show-hovered': hiddenLabels === 2 }"
      v-if="appList.length"
      >
      <li v-for="app in mainAppList(state)"
        :key="app.id"
        :data-app-id="app.id"
        class="app-menu-entry"
        :class="{ 'app-menu-entry__active': app.active, 'app-menu-entry__hidden-label': hiddenLabels === 1, 'app-menu-main__show-hovered': hiddenLabels === 2 }"
        :style="makeStyle(app)"
        >
        <a :href="app.href"
          :class="{ 'has-unread': app.unread > 0 }"
          :aria-label="appLabel(app)"
          :target="targetBlankApps.indexOf(app.id) !== -1 ? '_blank' : undefined"
          :aria-current="app.active ? 'page' : false">
          <img :src="app.icon" alt="">
          <div class="app-menu-entry--label">
            {{ app.name }}
            <span v-if="app.unread > 0" class="hidden-visually unread-counter">{{ app.unread }}</span>
          </div>
        </a>
      </li>
    </ul>
    <NcActions class="app-menu-more" :aria-label="t('core', 'More apps')">
      <NcActionLink v-for="app in popoverAppList(state)"
        :key="app.id"
        :aria-label="appLabel(app)"
        :aria-current="app.active ? 'page' : false"
        :href="app.href"
        :style="makeStyle(app)"
        class="app-menu-popover-entry">
        <template #icon>
          <div class="app-icon" :class="{ 'has-unread': app.unread > 0 }">
            <img :src="app.icon" alt="">
          </div>
        </template>
        {{ app.name }}
        <span v-if="app.unread > 0" class="hidden-visually unread-counter">{{ app.unread }}</span>
      </NcActionLink>
    </NcActions>
  </nav>
</template>

<script>
import { subscribe, unsubscribe } from '@nextcloud/event-bus'
import { loadState } from '@nextcloud/initial-state'
import { n, t } from '@nextcloud/l10n'
import { useElementSize } from '@vueuse/core'
import { defineComponent, ref } from 'vue'
import axios from '@nextcloud/axios'
import { generateOcsUrl } from '@nextcloud/router'
import NcActions from '@nextcloud/vue/dist/Components/NcActions.js'
import NcActionLink from '@nextcloud/vue/dist/Components/NcActionLink.js'

export default defineComponent({
  name: 'AppMenu',

  components: {
    NcActions,
    NcActionLink,
  },

  setup() {
    return {
        t,
        n,
    }
  },

  data() {
    return {
      apps: null,
      appList: [],
      observer: null,
      targetBlankApps: [],
      hiddenLabels: true,
      state: 1,
    }
  },

  mounted() {
    axios.get(generateOcsUrl('core/navigation', 2) + '/apps?format=json')
      .then((response) => response.data)
      .then((data) => {
        if (data.ocs.meta.statuscode !== 200) {
          return
        }

        this.setApps(data.ocs.data)
      })

    this.targetBlankApps = window.targetBlankApps
    this.hiddenLabels = window.topMenuAppsMouseOverHiddenLabel
    let timeout = null

    window.addEventListener('resize', () => {
      timeout = window.setTimeout(() => {
        this.update()
      }, 300)
    })
  },

  methods: {
    update() {
      ++this.state
    },

    mainAppList() {
      return this.appList.slice(0, this.appLimit())
    },

    popoverAppList() {
      return this.appList.slice(this.appLimit())
    },

    appLimit() {
      const maxApps = Math.floor(this.$root.$el.offsetWidth / 60)

      if (maxApps < this.appList.length) {
        // Ensure there is space for the overflow menu
        return Math.max(maxApps - 1, 0)
      }

      return maxApps
    },

    setNavigationCounter(id, counter) {
      const app = this.appList.find(({ app }) => app === id)
      if (app) {
        this.$set(app, 'unread', counter)
      } else {
        logger.warn(`Could not find app "${id}" for setting navigation count`)
      }
    },

    setApps(apps) {
      this.appList = []
      let orders = {}

      window.menuAppsOrder.forEach((app, order) => {
        orders[app] = order + 1
      })

      apps.forEach((app) => {
        Array.from(window.topMenuApps).forEach((id) => {
          if (app.id === id) {
            app.order = orders[id] || null
            this.appList.push(app)
          }
        })
      })
    },

    appLabel(app) {
      return app.name
        + (app.active ? ' (' + t('core', 'Currently open') + ')' : '')
        + (app.unread > 0 ? ' (' + n('core', '{count} notification', '{count} notifications', app.unread, { count: app.unread }) + ')' : '')
    },

    makeStyle(app) {
      if (app.order !== null) {
        return `order: ${app.order}`
      }
    }
  },
})
</script>

<style lang="scss" scoped>
$header-icon-size: 20px;

.app-menu {
  width: 100%;
  display: flex;
  flex-shrink: 1;
  flex-wrap: wrap;
}

.app-menu-main {
  display: flex;
  flex-wrap: nowrap;

  .app-menu-entry {
    width: 50px;
    height: 50px;
    position: relative;
    display: flex;

    &.app-menu-entry__active {
      opacity: 1;

      &::before {
        content: " ";
        position: absolute;
        pointer-events: none;
        border-bottom-color: var(--color-main-background);
        transform: translateX(-50%);
        width: 12px;
        height: 5px;
        border-radius: 3px;
        background-color: var(--color-primary-text);
        left: 50%;
        bottom: 6px;
        display: block;
        transition: all 0.1s ease-in-out;
        opacity: 1;
      }

      .app-menu-entry--label {
        font-weight: bold;
      }
    }

    a {
      width: calc(100% - 4px);
      height: calc(100% - 4px);
      margin: 2px;
      color: var(--color-primary-text);
      position: relative;
    }

    img {
      transition: margin 0.1s ease-in-out;
      width: $header-icon-size;
      height: $header-icon-size;
      padding: calc((100% - $header-icon-size) / 2);
      box-sizing: content-box;
      filter: var(--background-image-invert-if-bright, var(--primary-invert-if-bright));
    }

    .app-menu-entry--label {
      opacity: 0;
      position: absolute;
      font-size: 12px;
      color: var(--color-primary-text);
      text-align: center;
      left: 50%;
      top: 45%;
      display: block;
      min-width: 100%;
      transform: translateX(-50%);
      transition: all 0.1s ease-in-out;
      width: 100%;
      text-overflow: ellipsis;
      overflow: hidden;
      letter-spacing: -0.5px;
    }

    &:not(.app-menu-entry__hidden-label):not(.app-menu-entry__show-hovered):hover,
    &:not(.app-menu-entry__hidden-label):not(.app-menu-entry__show-hovered):focus-within {
      opacity: 1;
      .app-menu-entry--label {
        opacity: 1;
        font-weight: bolder;
        bottom: 0;
        width: 100%;
        text-overflow: ellipsis;
        overflow: hidden;
      }
    }
  }

  // Show labels
  &:hover,
  &:focus-within,
  .app-menu-entry:hover,
  .app-menu-entry:focus {
    opacity: 1;
  }

  &:not(.app-menu-main__hidden-label):not(.app-menu-main__show-hovered):hover,
  &:not(.app-menu-main__hidden-label):not(.app-menu-main__show-hovered):focus-within,
  .app-menu-entry:not(.app-menu-entry__hidden-label):hover,
  .app-menu-entry:not(.app-menu-entry__hidden-label):focus {
    opacity: 1;

    img {
      margin-top: -8px;
    }

    .app-menu-entry--label {
      opacity: 1;
      bottom: 0;
    }

    &::before, .app-menu-entry::before {
      opacity: 0;
    }
  }

  &.app-menu-main__show-hovered .app-menu-entry:hover,
  &.app-menu-main__show-hovered .app-menu-entry:focus {
    img {
      margin-top: -8px;
    }

    .app-menu-entry--label {
      opacity: 1;
      bottom: 0;
    }

    &::before, .app-menu-entry::before {
      opacity: 0;
    }
  }
}

::v-deep .app-menu-more .button-vue--vue-tertiary {
  opacity: .7;
  margin: 3px;
  filter: var(--background-image-invert-if-bright, var(--primary-invert-if-bright));

  &:not([aria-expanded="true"]) {
    color: var(--color-main-text);

    &:hover {
      opacity: 1;
      background-color: transparent !important;
    }
  }

    &:focus-visible {
      opacity: 1;
      outline: none !important;
    }
}

.app-menu-popover-entry {
  .app-icon {
    position: relative;
    height: 44px;
    width: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    filter: var(--background-invert-if-bright, var(--primary-invert-if-bright));

    &.has-unread::after {
      background-color: var(--color-main-text);
    }

    img {
      width: $header-icon-size;
      height: $header-icon-size;
    }
  }
}

.has-unread::after {
  content: "";
  width: 8px;
  height: 8px;
  background-color: var(--color-primary-element-text);
  border-radius: 50%;
  position: absolute;
  display: block;
  top: 10px;
  right: 10px;
}

.unread-counter {
  display: none;
}
</style>
