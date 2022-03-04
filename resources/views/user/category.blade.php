@extends('layouts.users.app')

    @section('content')
        <!-- Top Bar Start -->
        @include('layouts.users.navbar')
        <!-- Top Bar End -->

        <div class="page-wrapper">
            

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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Products</li>
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title">Products</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">                        
                        <div class="col-lg-3">
                            <div class="card e-co-product">
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-1.png') }}" alt="" class="img-fluid">
                                </a>                                    
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card e-co-product">
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-3.png') }}" alt="" class="img-fluid">
                                </a>                                    
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Headphone F2019</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$49.00 <span class="ml-2"><del>$79.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card e-co-product">
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-4.png') }}" alt="" class="img-fluid">
                                </a>                                    
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Lavie Purse CN120</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$60.00 <span class="ml-2"><del>$99.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card e-co-product ">
                                
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-5.png') }}" alt="" class="img-fluid">
                                </a>   
                                <div class="ribbon ribbon-pink">
                                    <span>50% OFF</span>
                                </div>                                 
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Nike Shoes Leather Pasted 20</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$99.00 <span class="ml-2"><del>$179.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">                        
                        <div class="col-lg-3">
                            <div class="card e-co-product">
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-7.png') }}" alt="" class="img-fluid">
                                </a>                                    
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Cosco Footboll <small class="text-muted">size-04</small></a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card e-co-product">
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-2.png') }}" alt="" class="img-fluid">
                                </a>                                    
                                <div class="ribbon ribbon-secondary">
                                    <span>NEW</span>
                                </div> 
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Apple Watch Series 3</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$199.00 <span class="ml-2"><del>279.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card e-co-product">
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-1.png') }}" alt="" class="img-fluid">
                                </a>                                    
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Lavie Purse CN120</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card e-co-product">
                                <a href="">  
                                    <img src="{{ asset('users/assets/images/products/img-3.png') }}" alt="" class="img-fluid">
                                </a> 
                                                                
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Headphone F2019</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$49.00 <span class="ml-2"><del>$79.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-cart btn-sm waves-effect waves-light"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-wishlist btn-sm waves-effect waves-light wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-quickview btn-sm waves-effect waves-light quickview"  data-toggle="tooltip" data-placement="top" title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->    

                </div><!-- container -->
            </div>
            <!-- end page content -->
            @include('layouts.users.footer')
            <!--end footer-->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('users/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('users/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('users/assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('users/assets/js/waves.min.js') }}"></script>
        <script src="{{ asset('users/assets/js/jquery.slimscroll.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('users/assets/js/app.js') }}"></script>
@endsection