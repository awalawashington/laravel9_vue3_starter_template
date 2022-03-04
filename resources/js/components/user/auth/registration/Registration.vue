<template>
    <PasswordEmail v-if="registration_email" @hideEmail="hideEmail"/>
    <PasswordCode v-if="registration_code" :token="token" @hideCode="hideCode" />
    <PasswordReset v-if="registration_reset" :token="token" />
</template>

<script>
import PasswordEmail from '../registration/RegistrationEmail.vue'
import PasswordCode from '../registration/RegistrationCode.vue'
import PasswordReset from '../registration/RegistrationRegister.vue'
import { ref } from '@vue/reactivity'

export default {
    components: { PasswordEmail, PasswordCode, PasswordReset },
    setup(){
        const registration_email = ref(true)
        const registration_code = ref(false)
        const registration_reset = ref(false)
        const token = ref(null)

        const hideEmail = (emitted_token) => {
            registration_email.value = false
            registration_code.value = true
            token.value = emitted_token
        }

        const hideCode = (emitted_token) => {
            registration_email.value = false
            registration_code.value = false
            registration_reset.value = true
            token.value = emitted_token
        }

        return{
            registration_email,
            registration_code,
            registration_reset,
            token,
            hideEmail,
            hideCode
        }
    }
}
</script>

<style>

</style>