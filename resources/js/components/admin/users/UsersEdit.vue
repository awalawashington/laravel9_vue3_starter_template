<template>
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body  met-pro-bg">
                <div class="met-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center">
                            <div class="met-profile-main">
                                <div class="met-profile-main-pic">
                                    <img src="{{ asset('admin/assets/images/users/user-10.jpg') }}" alt="" class="rounded-circle">
                                    <span class="fro-profile_main-pic-change">
                                        <i class="fas fa-camera"></i>
                                    </span>
                                </div>
                                <div class="met-profile_user-detail">
                                    <h5 class="met-user-name">Steven Meyers</h5>                                                        
                                    <p class="mb-0 met-user-name-post">UI/UX Designer</p>
                                </div>
                            </div>                                                
                        </div><!--end col-->
                        <div class="col-lg-4 ml-auto">
                            <ul class="list-unstyled personal-detail">
                                <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end f_profile-->                                                                                
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
  </div>
  <div class="row">                        
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 mb-3 header-title">User Information</h4>
                    <form @submit.prevent="saveUser">
                        <div class="form-group row">
                            <div class="col-sm-12 col-lg-6">
                                <label for="setFullName">Full Name</label>
                                <input v-model="form.name" type="text" class="form-control" id="setFullName" placeholder="Full Name">                        
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="setFullName">User ID</label>
                                <input v-model="form.user_id" type="text" class="form-control" id="setFullName" placeholder="User ID">                        
                            </div>                                            
                        </div><!--end form-group-->
                        <div class="form-group row">
                            <div class="col-sm-12 col-lg-6">
                                <label for="setFullName">Phone no</label>
                                <input type="text" class="form-control" id="setFullName" placeholder="Full Name">                        
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="setEmail">Email address</label>
                                <input type="email" class="form-control" id="setEmail" placeholder="Enter email">                        
                            </div>                                            
                        </div><!--end form-group-->                                        
                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                    </form> <!--end form-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 mb-3 header-title">Security</h4>
                    <div class="text-center">
                        <img src="{{ asset('admin/assets/images/widgets/notify.svg') }}" alt="" class="mb-3" height="115">
                    </div>
                    <form>
                        <div class="custom-control custom-switch switch-success mb-2">
                            <input type="checkbox" class="custom-control-input" id="ICOnotify" checked>
                            <label class="custom-control-label" for="ICOnotify">ACTIVE/DEACTIVE</label>
                        </div>
                        <div class="custom-control custom-switch switch-success mb-2">
                            <input type="checkbox" class="custom-control-input" id="notyfySound">
                            <label class="custom-control-label" for="notyfySound">RESET PASSWORD</label>
                        </div>
                    </form> <!--end form-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->


    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="media setting-card">
                        <span class="sett-card-icon set-icon-purple">
                            <i class="mdi mdi-cellphone-iphone"></i>
                        </span>
                        <div class="media-body align-self-center"> 
                            <div class="setting-detail">                                                        
                                <h3 class="mb-0 mt-0">SMS Auth</h3>
                                <p class="text-muted mb-0">Used for withdrawals and security modifications</p>
                            </div> 
                            <div class="mt-2">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-light btn-sm active">
                                        <input type="radio" name="options" id="option1" checked> Enable
                                    </label>
                                    
                                    <label class="btn btn-outline-light btn-sm">
                                        <input type="radio" name="options" id="option4"> Disable
                                    </label>
                                </div><!--end btn-group-->
                            </div> <!--end /div-->                                                                                                    
                        </div><!--end media body-->
                    </div><!--end media-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="media setting-card">
                        <span class="sett-card-icon set-icon-success">
                            <i class="mdi mdi-google-chrome"></i>
                        </span>
                        <div class="media-body align-self-center"> 
                            <div class="setting-detail">                                                        
                                <h3 class="mb-0 mt-0">Google Auth</h3>
                                <p class="text-muted mb-0">Used for withdrawals and security modifications</p>
                            </div> 
                            <div class="mt-2">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-light btn-sm active">
                                        <input type="radio" name="options" id="option5" checked> Enable
                                    </label>
                                    
                                    <label class="btn btn-outline-light btn-sm">
                                        <input type="radio" name="options" id="option6"> Disable
                                    </label>
                                </div><!--end btn-group-->
                            </div> <!--end /div-->                                                                                                    
                        </div><!--end media body-->
                    </div><!--end media-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="media setting-card">
                        <span class="sett-card-icon set-icon-danger">
                            <i class="mdi mdi-database"></i>
                        </span>
                        <div class="media-body align-self-center"> 
                            <div class="setting-detail">                                                        
                                <h3 class="mb-0 mt-0">API</h3>
                                <p class="text-muted mb-0">Create API private key can get you access to market.</p>
                            </div> 
                            <div class="mt-2">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-light btn-sm active">
                                        <input type="radio" name="options" id="option3" checked> Enable
                                    </label>
                                    
                                    <label class="btn btn-outline-light btn-sm">
                                        <input type="radio" name="options" id="option7"> Disable
                                    </label>
                                </div><!--end btn-group-->
                            </div> <!--end /div-->                                                                                                    
                        </div><!--end media body-->
                    </div><!--end media-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
</template>

<script>
import { onMounted, reactive } from 'vue'
import useUsers  from "../../../composables/users.js";

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
            name: props.user.name,
            user_id: props.user.user_id,
        })

        const { errors, updateUser } = useUsers()

        onMounted(() => {
            form._token = document.querySelector('meta[name="csrf-token"]').content
        })

        const saveUser = async () => {
            await updateUser(props.user.id, { ...form })
        }

        return {
            form,
            errors,
            saveUser
        }
    }
}

</script>
