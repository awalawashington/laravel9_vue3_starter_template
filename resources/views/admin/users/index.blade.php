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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Others</a></li>
                                        <li class="breadcrumb-item active">Datatable</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Users</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row" id="app">
                        <user-index></user-index>
                    </div> <!-- end row -->

                </div><!-- container -->

                <!-- Footer -->    
                    @include('layouts.admin.footer')
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/waves.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/jquery.slimscroll.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/assets/pages/jquery.datatable.init.js')}}"></script>


        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>

@endsection