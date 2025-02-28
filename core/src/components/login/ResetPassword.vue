<!--
  - SPDX-FileCopyrightText: 2019 Nextcloud GmbH and Nextcloud contributors
  - SPDX-License-Identifier: AGPL-3.0-or-later
-->

<template>
	<form class="login-form" @submit.prevent="submit">
		<fieldset class="login-form__fieldset">
			<NcTextField id="user"
				:value.sync="user"
				name="user"
				placeholder=" "
				class="custom-form-login"
				:maxlength="255"
				autocapitalize="off"
				:label="t('core', 'Login or email')"
				:error="userNameInputLengthIs255"
				:helper-text="userInputHelperText"
				required
				@change="updateUsername" />
			<LoginButton :value="t('core', 'Reset password')" />

			<NcNoteCard style="color: #000000a1 !important;" v-if="message === 'send-success'"
				type="success">
				{{ t('core', 'If this account exists, a password reset message has been sent to its email address. If you do not receive it, verify your email address and/or Login, check your spam/junk folders or ask your local administration for help.') }}
			</NcNoteCard>
			<NcNoteCard style="color: #000000a1 !important;" v-else-if="message === 'send-error'"
				type="error">
				{{ t('core', 'Couldn\'t send reset email. Please contact your administrator.') }}
			</NcNoteCard>
			<NcNoteCard style="color: #000000a1 !important;" v-else-if="message === 'reset-error'"
				type="error">
				{{ t('core', 'Password cannot be changed. Please contact your administrator.') }}
			</NcNoteCard>

			<a class="login-form__link"
				href="#"
				@click.prevent="$emit('abort')">
				{{ t('core', 'Back to login') }}
			</a>
		</fieldset>
	</form>
</template>

<script>
import axios from '@nextcloud/axios'
import { generateUrl } from '@nextcloud/router'
import LoginButton from './LoginButton.vue'
import NcTextField from '@nextcloud/vue/dist/Components/NcTextField.js'
import NcNoteCard from '@nextcloud/vue/dist/Components/NcNoteCard.js'

import AuthMixin from '../../mixins/auth.js'

export default {
	name: 'ResetPassword',
	components: {
		LoginButton,
		NcNoteCard,
		NcTextField,
	},
	mixins: [AuthMixin],
	props: {
		username: {
			type: String,
			required: true,
		},
		resetPasswordLink: {
			type: String,
			required: true,
		},
	},
	data() {
		return {
			error: false,
			loading: false,
			message: undefined,
			user: this.username,
		}
	},
	watch: {
		username(value) {
			this.user = value
		},
	},
	methods: {
		updateUsername() {
			this.$emit('update:username', this.user)
		},
		submit() {
			this.loading = true
			this.error = false
			this.message = ''
			const url = generateUrl('/lostpassword/email')

			const data = {
				user: this.user,
			}

			return axios.post(url, data)
				.then(resp => resp.data)
				.then(data => {
					if (data.status !== 'success') {
						throw new Error(`got status ${data.status}`)
					}

					this.message = 'send-success'
				})
				.catch(e => {
					console.error('could not send reset email request', e)

					this.error = true
					this.message = 'send-error'
				})
				.then(() => { this.loading = false })
		},
	},
}
</script>
<style lang="scss" scoped>
.login-form {
	text-align: start;
	font-size: 1rem;

	&__fieldset {
		width: 100%;
		display: flex;
		flex-direction: column;
		gap: .5rem;
	}
	&__link {
		text-align: center;
		color: black;
	}

	&__headline {
		text-align: center;
		overflow-wrap: anywhere;
		margin-bottom: 20px;
		color: black;
		font-size: 23px;

		.subtitle {
			font-size: 16px;
			font-weight: 400;
			color: #00000094;
		}
	}
}

.custom-logo-login {
	align-self: center;
	margin-bottom: 10px;
}

.custom-form-login {
	margin-bottom: 20px;
}

/* Appliquer !important pour surcharger les styles en ligne */
::v-deep .custom-form-login {
	.input-field__input {
		height: 50px !important;
		color: black !important;
		background-color: white !important;
		border: 1px solid #ccc !important;

		&:focus,
		&:hover,
		&:active {
			box-shadow: none !important;
			border: 2px solid #0f65ee !important;
		}
	}

	.input-field__input:focus+.input-field__label,
	.input-field__input:not(:placeholder-shown)+.input-field__label {
		color: #0f65ee !important;
		background-color: white !important;
	}

	.input-field__label,
	.input-field__trailing-button.button-vue {
		top: 35%;
	}

	.button-vue--vue-tertiary-no-background {
		color: #254082b5 !important;
	}
}
</style>
