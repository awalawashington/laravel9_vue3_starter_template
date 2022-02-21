@extends('layouts.admin.app_auth')

@section('content')
<!-- Log In page -->
<div class="row vh-100 ">
    <div class="col-12 align-self-center">
        <div class="auth-page">
            <div class="card auth-card shadow-lg rounded-0">
                <div class="card-body">
                    <div class="px-3">
                        <div class="auth-logo-box">
                            <a href="../analytics/analytics-index.html" class="logo logo-admin"><img src="{{ asset('admin/assets/images/logo-sm.png') }}" height="55" alt="logo" class="auth-logo"></a>
                        </div><!--end auth-logo-box-->
                        
                        <div class="text-center auth-logo-text">
                            <h4 class="mt-0 mb-3 mt-5">Let's Get Started</h4>
                        </div> <!--end auth-logo-text-->  
                        
                        <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="form-group rounded-0">
                                <label for="username">Username</label>
                                <div class="input-group mb-3 ">
                                    <span class="auth-form-icon rounded-0">
                                        <i class="dripicons-user"></i> 
                                    </span>                                                                                                              
                                    <input type="text" class="form-control rounded-0" id="username" placeholder="Enter username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                  
                            </div><!--end form-group--> 
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror      

                            <div class="form-group">
                                <label for="userpassword">Password</label>                                            
                                <div class="input-group mb-3"> 
                                    <span class="auth-form-icon rounded-0">
                                        <i class="dripicons-lock"></i> 
                                    </span>                                                       
                                    <input type="password" class="form-control rounded-0" id="userpassword" placeholder="Enter password" name="password" required autocomplete="current-password">
                                </div> 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                              
                            </div><!--end form-group--> 

                            <div class="form-group row mt-4">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-switch switch-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitchSuccess" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                    </div>
                                </div><!--end col--> 
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('admin.password_reset') }}" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                </div><!--end col--> 
                            </div><!--end form-group--> 

                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-round btn-block waves-effect waves-light rounded-0" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div><!--end col--> 
                            </div> <!--end form-group-->                           
                        </form><!--end form-->
                    </div><!--end /div-->
                    
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end auth-page-->
    </div><!--end col-->           
</div><!--end row-->
<!-- End Log In page -->
@endsection  

        