<!--
  - SPDX-FileCopyrightText: 2020 Nextcloud GmbH and Nextcloud contributors
  - SPDX-License-Identifier: AGPL-3.0-or-later
-->

<template>
	<NcButton type="primary" native-type="submit" :wide="true" :disabled="loading" @click="$emit('click')">
		{{ !loading ? value : valueLoading }}

	</NcButton>
</template>

<script>
import { translate as t } from '@nextcloud/l10n'

import NcButton from '@nextcloud/vue/dist/Components/NcButton.js'
import ArrowRight from 'vue-material-design-icons/ArrowRight.vue'

export default {
	name: 'LoginButton',
	components: {
		ArrowRight,
		NcButton,
	},
	props: {
		value: {
			type: String,
			default: t('core', 'Log in'),
		},
		valueLoading: {
			type: String,
			default: t('core', 'Logging in …'),
		},
		loading: {
			type: Boolean,
			required: true,
		},
		invertedColors: {
			type: Boolean,
			default: false,
		},
	},
}
</script>

<style lang="scss" scoped>
.button-vue {
	margin-top: 1rem;
	height: 50px;
	border-radius: 50px;
	background-color: rgb(15 101 238);
	color: #ffffff;
	font-size: 18px;
	border-radius: 10px;
	&:hover {
		color: #fff;
		background-color: #0c449d !important;
		border-color: #0c449d !important;
	}
}
</style>
