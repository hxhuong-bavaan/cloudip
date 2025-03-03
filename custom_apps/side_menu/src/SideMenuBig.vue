<!--
@license GNU AGPL version 3 or any later version

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
-->
<template>
  <div id="side-menu" class="side-menu-big">
    <div class="side-menu-header">
      <CloserButton />
      <SettingsButton
        v-if="settings"
        v-bind:href="settings.href"
        v-bind:label="settings.name"
        v-bind:avatar="settings.avatar"
      />
      <AppSearch v-model:search="search" />
      <OpenerButton />
    </div>

    <div class="side-menu-categories-wrapper">
      <div class="side-menu-categories">
        <Loader v-if="!items.length" />

        <div class="side-menu-category" v-for="(category, key) in items" v-if="hasSearchMatch(category.apps)" v-bind:key="key">
          <h2 class="side-menu-category-title" v-if="category.name != ''" v-text="category.name"></h2>

          <ul class="side-menu-apps-list">
            <SideMenuBigApp
              v-for="(app, appId) in category.apps"
              v-if="searchMatch(app.name)"
              v-bind:key="appId"
              v-bind:classes="{'side-menu-app': true, 'active': activeApp === appId}"
              v-bind:icon="app.icon"
              v-bind:label="app.name"
              v-bind:href="app.href"
              v-bind:target="targetBlankApps.indexOf(appId) !== -1 ? '_blank' : undefined"
            />
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import OpenerButton from './OpenerButton'
import CloserButton from './CloserButton'
import SettingsButton from './SettingsButton'
import Loader from './Loader'
import AppSearch from './AppSearch'
import SideMenuBigApp from './SideMenuBigApp'
import { loadState } from '@nextcloud/initial-state'

export default {
  name: 'SideMenuBig',
  components: {
    SettingsButton,
    OpenerButton,
    CloserButton,
    Loader,
    SideMenuBigApp,
    AppSearch,
  },
  data() {
    return {
      items: [],
      activeApp: null,
      targetBlank: false,
      targetBlankApps: [],
      settings: null,
      search: '',
    }
  },
  methods: {
    retrieveApps() {
      axios
        .get(OC.generateUrl('/apps/side_menu/nav/items'))
        .then((response) => {
          this.items = response.data.items
          let apps = []

          for (let category of this.items) {
            for (let a in category.apps) {
              apps.push(category.apps[a])
            }
          }

          document.querySelector('body').dispatchEvent(new CustomEvent('side-menu.apps', {
            detail: {apps: apps},
          }))
        })
    },

    retrieveActiveApp() {
      const ncApps = loadState('core', 'apps', {})

      for (let id in ncApps) {
        if (ncApps[id].active) {
          this.activeApp = id
        }
      }
    },

    retrieveConfig() {
      axios
        .get(OC.generateUrl('/apps/side_menu/js/config'))
        .then((response) => {
          const config = response.data

          this.targetBlankApps = config['target-blank-apps']
          this.settings = config['settings']
        })
    },

    hasSearchMatch(apps) {
      if (this.search.trim() === '') {
        return true
      }

      for (let key in apps) {
        if (this.searchMatch(apps[key].name)) {
          return true
        }
      }

      return false
    },

    searchMatch(name) {
      if (this.search.trim() === '') {
        return true
      }

      return name.toLowerCase().includes(this.search.toLowerCase())
    },
  },
  mounted() {
    this.retrieveConfig()
    this.retrieveApps()
    this.retrieveActiveApp()
  }
}
</script>
