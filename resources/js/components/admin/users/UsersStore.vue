<template>
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <form @submit.prevent="saveUser" id="form-vertical" class="form-horizontal form-wizard-wrapper">    
                <h4>User Information</h4>
                <fieldset>
                    <div class="form-group row">
                        <div class="col-sm-12 col-lg-6">
                            <input v-model="form.name" class="form-control" type="text" id="name" placeholder="Name">                                                       
                        </div> 
                        <div class="col-sm-12 col-lg-6">
                            <input v-model="form.user_id" class="form-control" type="text" id="example-email-input3" placeholder="User_id">
                        </div>                                                   
                    </div><!--end form-group-->

                    <div class="form-group row">
                        <div class="col-sm-12 col-lg-6">
                            <input class="form-control" type="text" id="name" placeholder="Phone No">                                                       
                        </div> 
                        <div class="col-sm-12 col-lg-6">
                            <input class="form-control" type="email" id="example-email-input3" placeholder="Email">
                        </div>                                                   
                    </div><!--end form-group--> 

                    <div class="form-group row">
                        <div class="col-sm-12 col-lg-6">
                            <input class="form-control" type="text" id="name" placeholder="DOB">                                                       
                        </div> 
                        <div class="col-sm-12 col-lg-6">
                            <input class="form-control" type="email" id="example-email-input3" placeholder="Gender">
                        </div>                                                   
                    </div><!--end form-group--> 
                                                             
                </fieldset><!--end fieldset--> 
                <h4>Profile picture</h4>
                <fieldset>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Upload profile picture</h4>
                                <input type="file" id="input-file-now" class="dropify" />                                                   
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </fieldset><!--end fieldset--> 
                <button class="btn btn-primary float-right" type="submit">Submit form</button>                                  
            </form><!--end form-->
        </div><!--end card-body-->
    </div><!--end card-->
</div>
</template>

<script>
import { onMounted, reactive } from 'vue'
import useUsers from "../../../composables/users.js";

export default {
    setup() {
        const form = reactive({
            _token: '',
            name: '',
            user_id: '',

        })

        const { errors, storeUser } = useUsers()
        
        onMounted(() => {
            form._token = document.querySelector('meta[name="csrf-token"]').content
        })

        const saveUser = async () => {
            await storeUser({ ...form })
        }

        return {
            form,
            errors,
            saveUser
        }
    }
}
</script>

<style>

</style>