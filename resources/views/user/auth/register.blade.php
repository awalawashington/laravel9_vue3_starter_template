@extends('layouts.users.app_auth')

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
                        <div id="app">
                            <user-registration></user-registration>
                        </div>
                    </div><!--end /div-->                  
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end auth-page-->
    </div><!--end col-->           
</div><!--end row-->
<!-- End Log In page -->
@endsection  


        