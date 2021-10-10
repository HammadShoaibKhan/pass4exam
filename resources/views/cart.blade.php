{{-- @include('layouts.frontend.includes.head_files') --}}
<!doctype html>
<html lang="en">
<style>
    .error {
      color : red !important;
      font-weight: normal !important;
    }
  </style>
</head>

<body>

<?php
    $totalPayment = 0;
    $totalDiscount = 0;
    $subTotal=0;

?>
    <span style="display:none;" class="closeBtn" onclick="closeDisBox(); return false;">X</span>
	<style>
        .cancel-img-set{
            right: 1% !important; 
            top: -41px !important;
        }
		.topDiscountBar {
			width: 100%;
			/*background: #041963;*/
			background-color: #22ad95;
			padding: 10px;
			text-align: center;
			color: #fff;
			font: 400 18px/22px 'Open Sans', sans-serif;
			position:relative;
			z-index:99999999;
		}
		.topDiscountBar div {
            margin-bottom: 0px;
            margin-top: 0px;
            font-size: inherit;
            line-height: 30px;
        }
		#coupontimeRem {
			font-weight: bold;
			margin: 0px 5px;
		}
		#couponCodeBx {
			/*background: #0785cb;*/
			/*color: #041963;*/
            background: #404040;
            color: #ffffff;
			padding: 5px 10px;
		}
		.closeBtn {
			float: right;
			font-size: 22px;
			cursor: pointer;
			position: absolute;
			right: 100px;
			top: 10px;
		}
		@media only screen and (max-width: 1050px) {
            .closeBtn {
                float: none !important;
                font-size: 22px;
                cursor: pointer;
                position: relative !important;
                right: 0px;
                top: 5px;
            }
        }
        section.bg.clearfix {
            /*margin-top: 122px;*/
        }
	</style>
   <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    {{-- <meta name="keywords" content="Certsidea">
    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/site/img/1617086695_pen.png')}}"/> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('frontend/assets/site/css/style.css')}}">
    {{-- <link media="all" rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/popup.css') }}" /> --}}
    <script type="text/javascript" src="{{asset('frontend/assets/site/js/jquery-new.min.js')}}"></script>
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- //  ........................................................... --}}
      {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
      <!-- Bootstrap -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
      <link rel="stylesheet" href="{{asset('frontend/assets/site/css/cart.css')}}">

      <title>{{!empty($title) ? $title : 'Certsidea'}}</title>

	  <style>header, footer,.afterfooterarea, .justcertnav{ display: none; }</style>
	  <script>
	    var BASE_URL = env('APP_URL');
	    var PUBLIC_KEY = env('PUBLIC_KEY');
	  </script>
	  <script src="https://pay.fondy.eu/latest/checkout.js" type="text/javascript"></script>
	  <link rel="stylesheet" href="https://pay.fondy.eu/latest/checkout.css" type="text/css">
	<style>
	    #f , .f-container {
			height: auto !important;
		}
    	#f .f-logo {
			display: none !important;
		}
		.f-icons
		{
			display: none !important;
		}
		.f-info
		{
		display: none !important;
		}
		.f-header, .f-icon-block 
		{
		display: none !important;
		}
		#f .f-icon.f-i-security {
			display: none !important;
		}
		.f-wallet-pay-button {
			display: none !important;
		}
		
		#f .f-control-label {
            font-size: 14px !important;
            font-weight: 500 !important;
            color: #000000 !important;
            padding-bottom: 10px !important;
            margin-bottom: 0px !important;
        }
        #f .f-block-sm {
            max-width: 100% !important;
            margin: auto !important;
        }
        #f .f-block {
            padding: 0px !important;
        }
        #f .f-center {
            background: none !important;
            padding-left:0px !important;
            padding-right:0px !important;
        }
        #f .f-wrapper {
            background-color: transparent !important;
        }
        #f {
            background-color: transparent !important;
        }
        .f-success
        {
            display:none !important;
        }
        .Shopping_cart_section .Shopping_cart {
            font-size: 20px;
            font-weight: bold;
            color: #000000;
            padding-top: 0px;
            padding-bottom: 18px;
        }
        .Shopping_cart_section {
            float: right;
        }
        
        .billingInfoBox
        {
            float: left;
        }
        
        .Shopping_cart_section .total_payment {
            width: 100%;
            padding: 12px 10px 12px 10px;
            border-radius: 5px;
            height: 53px;
            background-color: #fff;
            font-size: 20px;
            font-weight: bold;
            margin-top: 28px;
            border: 1px solid #FFBB0A;
            margin-bottom: 20px;
            text-align: left;
            color:#333;
        }
        .GrandTotalAmount
        {
            float:right;
        }
        .couponApplied {
            display: block;
            margin-bottom: 25px;
        }
        
        .cartLogo {
            float: left;
            margin-right: 5%;
            width: 55%;
        }
        .cartLogo img {
            width: 100%;
            height: auto;
        }
        .mcafeeLogo
        {
           width: 40%; 
        }
        
        .shopping_cart_box del {
            color: red;
            font-size: 60%;
            margin-right: 10px;
        }
        
        .discountInfo {
            float: right;
            /* width: 100px; */
            color: #22ad95;
            font-size: 15px;
            margin-right: 15px;
        }
        
        @media(min-width:320px) and (max-width: 993px) {
            .cartLogo {
                float: left;
                margin-right: 5%;
                width: 95%;
            }
            .mcafeeLogo
            {
               display:none;
            }
            
            .cart_header .background-btn {
            padding-left: 2px;
        }
        .cart_header .background-btn a {
            color: #263646;
            font-weight: bold;
            font-size: 16px;
        }
        
        }
        
        @media(min-width:320px) and (max-width: 600px) {
            .cart_active {
                display: block !important;
                width: 50%;
                float: left;
                overflow: hidden;
                position: relative;
                height: 8vh;
            }
            
            .cart_active img {
                position: absolute;
                width: 145%;
                top: 0px;
                left: 0px;
            }
            .cart_inactive {
                display: block !important;
                width: 50%;
                float: left;
                overflow: hidden;
                position: relative;
                height: 8vh;
            }
            .cart_inactive img {
                position: absolute;
                width: 130%;
                top: 0px;
                right: 0px;
            } 
        }
        @media(min-width:601px) and (max-width: 767px) {
            .cart_active {
                display: block !important;
                width: 50%;
                float: left;
                overflow: hidden;
                position: relative;
                height: 12vh;
            }
            
            .cart_active img {
                position: absolute;
                width: 145%;
                top: 0px;
                left: 0px;
            }
            .cart_inactive {
                display: block !important;
                width: 50%;
                float: left;
                overflow: hidden;
                position: relative;
                height: 12vh;
            }
            .cart_inactive img {
                position: absolute;
                width: 130%;
                top: 0px;
                right: 0px;
            } 
        }
        @media(max-width: 767px) {
            .infoTxtBox
            {
                display:none;
            }
        }
    </style>
   </head>
   <body>
       {{-- Header --}}
        <div class="container cart_header">
            <div class="row">
                <div class="col-sm-3 col-xs-3 padding-top-7">
                    <img src="{{ asset('frontend/assets/site/image/back_buuton.png') }}" class="margin-4">
                    <span class="background-btn">
                        <a href="{{url()->previous() ?? '#'}}">Back</a>
                    </span>
                </div>
                <div class="col-sm-6 col-xs-5 text-center">
                    <span class="cart_active">
                        <img src="{{ asset('frontend/assets/site/image/cart_active.png') }}">
                    </span>
                    <span class="cart_inactive">
                        <img src="{{ asset('frontend/assets/site/image/cart_inactive.png') }}">
                    </span>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="cartLogo">
                        <div class="cartLogo" style="width:130px;height:70px; background:#888">
                            {{-- <img class="cartLogo" src="https://www.study4exam.com/assets/site/image/1619507533_study4examslogo.webp" alt="Study4Exam"> --}}
                        </div>
                    </div>
                        <img class="mcafeeLogo" src="{{ asset('frontend/assets/site/image/McAfee.png') }}">
                </div>
            </div>
        </div>
       {{-- END Header --}}

        {{-- <!-------------Breadcrumb--------------------------------------------> --}}
        <div class="container-fulid under-top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <ul>
                        <li><a href="{{ route('home') }}">HOME</a></li>
                        <li><i class="fa fa-chevron-right "> </i></li>
                        <li><a href="#">Shopping Cart</a></li>
                     </ul>
                  </div>
               </div>
            </div>
        </div>
        {{-- END <!-------------Breadcrumb----------------------------------------> --}}
		 
        <div class="container billing_form">
            <div class="row">
                {{-- SHOPING Carts --}}
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 Shopping_cart_section padding-left-33">
                    
                    <div class="Shopping_cart">
                        SHOPPING CART ({{count($carts)}})
                    </div>
                    <form id="cartForm" name="cartForm" method="post">
                        {{-- Bundle Pack Design --}}
                        
                    @forelse ($carts as $cart)
                        @if ($cart['bundle_type'] == 'vendor')
                        <div class="shopping_cart_box">
                            <div class="row">
                                {{-- Image Section --}}
                                <div class="col-sm-3 padding-right-11 width-27">
                                    <div class="pull-right" style="width:65%;height:100px; background:#888">
                                    </div>
                                    {{-- <img style="width: 65%;" src="{{ asset('frontend/assets/site/img/'.$cart['bundleIcon'])}}" class="pull-right"> --}}
                                </div>
                                {{-- Description Section --}}
                                <div class="col-sm-6 width-45 padding-right-0">
                                    <div class="bundle_pack_heading">
                                        {{$cart['bundle_title'] ?? ''}}								
                                    </div>
                                    <div class="Product_included">
                                        Product included
                                    </div>
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_pdf.png">
                                        <span class="product_name">Questions & Answers (PDF) </span>
                                    </div> 
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_desktop.png">
                                        <span class="product_name">Desktop Practice Test Software </span>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_online_engin.png">
                                        <span class="product_name">Web-Based Practice Test</span>
                                    </div>
                                </div>
                                {{-- Payment Section --}}
                                <div class="col-sm-3 padding-left-0 text-right">
                                    <a href="{{route('remove_cart',[$cart['vendor_id'],$cart['bundle_type']])}}" 
                                        onclick="return confirm('Are you sure! You want to remove?');">
                                        <img src="{{ asset('frontend/assets/site/image/cart_cancel.png')}}" class="cancel-img">
                                    </a>
                                    <div class="bundle_price">
                                        <del>${{$cart['orignalPrice'] ?? ''}}</del>
                                        <span class="cartsinglesubtotal sub-total-amount">
                                            ${{$cart['discountedPrice'] ?? ''}}
                                        </span>
                                        <?php 
                                            $subTotal = $subTotal + $cart['orignalPrice'] ?? 0 ;
                                            $totalDiscount = $totalDiscount + ($cart['orignalPrice'] - $cart['discountedPrice']) ?? 0;
                                        ?>
                                    </div>
                                    <div class="form-group margin-bottom-10">
                                        {{-- <select class="2 sffasf bselect form-control margin-bottom-10" id="subscription_plan_1e7bd7121704624f24d0f514e57559d2" name="subscription_plan[]" onchange="return updateCartLisenceQty();">
                                            <option value="individual" selected="selected" > Individual 2 PCs</option>
                                            <option value="corporate" > Corporate 10 PCs</option>
                                            <option value="trainer" > Trainer 25 PCs</option>
                                        </select> --}}
                                        <input type="text" readonly value="{{$cart['subcribed_for'] ?? ''}} months (Free Updates)" class="bundle-updates  form-control" id="subscription_1e7bd7121704624f24d0f514e57559d2" name="subscription[]">
                                        {{-- <select class="bundle-updates bselect form-control" id="subscription_1e7bd7121704624f24d0f514e57559d2" name="subscription[]" onchange="//return updateCartLisenceQty();">
                                            <option value="{{($cart['subcribed_for']=='3') ? $cart['subcribed_for'] :'3'}}" {{($cart['subcribed_for']=='3') ? "selected" :''}}>3 months (Free Updates)</option>                                            
                                            <option value="{{($cart['subcribed_for']=='6') ? $cart['subcribed_for'] :'6'}}" {{($cart['subcribed_for']=='6') ? "selected" :''}}>6 months (Free Updates)</option>
                                            <option value="{{($cart['subcribed_for']=='12')? $cart['subcribed_for'] :'12'}}" {{($cart['subcribed_for']=='12') ? "selected" :''}}>12 months (Free Updates)</option>
                                        </select> --}}
                                        {{-- <input type="hidden" name="exam_code[]" id="exam_code" value="Bundle"> --}}
                                        {{-- <input type="hidden" name="cart_qty[]" id="cart_qty" data="158" value="1" maxlength="5" class="cartQty" /> --}}
                                        {{-- <input type="hidden" name="cartRowId[]" id="cartRowId" value="1e7bd7121704624f24d0f514e57559d2"> --}}
                                        {{-- <input type="hidden" name="productTypeId[]" id="productTypeId" value="0"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif ($cart['bundle_type'] == 'exam-bundle')
                        <div class="shopping_cart_box">
                            <div class="row">
                                {{-- Image Section --}}
                                <div class="col-sm-3 padding-right-11 width-27">
                                    <div class="pull-right" style="width:65%;height:100px; background:#888">
                                    </div>
                                    {{-- <img style="width: 65%;" src="{{ asset('frontend/assets/site/img/'.$cart['bundleIcon'])}}" class="pull-right"> --}}
                                </div>
                                {{-- Description Section --}}
                                <div class="col-sm-6 width-45 padding-right-0">
                                    <div class="bundle_pack_heading">
                                        {{$cart['bundle_title'] ?? ''}}								
                                    </div>
                                    <div class="Product_included">
                                        Product included
                                    </div>
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_pdf.png">
                                        <span class="product_name">Questions & Answers (PDF) </span>
                                    </div> 
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_desktop.png">
                                        <span class="product_name">Desktop Practice Test Software </span>
                                    </div>
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_online_engin.png">
                                        <span class="product_name">Web-Based Practice Test</span>
                                    </div>
                                </div>
                                {{-- Payment Section --}}
                                <div class="col-sm-3 padding-left-0 text-right">
                                    <a href="{{route('remove_cart',[$cart['vendor_id'],$cart['bundle_type']])}}" 
                                        onclick="return confirm('Are you sure! You want to remove?');">
                                        <img src="{{ asset('frontend/assets/site/image/cart_cancel.png')}}" class="cancel-img">
                                    </a>
                                    <div class="bundle_price">
                                        <del>${{$cart['orignalPrice'] ?? ''}}</del>
                                        <span class="cartsinglesubtotal sub-total-amount">
                                            ${{$cart['discountedPrice'] ?? ''}}
                                        </span>
                                        <?php 
                                            $subTotal = $subTotal + $cart['orignalPrice'] ?? 0 ;
                                            $totalDiscount = $totalDiscount + ($cart['orignalPrice'] - $cart['discountedPrice']) ?? 0;
                                        ?>
                                    </div>
                                    <div class="form-group margin-bottom-10">
                                        <input type="text" readonly value="{{$cart['subcribed_for'] ?? ''}} months (Free Updates)" class="bundle-updates bselect form-control" id="subscription_1e7bd7121704624f24d0f514e57559d2" name="subscription[]" >
                                        {{-- <input type="hidden" name="exam_code[]" id="exam_code" value="Bundle"> --}}
                                        {{-- <input type="hidden" name="cart_qty[]" id="cart_qty" data="158" value="1" maxlength="5" class="cartQty" /> --}}
                                        {{-- <input type="hidden" name="cartRowId[]" id="cartRowId" value="1e7bd7121704624f24d0f514e57559d2"> --}}
                                        {{-- <input type="hidden" name="productTypeId[]" id="productTypeId" value="0"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif ($cart['bundle_type'] == 'exam-web')
                        <div class="shopping_cart_box shopping_cart_box_online">
                            <div class="row">
                                <div class="col-sm-2 padding-left-36">
                                    <img src="https://www.study4exam.com/uploads/product_images/1619688098_webbased.webp" class="img-center">
                                </div>
                                <div class="col-sm-5 text-center_online">
                                    <div class="online-engin_heading">
                                        {{$cart['bundle_title'] ?? ''}} 
                                    </div>
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_online_engin.png">
                                        <span class="product_name">Web-Based Practice Test</span>
                                    </div>
                                    <div class="online_engin_price">
                                        <del>${{$cart['orignalPrice'] ?? ''}}</del>
                                        <span class="cartsinglesubtotal sub-total-amount">
                                            ${{$cart['discountedPrice'] ?? ''}}
                                        </span>
                                        <?php 
                                            $subTotal = $subTotal + $cart['orignalPrice'] ?? 0 ;
                                            $totalDiscount = $totalDiscount + ($cart['orignalPrice'] - $cart['discountedPrice']) ?? 0;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-right padding-top-7">
                                    <a href="{{route('remove_cart',[$cart['vendor_id'],$cart['bundle_type']])}}" 
                                        onclick="return confirm('Are you sure! You want to remove?');">
                                        <img src="{{ asset('frontend/assets/site/image/cart_cancel.png')}}" class="cancel-img cancel-img-set">
                                    </a>
                                    {{-- <div class="form-group margin-bottom-10">
                                        <input type="hidden"  id="subscription_plan_3956c7b8e1b9412c17b932da965aa596" name="subscription_plan[]" value="">
                                        <select name="cart_qty[]" id="cart_qty_3956c7b8e1b9412c17b932da965aa596"
                                            class="lisenceQty form-control center_box" 
                                            onchange="return updateCartLisenceQty();">
                                            <option value="1" selected="selected">3 IP Address</option>
                                            <option value="4" >4 IP Address</option>
                                            <option value="5" >5 IP Address</option>
                                            <option value="6" >6 IP Address</option>
                                            <option value="7" >7 IP Address</option>
                                            <option value="8" >8 IP Address</option>
                                            <option value="9" >9 IP Address</option>
                                            <option value="10" >10 IP Address</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-group margin-bottom-0">
                                        {{-- <select class="software-updates form-control center_box" 
                                            id="subscription_3956c7b8e1b9412c17b932da965aa596" 
                                            name="subscription[]" 
                                            onchange="return updateCartLisenceQty();">
                                            <option selected="selected" value="3" selected="selected">3 months (Free Updates)</option>
                                            <option  value="6">6 months (Free Updates)</option>
                                            <option  value="12">12 months (Free Updates)</option>
                                        </select> --}}
                                        <input type="text" readonly value="{{($cart['subcribed_for'] ?? '')}} months (Free Updates)"
                                            class="software-updates form-control center_box" 
                                            id="subscription_3956c7b8e1b9412c17b932da965aa596" 
                                            name="subscription[]">
                                        {{-- <select class="software-updates form-control center_box" 
                                            id="subscription_3956c7b8e1b9412c17b932da965aa596" 
                                            name="subscription[]" 
                                            onchange="//return updateCartLisenceQty();">
                                            <option value="{{($cart['subcribed_for']=='3') ? $cart['subcribed_for'] :'3'}}" {{($cart['subcribed_for']=='3') ? "selected" :''}}>3 months (Free Updates)</option>                                            
                                            <option value="{{($cart['subcribed_for']=='6') ? $cart['subcribed_for'] :'6'}}" {{($cart['subcribed_for']=='6') ? "selected" :''}}>6 months (Free Updates)</option>
                                            <option value="{{($cart['subcribed_for']=='12')? $cart['subcribed_for'] :'12'}}" {{($cart['subcribed_for']=='12') ? "selected" :''}}>12 months (Free Updates)</option>
                                        </select> --}}

                                        {{-- <input type="hidden" name="cartRowId[]" id="cartRowId" value="3956c7b8e1b9412c17b932da965aa596">
                                        <input type="hidden" name="productTypeId[]" id="productTypeId" value="3">
                                        <input type="hidden" name="exam_code[]" id="exam_code" value="MB-340"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif ($cart['bundle_type'] == 'exam-pdf')
                        <div class="shopping_cart_box shopping_cart_box_online">
                            <div class="row">
                                <div class="col-sm-2 padding-left-36">
                                    <img src="https://www.study4exam.com/uploads/product_images/1619688098_webbased.webp" class="img-center">
                                </div>
                                <div class="col-sm-5 text-center_online">
                                    <div class="online-engin_heading">
                                        {{$cart['bundle_title'] ?? ''}} 
                                    </div>
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_pdf.png">
                                        <span class="product_name">Questions & Answers (PDF) </span>
                                    </div>
                                    <div class="online_engin_price">
                                        <del>${{$cart['orignalPrice'] ?? ''}}</del>
                                        <span class="cartsinglesubtotal sub-total-amount">
                                            ${{$cart['discountedPrice'] ?? ''}}
                                        </span>
                                        <?php 
                                            $subTotal = $subTotal + $cart['orignalPrice'] ?? 0 ;
                                            $totalDiscount = $totalDiscount + ($cart['orignalPrice'] - $cart['discountedPrice']) ?? 0;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-right padding-top-7">
                                    <a href="{{route('remove_cart',[$cart['vendor_id'],$cart['bundle_type']])}}" 
                                        onclick="return confirm('Are you sure! You want to remove?');">
                                        <img src="{{ asset('frontend/assets/site/image/cart_cancel.png')}}" class="cancel-img cancel-img-set">
                                    </a>
                                    <div class="form-group margin-bottom-0">
                                        <input type="text" readonly value="{{($cart['subcribed_for'] ?? '')}} months (Free Updates)"
                                            class="software-updates form-control center_box" 
                                            id="subscription_3956c7b8e1b9412c17b932da965aa596" 
                                            name="subscription[]">
                                        
                                        {{-- <input type="hidden" name="cartRowId[]" id="cartRowId" value="3956c7b8e1b9412c17b932da965aa596">
                                        <input type="hidden" name="productTypeId[]" id="productTypeId" value="3">
                                        <input type="hidden" name="exam_code[]" id="exam_code" value="MB-340"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif ($cart['bundle_type'] == 'exam-desktop')
                        <div class="shopping_cart_box shopping_cart_box_online">
                            <div class="row">
                                <div class="col-sm-2 padding-left-36">
                                    <img src="https://www.study4exam.com/uploads/product_images/1619688098_webbased.webp" class="img-center">
                                </div>
                                <div class="col-sm-5 text-center_online">
                                    <div class="online-engin_heading">
                                        {{$cart['bundle_title'] ?? ''}} 
                                    </div>
                                    <div class="item">
                                        <img src="https://www.study4exam.com/assets/site/image/cart_desktop.png">
                                        <span class="product_name">Desktop Practice Test Software </span>
                                    </div>
                                    <div class="online_engin_price">
                                        <del>${{$cart['orignalPrice'] ?? ''}}</del>
                                        <span class="cartsinglesubtotal sub-total-amount">
                                            ${{$cart['discountedPrice'] ?? ''}}
                                        </span>
                                        <?php 
                                            $subTotal = $subTotal + $cart['orignalPrice'] ?? 0 ;
                                            $totalDiscount = $totalDiscount + ($cart['orignalPrice'] - $cart['discountedPrice']) ?? 0;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-right padding-top-7">
                                    <a href="{{route('remove_cart',[$cart['vendor_id'],$cart['bundle_type']])}}" 
                                        onclick="return confirm('Are you sure! You want to remove?');">
                                        <img src="{{ asset('frontend/assets/site/image/cart_cancel.png')}}" class="cancel-img cancel-img-set">
                                    </a>
                                    <div class="form-group margin-bottom-0">
                                        <input type="text" readonly value="{{($cart['subcribed_for'] ?? '')}} months (Free Updates)"
                                            class="software-updates form-control center_box" 
                                            id="subscription_3956c7b8e1b9412c17b932da965aa596" 
                                            name="subscription[]">
                                    

                                        {{-- <input type="hidden" name="cartRowId[]" id="cartRowId" value="3956c7b8e1b9412c17b932da965aa596">
                                        <input type="hidden" name="productTypeId[]" id="productTypeId" value="3">
                                        <input type="hidden" name="exam_code[]" id="exam_code" value="MB-340"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @empty
                        
                    @endforelse                                                                                                    
                        {{-- END Bundle Pack Design --}}
                        
                    </form>
                    {{-- Coupen Area --}}
                    {{-- <div class="coupon-area">
                        <div class="coupon-field" style="display: none">
                            <div class="coupanAreaAdj">
                                <div class="promocode">
                                    Promo code
                                </div>
                                <div class="form-group promo_code_input">
                                    <input type="text" name="coupon-code" class="form-control margin-left-2" id="coupon-code" value="SAVE50" placeholder="Enter Code" >
                                    <button type="button" id="ApplyCouponNew" class="btn btn-warning apply">
                                        Apply
                                    </button>
                                </div>
                                <div id="codemsg" class="codemsg" style="color:red;">
                                </div>
                            </div>
                        </div>
                        <div class="couponApplied" style="display: block">
                            <h4 style="display: inline-block; width: 100%;">
                                Discount
                            </h4>
                            <div class="product-row" id="applied">
                                <div class="coupon-applied">
                                    <img src="https://www.study4exam.com/assets/site/cart-images/coupon-icon.png" alt="" class="coupon-icon" >
                                    <p>
                                        Promotional Code <span style="color: #0babb5" class="disCode">“SAVE50”</span>
                                        <br>
                                    <span style="color: #0cad18"><span class="disPer">50</span>% Discount Applied</span>
                                    </p>
                                    <div class="coupon-ok">
                                        <img src="https://www.study4exam.com/assets/site/cart-images/coupon-succes.png" alt="" >
                                        <a href="javascript:void(0);" onclick="return remove_coupon_code();"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- END Coupen Area --}}
                            
                    {{-- Order Summery  --}}
                    <div class="Order_Summary">
                        Order Summary
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="Summaryheading">
                                Subtotal
                            </div>
                        </div>
                        <div class="col-xs-6 text-right">
                            <div class="Summaryheading">
                                <span class="pull-right"> ${{ $subTotal }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="Summaryheading">
                                Discount
                            </div>
                        </div>
                        <div class="col-xs-6 text-right">
                            <div class="Summaryheading">
                                <span id="DiscountAmount " class="pull-right DiscountAmount">
                                    ${{$totalDiscount}}
                                </span>
                                <div class="discountInfo">
                                    (50% Off)
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="total_payment">
                        Total Payment &nbsp; 
                        <?php $totalPayment = $subTotal - $totalDiscount; ?>
                        <span class=" GrandTotalAmount">
                            ${{$totalPayment}}
                        </span>
                    </div>
                </div>
                {{-- END SHOPING Carts --}}
                {{--  Bill Info --}}
                <div class="col-lg-6 col-lg-6 col-md-12 col-xs-12 col-sm-12 padding-right-33 billingInfoBox">
                    <form action="https://www.study4exam.com/carts/viewCart" id="checkoutForm" 
                        name="checkoutForm" role="form" class="validate" method="post" accept-charset="utf-8">
                        <!--personal details-->
                        <div class="customerareacartcss">
                            <div class="heading">
                                BILLING INFORMATION
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="cardholderName"> Name</label>
                                        <input onkeyup="saveValue(this);" type="text" required="required" placeholder="Card Holder Name" name="first_name" class="form-control" id="cardholderName"  required="required">
                                        <span class="help-block first_name-error"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input onkeyup="saveValue(this);" type="text" required="required" name="email" class="form-control" id="email" placeholder="Enter Your Email" value="{{ (auth()->check()) ? auth()->user()->email : '' }}">
                                        <span class="help-block email-error"></span>
                                    </div>
                                </div>
                                <div id="emailCheckError" class="row error-msg" style="display:none;">
                                    <div class="col-sm-7">
                                        <div class="msg" id="loginCheck">

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="login_account">
                                            <a href="#" data-toggle="modal" data-target="#login_box">
                                                Login to your account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="street_address">Street Address</label>
                                        <input onkeyup="saveValue(this);" type="text" required="required" name="street_address" 
                                            class="form-control" id="street_address" placeholder="Enter Your Street Address" value="">
                                        <span class="help-block street_address-error"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input onkeyup="saveValue(this);" type="text" required="required" name="city" class="form-control" id="city" placeholder="Enter Your City" value="">
                                        <span class="help-block city-error"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="InputCountry">Country</label>
                                        <select id="InputCountry" name="country" class="form-control" required="required">
                                            <option value="">Select Country</option>
                                            <option value="US" >United States</option>
                                            <option value="GB" >United Kingdom</option>
                                            <option value="CA" >Canada</option>
                                            <option value="AU" >Australia</option>
                                            <option value="DE" >Germany</option>
                                            <option value="BR" >Brazil</option><option value="AF" >Afghanistan</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua And Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas The</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BA" >Bosnia And Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Cote D'Ivoire (Ivory Coast)</option><option value="HR" >Croatia (Hrvatska)</option><option value="CU" >Cuba</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="CD" >Democratic Republic Of The Congo</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="TP" >East Timor</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="XA" >External Territories Of Australia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji Islands</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia The</option><option value="GE" >Georgia</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="XU" >Guernsey And Alderney</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard And McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong S.A.R.</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="XJ" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KP" >Korea North</option><option value="KR" >Korea South</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macau S.A.R.</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="XM" >Man (Isle Of)</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="AN" >Netherlands Antilles</option><option value="NL" >Netherlands The</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestinian Territory Occupied</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn Island</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="CG" >Republic Of The Congo</option><option value="RE" >Reunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts And Nevis</option><option value="LC" >Saint Lucia</option><option value="PM" >Saint Pierre And Miquelon</option><option value="VC" >Saint Vincent And The Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome And Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="XG" >Smaller Territories Of The UK</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard And Jan Mayen Islands</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad And Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks And Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican City State (Holy See)</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="VG" >Virgin Islands (British)</option><option value="VI" >Virgin Islands (US)</option><option value="WF" >Wallis And Futuna Islands</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="YU" >Yugoslavia</option><option value="ZM" >Zambia</option>
                                            <option value="ZW" >Zimbabwe</option>                                    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input id="state" name="state" class="form-control" required="required">
                                        {{-- <select id="state" name="state" class="form-control" required="required">
                                            <option value="">Select State</option>
                                            <option  value="other">other</option>
                                        </select> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end personal details-->
                    </form>					
                    <!-- ================== -->
            
                    <!-- Start Biling Detail Section Condition Base-->
                                
            
                
                    <!-- END Biling Detail Section Condition Base-->
                
                                
                    <div class="paymentareacartcss hide-card">
                        <label for="name" class="Payment_details_label padding-top-5">Payment Details</label>
                        <img style="height: 27px;float: right" src="https://www.study4exam.com/assets/site/cart-images/tls.png" alt="images">
                        <img style="float: right;margin-right: -1px;height: 38px;margin-top: -7px;"
                            src="https://www.study4exam.com/assets/site/cart-images/payment-sp.png" alt="" class="stripe-img">
                    </div>
                    
                    <div class="contents content2 active" style="max-height:100%; border: 0;padding: 0;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding" id="CardInfo">
                                <!-- placeholder for Elements -->
                                <div id="card-element">
                                    <div class="fieldset">
                                        <div id="card-number" class="field empty"></div>
                                        <div id="card-expiry" class="field empty third-width"></div>
                                        <div id="card-cvc" class="field empty third-width"></div>
                                        <div id="postalCode" class="field empty third-width"></div>
                                    </div>
                                </div>
                                <input type="hidden" name="merchant_ref_num" id="merchant_ref_num" value="4327016508" />
                                <input type="hidden" name="amount" value="128.00"/>
                            </div>
                        </div>               
                        <div class="row" id="CardPayBtnBox">
                            <div class="col-sm-4 col-xs-4">
                                <input type="hidden" name="payment_method" id="payment_method" value="stripe" />
                                <button type="button" id="card-button" class="btn btn-warning pay-now-btn" 
                                   >
                                    PAY NOW
                                </button>
                            </div>
                            <div class="col-sm-7 col-xs-7 pull-right  zero-padding">
                                <div class="desc-paynow">
                                    Your Purchase with CertsIdea is secure. 
                                    The product will be available for immediate download after 
                                    your payment has been processed.
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="clearfix">

                                </div>
                                <div class="stripeResponse" style="background: coral;padding: 10px;color: #fff;display: none; margin: 10px 0">
                                
                                </div>
                                <div class="clearfix">

                                </div>
                            </div>
                        </div>
                        <!-- end pay for cards-->
                    </div>
                                
                    <!--paypal payment Section-->										
                    <div id="paypal" class="paypal-method" style="display: none">
                        <div class="row">
                        
                        </div>
                    </div>
                    <!--end paypal payment Section-->
                </div>
                {{-- END Bill Info --}}
            </div>
        </div>
        
        {{-- Guranties  --}}
        <div class="container">
            <div class="cartnewtopcss">
                <div class="row">
                    <div class="col-sm-4 col-xs-4">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <img src="{{ asset('frontend/assets/site/image/gurrentee.png')}}" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-9 col-xs-12 padding-left-5 infoTxtBox">
                                <h4>100% Money back Guaranteed</h4>
                                <p>
                                    Your investment will be secured with CertsIdea, as you will never be 
                                    at losing anything. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <img src="{{ asset('frontend/assets/site/image/gurrentee2.png')}}" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-9 col-xs-12 padding-left-5 infoTxtBox">
                                <h4>24/7 Customer Support</h4>
                                <p>
                                    We offer you 24/7 free customer support to make your learning smooth and hassle 
                                    free.  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <img src="{{ asset('frontend/assets/site/image/gurrentee3.png')}}" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-9 col-xs-12 padding-left-5 infoTxtBox">
                                <h4>Free 3 Months Updates</h4>
                                <p>
                                    CertsIdea offers you with 3 months free updates, upon purchase. 
                                    Once you will buy any of our products you will be subscribed to free updates
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END Guranties  --}}

{{-- ---------------------------------------------------------------------------------------- --}}
        <!-- Modal content-->     
        <div class="modal fade" id="login_box"  role="dialog" style="background: rgba(0,0,0,.6);">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            Sign in
                        </div>
                        <a href="#" data-dismiss="modal">
                            <img src="{{ asset('frontend/assets/site/image/cart_cancel.png') }}" class="login-cancel_btn">
                        </a>
                    </div>
                    
                    <div class="modal-body">
                        <div class="desc_sign">
                            Sign in for faster checkout and to save payment information for next time.
                        </div>
                        <form method="post" name="userLoginForm" id="userLoginForm"
                                action="{{route('admin.login')}}">
                            <div class="form-group">
                                <label for="name" class="formlabel">
                                    E-mail Address
                                </label>
                                <input type="text" required="required" id="loginEmail" name="loginEmail" class="form-control margin-left-2" placeholder="abc@gmail.com"> 
                            </div>
                            <div class="form-group">
                                <label for="name" class="formlabel">
                                    password
                                </label>
                                <input type="password" name="loginPassword" id="loginPassword" required="required" class="form-control margin-left-2" placeholder="********"> 
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-warning login_btn">
                                        Sign in
                                    </button>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="https://www.study4exam.com/login/forgot_password" class="forgot_password">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
        <!-- END Modal content-->
        {{-- Loader --}}
        <div class="loadingimg" style="display: none">
            <img src="https://www.study4exam.com/assets/site/images/loading.gif" alt="">
            <h3 style="color: #fff; margin-top: -90px;">Please Wait...</h3>
        </div>
        {{-- END Loader --}}
    
    {{-- <script src="https://www.study4exam.com/assets/site/js/jquery-3.4.1.min.js"></script> --}}
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    {{-- ChatBox --}}
    {{-- <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=19954888"></script> --}}

    {{-- <script src="{{ asset('frontend/assets/site/js/custom/functions.js?' . Rand()) }}"></script> --}}
{{-- 
    <script>
        function processPayment(){
        
        $('.help-block').hide();
        var cardholderNameFnd = $('#cardholderNameFnd').val();
        var emailFnd = $('#emailFnd').val();
        var street_addressFnd = $('#street_addressFnd').val();
        var cityFnd = $('#cityFnd').val();
        var countryFnd = $('#InputCountryFnd').val();
        var stateFnd = $('#stateFnd').val();
        var fullNameFnd = cardholderNameFnd + $('#cardholderNameFnd12').val();
        
        if(cardholderNameFnd == '')
        {
            $('.first_name-error').html('Card Holder Name is required');
            $('.first_name-error').show();
        }
        if(emailFnd == '')
        {
            $('.email-error').html('Email is required');
            $('.email-error').show();
        }
        if(street_addressFnd == '')
        {
            $('.street_address-error').html('Address is required');
            $('.street_address-error').show();
        }
        if(cityFnd == '')
        {
            $('.city-error').html('City is required');
            $('.city-error').show();
        }
        if(countryFnd == '')
        {
            $('.country-error').html('Country is required');
            $('.country-error').show();
        }
        if(stateFnd == '')
        {
            $('.state-error').html('State is required');
            $('.state-error').show();
        }
        alert(cardholderNameFnd);
        
            if(cardholderNameFnd != '' && emailFnd != '' && street_addressFnd != '' && cityFnd != '' && countryFnd != '' && stateFnd != '')
            {
                $.ajax({         
                type: "POST",
                    url: "//www.justcerts.com/application/modules/carts/controllers/Carts.php",
                    data: {'crdhldrNm': fullNameFnd, 'email':emailFnd,'address': street_addressFnd, 'city':cityFnd, 'country': countryFnd,'state':stateFnd,'crdNm': $('#f-card_number').val(), 'exDt': $('#f-expiry_date').val(), 'cd':$('#f-cvv2').val(),'dd':'1'},
                    dataType: "json",                          
                    success: function(response) {
                        if(response.status == 'success')             
                        {                 
                            console.log(1);                              
                        }             
                        else             
                        {                
                            console.log(0);             
                        }         
                    }     
                })
                app.submit();
            }
        }
    
        function completePayment(response_data){
            $('#card-button-fnd').attr('disabled','disabled');
            var cardholderNameFnd = $('#cardholderNameFnd').val();
            var emailFnd = $('#emailFnd').val();
            var street_addressFnd = $('#street_addressFnd').val();
            var cityFnd = $('#cityFnd').val();
            var countryFnd = $('#InputCountryFnd').val();
            var stateFnd = $('#stateFnd').val();
            
            var data = {'cardholderName': cardholderNameFnd, 'email': emailFnd, 'street_address': street_addressFnd, 'city':cityFnd, 'country':countryFnd, 'state':stateFnd, 'response_data':response_data};
            console.log(data);
            alert(data);
            var url = BASE_URL+"payments/fondy_payment_process";
            $.ajax({
                type: "POST",
                url: url,
                data: data,
                dataType: "json",
                beforeSend: function() {
                    $("#card-button-fnd").before(function() {
                        return getLoadingImg();
                    })
                },
                
                success: function(response) {
                    
                    if(response.status == 'success')
                    {
                        console.log(response);
                        redirectPage(BASE_URL+"payments/thankyou/"+response.order_id);
                        $("#imgLoader").remove();
                    }
                    else
                    {
                       $('#card-button-fnd').removeAttr('disabled');
                       redirectPage(BASE_URL+"carts/"); 
                       $("#imgLoader").remove();
                    }
                }
            })
            
        }
    
    </script>
    
    <script type="text/javascript">
            document.getElementById("cardholderNameFnd").value = getSavedValue("cardholderNameFnd");
            document.getElementById("cardholderName").value = getSavedValue("cardholderName");
            
            document.getElementById("emailFnd").value = getSavedValue("emailFnd");
            document.getElementById("email").value = getSavedValue("email"); 
            
            document.getElementById("street_addressFnd").value = getSavedValue("street_addressFnd");
            document.getElementById("street_address").value = getSavedValue("street_address"); 
            
            document.getElementById("cityFnd").value = getSavedValue("cityFnd");
            document.getElementById("city").value = getSavedValue("city"); 
            /* Here you can add more inputs to set value. if it's saved */
    
            //Save the value function - save it to localStorage as (ID, VALUE)
            function saveValue(e){
                var id = e.id;  // get the sender's id to save it . 
                var val = e.value; // get the value. 
                localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
            }
    
            //get the saved value function - return the value of "v" from localStorage. 
            function getSavedValue  (v){
                if (!localStorage.getItem(v)) {
                    return "";// You can change this to your defualt value. 
                }
                return localStorage.getItem(v);
            }
    </script>
    
    
    
    <script>
        $(document).ready(function(){
                    
                    
                })
        $(".pay_credit").click(function(){
            $(".credit-cards").show(500);
            $(".customerareacartcss").show(500);
            $(".customerareacartcssFnd").hide(500);
            $(".hide-card").show(500);
            $("#CardInfo").show(500);
            $(".paypal-method").hide(500);
            $(".stripe-card").prop( "checked", true );
            $(".pay-now").show(500);
            $(".paypal-btn").hide(500);
            $('#CardPayBtnBox').show();
        });
        $(".pay_credit_fondy").click(function(){
            $(".credit-cards").hide(500);
            $(".customerareacartcss").hide(500);
            $(".customerareacartcssFnd").show(500);
            $(".hide-card").hide(500);
            $("#CardInfo").hide(500);
            $(".paypal-method").hide(500);
            $(".fondy-card").prop( "checked", true );
            $(".pay-now").hide(500);
            $(".paypal-btn").hide(500);
            $('#CardPayBtnBoxFND').show();
            $('#CardPayBtnBox').hide();
        });
        $(".paypal").click(function(){
            $(".credit-cards").hide(500);
            $(".customerareacartcssFnd").hide(500);
            $(".customerareacartcss").hide(500);
            $(".hide-card").hide(500);
            $("#CardInfo").hide(500);
            $(".paypal-method").show(500);
            $(".pay-pal").prop( "checked", true );
            $(".pay-now").hide(500);
            $(".paypal-btn").show(500);
            $('#CardPayBtnBox').hide();
        });
        
        $(".colpse1").click(function(){
            $(this).addClass("active");
            $(".colpse2").removeClass("active");
            $(".content1").addClass("active");
            $(".content2").removeClass("active");
            $('.content1').css("max-height","100%");
            $('.content2').css("max-height","0");
        });
        $(".colpse2").click(function(){
            $(this).addClass("active");
            $(".colpse1").removeClass("active");
            $('.content2').css("max-height","200%");
            $('.content1').css("max-height","0");
            $(".content2").addClass("active");
            $(".content1").removeClass("active");
    
        });
    </script>
    
    <script>
        function remove_coupon_code(){
            var URL= BASE_URL +'carts/remove_coupon';
            $(".loadingimg").show('Please Wait Removing Coupon Code...');
            $.ajax({type:'POST',url:URL,dataType:'html',
            beforeSend:function(){},
            success:function(resp){
                //   waitingDialog.hide();
                redirectPage(BASE_URL+'carts/viewCart');
                },
                error:function(){
                    console.log('something went wrong please try again');
                    
                }
                
            });
        }
        
        function updateCartSubscription(){
            var url=BASE_URL+'carts/updateCartSubscription';
            document.cartForm.action=url;
            document.cartForm.submit();
        }
        
        
        //  function checkEmailExistsCart(e) {
        //     var t = BASE_URL + "register/checkifEmailExists";
        // 	if(e){
        //     $.ajax({
        //         type: "POST",
        //         url: t,
        //         data: {
        //             email: e
        //         },
        //         dataType: "json",
        //         beforeSend: function() {
        //             $("#email").before(function() {
        //                 return getLoadingImg()
        //             })
        //         },
                
        //         success: function(t) {
        // 			$("#imgLoader").remove();
        //             if(t.msgStatus == "Success")
        // 			{
        // 				$('#emailCheckError').hide();
        // 			}
        // 			else
        // 			{
        // 			    $('#email').val('');
        // 				$('#loginCheck').html(e+', this account already exists.');
        // 				$('#emailCheckError').show();
            
        // 			}
        //         },
        //         error: function() {
        //             alert("something went wrong please try again"), $("#imgLoader").remove()
        //         }
        //     })
        // 	}
        //     }
        
        // function checkEmailExistsCartFnd(e) {
        //     var t = BASE_URL + "register/checkifEmailExists";
        // 	if(e){
        //     $.ajax({
        //         type: "POST",
        //         url: t,
        //         data: {
        //             email: e
        //         },
        //         dataType: "json",
        //         beforeSend: function() {
        //             $("#emailFnd").before(function() {
        //                 return getLoadingImg()
        //             })
        //         },
                
        //         success: function(t) {
        // 			$("#imgLoader").remove();
        //             if(t.msgStatus == "Success")
        // 			{
        // 				$('#emailCheckErrorFnd').hide();
        // 			}
        // 			else
        // 			{
        // 			    $('#emailFnd').val('');
        // 				$('#loginCheckFnd').html(e+', this account already exists.');
        // 				$('#emailCheckErrorFnd').show();
            
        // 			}
        //         },
        //         error: function() {
        //             alert("something went wrong please try again"), $("#imgLoader").remove()
        //         }
        //     })
        // 	}
        // }
    
        // $(document).ready(function(){
        // 	$("#ApplyCouponNew").on("click", function() {
        //             $Coupon = $("#coupon-code"), "" == $Coupon.val() ? $Coupon.focus() : validate_coupon_code_new($Coupon.val())
        //     })
        // })
    
        function UpdateGrandTotalNew() {
            var e, t = 0;
            $(".cartQty").each(function() {
                var e = $(this).attr("data") * $(this).val();
                e = parseFloat(e).toFixed(2), console.log(e), $(this).parent().parent().next("td").children("p").children().text("$" + e)
            });
            var r = 0;
            $(".sub-total-amount").each(function() {
                var e = $(this).html().replace("$", "");
                e = e.replace(",", ""), Am = parseInt(e), r = parseInt(r + Am)
            }), e = parseInt($(".DiscountAmount").html().replace("$", "")), t = parseInt(r - e), t = parseFloat(t).toFixed(2), $("#DiscountNewAmount").html("$" + t), $("#GrandTotalAmount").html("$" + t)
        }
    
        // function validate_coupon_code_new(e) {
        //     console.log(e);
        // 	UpdateGrandTotalNew();
        //     var t = BASE_URL + "carts/validate_coupon";
        //     $(".loadingimg").css("display", "block"), $.ajax({
        //         type: "POST",
        //         url: t,
        //         data: {
        //             Coupon: e
        //         },
        //         dataType: "html",
        //         beforeSend: function() {},
        //         success: function(e) {
        //             if (e = e.replace(/\s\s+/g, " "), RespObject = JSON.parse(e), RespObject.Status) {
        //                 var t = RespObject.Coupon.id,
        //                     r = RespObject.Coupon.coupon_code,
        //                     a = (RespObject.Coupon.discount_type, 0),
        //                     o = 0;
        //                 $(".sub-total-amount").each(function() {
        //                     var e = parseInt($(this).html().replace("$", ""));
        //                     a = o = parseInt(o + e)
        //                 });
        //                 var n = 0;
        //                 if ($(".cartQty").each(function() {
        //                         var e = parseInt($(this).val().replace("$", ""));
        //                         n = parseInt(n + e)
        //                     }), 1 == RespObject.Coupon.discount_type) {
        //                     var i = RespObject.Coupon.discount_amount,
        //                         s = o - i,
        //                         l = (a = s = Math.round(100 * s) / 100, i / o * 100);
        //                     $(".disCode").html('"' + r + '"'), $(".disPer").html(l), console.log(r), console.log(l)
        //                 } else if (2 == RespObject.Coupon.discount_type) {
        //                     var c = RespObject.Coupon.discount_percent;
        //                     s = o - (i = o * c / 100), a = s = Math.round(100 * s) / 100, l = RespObject.Coupon.discount_percent;
        //                     $(".disCode").html('"' + r + '"'), $(".disPer").html(l), console.log(r), console.log(l), $(".coupon-discount-area").show()
        //                 }
        //                 i = parseFloat(i).toFixed(2), s = parseFloat(s).toFixed(2), a = parseFloat(a).toFixed(2), $(".DiscountAmount").html("$" + i), $("#DiscountNewAmount").html("$" + s), $(".GrandTotalAmount").html("$" + a), update_total(i, s, a, t), $(".codemsg").hide(), $(".couponApplied").show(), $(".coupon-field").hide()
        //             } else $(".codemsg").addClass("invalid").html(RespObject.Message), $(".codemsg").show();
        //             $(".loadingimg").css("display", "none");
        //             location.reload();
        //         },
        //         error: function() {
        //             console.log("something went wrong please try again"), $(".loadingimg").css("display", "none")
        //         }
        //     })
        // }
    
        // $(document).ready(function(){
        //     $("#InputCountryFnd").change(function() {
        //             var e = $(this).val();
        //             if (e) {
        //                 var t = '<option value="">Please Wait...</option>';
        //                 $("#stateFnd").find("option").remove().end().append(t);
        //                 var r = BASE_URL + "certifications/ajaxGetStates";
        //                 $.ajax({
        //                     type: "POST",
        //                     url: r,
        //                     data: {
        //                         cid: e
        //                     },
        //                     dataType: "json",
        //                     beforeSend: function() {
        //                         $("#stateFnd").before(function() {
        //                             return getLoadingImg()
        //                         })
        //                     },
        //                     success: function(e) {
        //                         for (var t = '<option value="">Select State</option>', r = 0; r < e.length; r++) t += '<option value="' + e[r].id + '">' + e[r].name + "</option>";
        //                         t += '<option value="other">other</option>', $("#stateFnd").find("option").remove().end().append(t), $("#imgLoader").remove()
        //                     },
        //                     error: function() {
        //                         alert("something went wrong please try again"), $("#imgLoader").remove()
        //                     }
        //                 })
        //             } else {
        //                 t = '<option value="">Select State</option>';
        //                 $("#stateFnd").find("option").remove().end().append(t), $("#imgLoader").remove()
        //             }
        //         })
        // })
    </script> --}}
@include('layouts.frontend.includes.footer')
@include('layouts.frontend.includes.footer_files')
