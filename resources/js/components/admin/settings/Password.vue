<template>
    <form @submit.prevent="savePassword" class="form-horizontal form-material mb-0">
        <div class="form-group row">
            <div class="col-md-4">
                <input v-model="form.current_password" type="password" placeholder="Current Pasword" class="form-control" required>
            </div>
            <div class="col-md-4">
                <input v-model="form.password" type="password" placeholder="New password" class="form-control">
            </div>
            <div class="col-md-4">
                <input v-model="form.password_confirmation" type="password" placeholder="Confirm Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Change Password</button>
        </div>
    </form>
</template>

<script>
import { onMounted, reactive } from 'vue'
import userSettings  from "../../../composables/admin/settings.js";

export default {
    setup(){
        const form = reactive({
            _token: '',
            current_password: '',
            password: '',
            password_confirmation: ''
        })

        const { errors, updatePassword } = userSettings()

        const savePassword = async () => {
            //I passed thr csrf token here because password component was loading before the csrf meta tag 
            form._token = document.querySelector('meta[name="csrf-token"]').content
            await updatePassword({ ...form })
        }

        return {
            form,
            errors,
            savePassword
        }
    }
}

</script>