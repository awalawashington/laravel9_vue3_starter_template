@extends('layouts.admin.app')

    @section('content')

        <!-- Top Bar Start -->
        @include('layouts.admin.topbar')
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
            @include('layouts.admin.sidenav')
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                                        <li class="breadcrumb-item active">Settings</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Settings</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row" id="app">
                        <user-create></user-create>
                    </div><!--end row-->

                </div><!-- container -->

                <!-- Footer -->    
                    @include('layouts.admin.footer')
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/waves.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jquery.slimscroll.min.js') }}"></script>
        
        <script src="{{ asset('admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
        <script src="{{ asset('admin/assets/pages/jquery.form-upload.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>
        <script src="{{asset('js/app.js')}}"></script>

@endsection