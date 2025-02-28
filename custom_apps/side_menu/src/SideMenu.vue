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
  <div id="side-menu">
    <div class="side-menu-header" v-if="settings || !openerHover || (!avatar && !alwaysDisplayed && logo) || avatar">
      <SettingsButton
        v-if="settings"
        v-bind:href="settings.href"
        v-bind:label="settings.name"
        v-bind:avatar="settings.avatar" />
      <AppSearch v-model:search="search" />
      <OpenerButton v-if="!alwaysDisplayed" />
      <Logo
        v-if="!avatar && !alwaysDisplayed && logo" v-bind:classes="{'side-menu-logo': true, 'avatardiv': false}"
        v-bind:image="logo"
        v-bind:link="logoLink"
      />
      <Logo
        v-if="avatar" v-bind:classes="{'side-menu-logo': true, 'avatardiv': true}"
        v-bind:image="avatar"
        v-bind:link="logoLink"
      />
    </div>

    <ul class="side-menu-apps-list" :class="{'side-menu-apps-list--with-settings': !!settings}">
      <SideMenuApp
        v-for="(app, key) in apps"
        v-if="searchMatch(app.name)"
        v-bind:classes="{'side-menu-app': true, 'active': app.active}"
        v-bind:key="key"
        v-bind:icon="app.icon"
        v-bind:label="app.name"
        v-bind:href="app.href"
        v-bind:target="targetBlankApps.indexOf(app.id) !== -1 ? '_blank' : undefined"
      />
    </ul>
  </div>
</template>

<script>
import axios from 'axios'
import OpenerButton from './OpenerButton'
import SettingsButton from './SettingsButton'
import SideMenuApp from './SideMenuApp'
import AppSearch from './AppSearch'
import Logo from './Logo'
import { loadState } from '@nextcloud/initial-state'

export default {
  name: 'SideMenu',
  components: {
    SettingsButton,
    OpenerButton,
    SideMenuApp,
    Logo,
    AppSearch,
  },
  data() {
    return {
      apps: [],
      logo: null,
      logoLink: null,
      avatar: null,
      forceLightIcon: false,
      targetBlankApps: [],
      hiddenApps: [],
      settings: null,
      openerHover: false,
      alwaysDisplayed: false,
      search: '',
    }
  },
  methods: {
    retrieveApps() {
      const ncApps = loadState('core', 'apps', {})
      let orders = {}
      let finalApps = []

      window.menuAppsOrder.forEach((app, order) => {
        orders[app] = order + 1
      })

      for (let app of ncApps) {
        if (window.topMenuApps.includes(app.id) && !window.topSideMenuApps.includes(app.id)) {
          continue
        }

        if (this.hiddenApps.includes(app.id)) {
          continue
        }

        app.order = orders[app.id] || null

        finalApps.push(app)
      }

      finalApps.sort((a, b) => {
        if (a.order === null || b.order === null) {
          return a.name < b.name ? -1 : 1
        }

        return a.order < b.order ? -1 : 1
      })

      this.apps = finalApps

      document.querySelector('body').dispatchEvent(new CustomEvent('side-menu.apps', {
        detail: {apps: this.apps},
      }))
    },

    retrieveConfig() {
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
    axios
      .get(OC.generateUrl('/apps/side_menu/js/config'))
      .then((response) => {
        const config = response.data

        this.targetBlankApps = config['target-blank-apps']
        this.forceLightIcon = config['force-light-icon']
        this.avatar = config['avatar']
        this.logo = config['logo']
        this.logoLink = config['logo-link']
        this.settings = config['settings']
        this.openerHover = config['opener-hover']
        this.alwaysDisplayed = config['always-displayed']
        this.hiddenApps = config['big-menu-hidden-apps']
        this.retrieveApps()
      })
  }
}
</script>
