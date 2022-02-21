<template>
    <PasswordEmail v-if="password_email" @hideEmail="hideEmail"/>
    <PasswordCode v-if="password_code" :token="token" @hideCode="hideCode" />
    <PasswordReset v-if="password_reset" :token="token" />
</template>

<script>
import PasswordEmail from './PasswordEmail.vue'
import PasswordCode from './PasswordCode.vue'
import PasswordReset from './PasswordReset.vue'
import { ref } from '@vue/reactivity'

export default {
    components: { PasswordEmail, PasswordCode, PasswordReset },
    setup(){
        const password_email = ref(true)
        const password_code = ref(false)
        const password_reset = ref(false)
        const token = ref(null)

        const hideEmail = (emitted_token) => {
            password_email.value = false
            password_code.value = true
            token.value = emitted_token
        }

        const hideCode = (emitted_token) => {
            password_email.value = false
            password_code.value = false
            password_reset.value = true
            token.value = emitted_token
        }

        return{
            password_email,
            password_code,
            password_reset,
            token,
            hideEmail,
            hideCode
        }
    }
}
</script>

<style>

</style>