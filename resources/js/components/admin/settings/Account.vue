<template>
    <form @submit.prevent="saveProfile" class="form-horizontal form-material mb-0">
        <div class="form-group row">
            <div class="col-md-4">
                <label for="setFullName">Email</label>
                <input v-model="form.email" type="email" placeholder="Email" class="form-control">
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Update Account</button>
        </div>
    </form>
</template>

<script>
import { onMounted, reactive } from 'vue'
import userSettings  from "../../../composables/admin/settings.js";

export default {
    props: {
        user: {
            required: true,
            type: Object
        }
    },
    setup(props){
        const form = reactive({
            _token: '',
            email: props.user.email,
        })

        const { errors, updateAccount } = userSettings()

        const saveProfile = async () => {
            form._token = document.querySelector('meta[name="csrf-token"]').content
            await updateAccount({ ...form })
        }

        return {
            form,
            errors,
            saveProfile
        }
    }
}

</script>