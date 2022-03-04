<template>
    <div class="text-center auth-logo-text">
        <h4 class="mt-0 mb-3 mt-5">Enter Code</h4>
    </div> <!--end auth-logo-text-->  
    
    <form @submit.prevent="handleSubmitCode" class="form-horizontal auth-form my-4">
        <div class="form-group rounded-0">
            <label for="username">Code</label>
            <div class="input-group mb-3 ">
                <span class="auth-form-icon rounded-0">
                    <i class="dripicons-user"></i> 
                </span>                                                                                                              
                <input v-model="form.code" type="text" class="form-control rounded-0" placeholder="Enter code sent to your email">
            </div>                                
        </div><!--end form-group--> 
        
        <div class="form-group row mt-4">
            <div class="col-sm-6">
                <a href="login" class="text-muted font-13"><i class="dripicons-lock"></i> Login</a>                                    
            </div><!--end col--> 
        </div><!--end form-group--> 

        <div class="form-group mb-0 row">
            <div class="col-12 mt-2">
                <button class="btn btn-primary btn-round btn-block waves-effect waves-light rounded-0" type="submit">Continue <i class="fas fa-sign-in-alt ml-1"></i></button>
            </div><!--end col--> 
        </div> <!--end form-group-->                           
    </form><!--end form-->
</template>

<script>
import auth  from "../../../../composables/users/auth.js";
import { reactive } from '@vue/reactivity';
import { onMounted } from '@vue/runtime-core';

export default {
    props: {
        token: {
            required: true,
            type: String
        }
    },
    setup(props, context) {
        const form = reactive({
            _token: '',
            code: '',
            token: props.token
        })

        const { errors, submitCode } = auth()

        onMounted(() => {
            form._token = document.querySelector('meta[name="csrf-token"]').content
        })

        const handleSubmitCode = async () => {
            await submitCode(context, '/user/password/code', { ...form })
            
        }
        
        return{
            form,
            errors,
            handleSubmitCode
        }
    }
}
</script>

<style>

</style>