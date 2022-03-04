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
                                        <li class="breadcrumb-item active">Checkout</li>
                                    </ol><!--end breadcrumb-->
                                </div><!--end /div-->
                                <h4 class="page-title">Checkout</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Order Summary</h4>
                                    <div class="table-responsive shopping-cart">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>                                                        
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="../assets/images/products/img-5.png" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</p> 
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>$198</td>                                                        
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../assets/images/products/3.jpg" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Brown Morden Chair</p> 
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>$150</td>                                                       
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../assets/images/products/img-4.png" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Lava Purse</p> 
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>$49</td>                                                       
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="../assets/images/products/2.jpg" alt="" height="52">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Important Chair</p>
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>$99</td>
                                                </tr>  
                                                <tr>
                                                    <td>
                                                        <h6>Total :</h6>
                                                    </td>
                                                    <td></td>
                                                    <td class="text-dark"><strong>$496</strong></td>
                                                </tr>                                                    
                                            </tbody>
                                        </table>
                                    </div><!--end re-table-->
                                    <div class="total-payment">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="payment-title">Subtotal</td>
                                                    <td>$496.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="payment-title">Shipping</td>
                                                    <td>
                                                        Shipping Charge : $5.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="payment-title">Promo Code</td>
                                                    <td>-$10.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="payment-title">Total</td>
                                                    <td class="text-dark"><strong>$491.00</strong></td>
                                                </tr>
                                            </tbody>
                                        </table><!--end table-->
                                    </div><!--end total-payment-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Delivery Address</h4>
                                    <form class="mb-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" id="firstname" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name <small class="text-danger font-13">*</small></label>
                                                    <input type="email" class="form-control" id="lastname" required="">
                                                </div>
                                            </div><!--end col-->                                                
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Delivery Address <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Address <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>City <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" id="city" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="col-form-label pt-0">State <small class="text-danger font-13">*</small></label>
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Gujarat</option>
                                                        <option>New york</option>
                                                        <option>California</option>
                                                    </select>
                                                </div>
                                            </div> <!--end col-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="col-form-label pt-0">Country <small class="text-danger font-13">*</small></label>
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>India</option>
                                                        <option>USA</option>
                                                        <option>New Zealand</option>                                                            
                                                    </select>
                                                </div>            
                                            </div> <!--end col-->                                               
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-3">                            
                                                <div class="form-group">
                                                    <label>Zip code <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label>Email Address <small class="text-danger font-13">*</small></label>
                                                    <input type="email" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3">                            
                                                <div class="form-group">
                                                    <label>Mobile No <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row--> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="horizontalCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="horizontalCheckbox">Confirm Shipping Address</label>
                                                    </div>
                                                </div>              
                                            </div><!--end col-->
                                        </div><!--end row-->                                            
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-3">Billing Details</h4>
                                    <div class="billing-nav">
                                        <ul class="nav nav-pills justify-content-center text-center mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-credit-card-tab" data-toggle="pill" href="#pills-credit-card"><i class="mdi mdi-credit-card d-block mx-auto text-danger font-18"></i>Credit-Card</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-paypal-tab" data-toggle="pill" href="#pills-paypal"><i class="mdi mdi-paypal d-block mx-auto text-secondary font-18"></i>Paypal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-bitcoin-tab" data-toggle="pill" href="#pills-bitcoin"><i class="mdi mdi-bitcoin d-block mx-auto text-warning font-18"></i>Bitcoin</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-credit-card">
                                                <div class="demo-container">
                                                    <div class="card-wrapper mb-4"></div>                                                
                                                    <div class="form-container">
                                                        <form class="bill-form">
                                                            <div class="row">
                                                                <div class="col-md-6">                            
                                                                    <div class="form-group">
                                                                        <label>Card Number</label>
                                                                        <input placeholder="Card number" class="form-control" type="tel" name="number">
                                                                    </div>
                                                                </div><!--end col-->
                                                                <div class="col-md-6">                            
                                                                    <div class="form-group">
                                                                        <label>Full Name</label>
                                                                        <input placeholder="Full name" class="form-control" type="text" name="name">
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                            <div class="row">
                                                                <div class="col-md-6">                            
                                                                    <div class="form-group">
                                                                        <label>Ex. Date</label>
                                                                        <input placeholder="MM/YY" class="form-control" type="tel" name="expiry">
                                                                    </div>
                                                                </div><!--end col-->
                                                                <div class="col-md-6">                            
                                                                    <div class="form-group">
                                                                        <label>CVV</label>
                                                                        <input placeholder="CVC" class="form-control" type="number" name="cvc">
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                            <button class="btn btn-success px-3">Pay Now</button>
                                                        </form><!--end form-->
                                                    </div><!--end form-container-->
                                                </div><!--end demo-->
                                            </div><!--end tab-pane-->
                                            <div class="tab-pane fade" id="pills-paypal">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-6 offset-lg-3">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <h4 class="title-text"><i class="mdi mdi-paypal d-block mx-auto text-secondary font-18"></i>Add Paypal Form</h4>
                                                                <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, 
                                                                    but the majority have suffered alteration in some form, by injected humour, 
                                                                    or randomised words.
                                                                </p>
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div><!--end col-->
                                                </div><!--end row-->                                                   
                                            </div><!--end tab-pane--> 
                                            <div class="tab-pane fade" id="pills-bitcoin">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-6 offset-lg-3">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <h4 class="title-text"><i class="mdi mdi-bitcoin d-block mx-auto text-warning font-18"></i>Add Bitcoin Form</h4>
                                                                <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, 
                                                                    but the majority have suffered alteration in some form, by injected humour, 
                                                                    or randomised words.
                                                                </p>
                                                            </div><!--end card-body-->
                                                        </div><!--end card-->
                                                    </div><!--end col-->
                                                </div> <!--end row--> 
                                            </div><!--end tab-pane--> 
                                        </div><!--end tab-content--> 
                                    </div> <!--end billing-nav-->                                       
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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>

        <script src="../assets/plugins/creditcard/card.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>
        <script>
            new Card({
                form: document.querySelector('.bill-form'),
                container: '.card-wrapper'
            });
        </script>   
@endsection