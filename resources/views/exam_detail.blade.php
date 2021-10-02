@extends('layouts.frontend.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            {{-- <!-------------Breadcrumb--------------------------------------------> --}}
            <div class="container-fluid p-0 content">
                <section id="BreadCrumb">
                    <div class="bred">
                        <div class="container-fluid">
                            <div id="navbar">
                                <ol class="BreadCrumbList">
                                    <li>
                                        <a href="{{ route('home') }}">Home </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right "> </i>
                                    </li>
                                    <li>
                                        <a href="{{ route('vendor', $exam->vendor->slug) }}">{{ $exam->vendor->title ?? ''  }}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right "></i>
                                    </li>
                                    <li>{{ $exam->exam_code ?? ''  }} Exam Questions</li>
                                </ol>
                            </div>
                            <div class="right-bar breadcumbBar">
                                <p>&nbsp; </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- END <!-------------Breadcrumb----------------------------------------> --}}
        </section>
        <!-- Main content -->
        <section class="content">

            {{-- <!-------------Exam Detailed Info--------------------------------------------> --}}

            {{-- <!------------- Bundle Pack --------------------------------------------> --}}
            {{-- <!--Array
                (
                    [name] => {{ $exam->vendor->title ?? ''  }} Power Platform Solution Architect
                    [p_type] => 0
                    [price] => 98
                    [ptype_id] => 3
                    [exam_code] => {{ $exam->exam_code ?? ''  }}
                    [cert_names] => {{ $exam->vendor->title ?? ''  }} Dynamics 365,{{ $exam->vendor->title ?? ''  }} Power Apps + Dynamics 365 Solution Architect Expert,{{ $exam->vendor->title ?? ''  }} Power Platform
                    [vendor_name] => {{ $exam->vendor->title ?? ''  }}
                )
                --> --}}

            <section class="bundle_pack_exam ">
                <div class="container-fluid">
                    <div class="overview-box">
                        <div class="overview-content pt-3">
                            <div class="content left-content">
                                <div class="left-content-fst">
                                    <h1>{{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }} Exam</h1>
                                    <p>
                                        Prepare for {{ $exam->vendor->title ?? ''  }} {{ $exam->title ?? '' }} {{ $exam->exam_code ?? '' }} Exam
                                    </p>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="far fa-calendar-check"></i> Last Updated : {{ $exam->getUpdatedAt() ?? '' }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="fa fa-question-circle"></i> Total Questions: {{ $exam->getTotalQuestions() ?? 0 }}
                                            </span>
                                        </li>
                                    </ul>
                                    <br><br>
                                    <strong>Bundle Pack includes</strong>
                                    <br>
                                </div>
                                <div class="left-content-sec">
                                    <div class="row">
                                        <div class="versions hvr-grow-shadow">
                                            <div class="row">
                                                <div class="versions_inner_left"
                                                    style="  background-color: rgba(244,244,244,1); padding: 8px 12px; padding-top: 22px;">
                                                    <img alt="Desktop Practice Test software"
                                                        src="{{ asset('frontend/assets/site/img/Image_244.png') }}" width="38" height="38">
                                                </div>
                                                <div class="versions_inner_right" style="">
                                                    <span style="">Desktop Practice <br>Test software
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="versions hvr-grow-shadow">
                                            <div class="row">
                                                <div class="versions_inner_left"
                                                    style="background-color: rgba(244,244,244,1); padding: 8px 14px;padding-top: 22px;">
                                                    <img alt="Web Based Practice Test"
                                                        src="{{ asset('frontend/assets/site/img/Image_245.png') }}">
                                                </div>
                                                <div class="versions_inner_right" style="">
                                                    <span style="">Web Based <br>Practice Test</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="versions hvr-grow-shadow">
                                            <div class="row">
                                                <div class="versions_inner_left"
                                                    style="background-color: rgba(244,244,244,1); padding: 8px 12px; ">
                                                    <br>
                                                    <img alt="PDF" src="{{ asset('frontend/assets/site/img/Image_246.png') }}" ;>
                                                </div>
                                                <div class="versions_inner_right" style="">
                                                    <span style="">Questions & <br> Answers (PDF)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="Payment_opetion_bundle">
                                        <strong>Payment Options</strong>
                                        <form method="GET" name="bundleInfoForm" id="bundleInfoForm"
                                            action="{{route('add_cart') }}" class="form-inline form">
                                            <div class="Purchase_options row">
                                                {{-- <div style="margin: 10px;">
                                                    <div class="form-group">
                                                        <select class="selectpicker form-control" id="subscription_plan"
                                                            name="subscription_plan" onchange="updateBundlePriceExam();">
                                                            <option value="individual" selected="selected">
                                                                Individual 2 PCs
                                                            </option>
                                                            <option value="corporate">Corporate 10 PCs</option>
                                                            <option value="trainer">Trainer 25 PCs</option>
                                                        </select>
                                                    </div>
                                                </div> --}}
                                                <div style="margin: 10px;">
                                                    <div class="form-group">
                                                        <select class="selectpicker sel1 form-control" id="subscription"
                                                            name="subscription" onchange="updateBundlePriceExam();">
                                                            <option value="3" selected="selected">3 Months Updates</option>
                                                            <option value="6">6 Months Updates</option>
                                                            <option value="12">12 Months Updates</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="btnPlusprice_exam" class="row">
                                                <div class="">
                                                    <div class=" bundle_price_exam">
                                                        Price: $<span id="lbl_price">
                                                            {{ $exam->getPricing()->bundle->discounted ?? 1 }}
                                                        </span>
                                                        <del>Before: ${{ $exam->getPricing()->bundle->orignal ?? 0 }}</del>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class=" row">
                                                        <div class="col-sm-12">
                                                            <input type="hidden" id="bundle_type" name="bundle_type" value="exam-bundle" />
                                                            <input type="hidden" id='bundle_title' name="bundle_title" value="{{$exam->title ?? ''}}" />
                                                            <input type="hidden" id='bundle_code' name="bundle_code" value="{{$exam->exam_code ?? ''}}" />
                                                            <input type="hidden" id="orignalPrice" name="orignalPrice" value="{{ $exam->getPricing()->bundle->orignal ?? 1 }}" />
                                                            <input type="hidden" id="discountedPrice" name="discountedPrice" value="{{ $exam->getPricing()->bundle->discounted ?? 1 }}" />
                                                            <input type="hidden" id="subcribed_for" name="subcribed_for" value="3" />
                                                            <div class="add_to_cart">
                                                                <button class="btn" type="submit">
                                                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Right Side Image --}}
                        <div class="overview-image">
                            <div class="image" style="width: 528px; height: 512px; background:#ccc">
                                {{-- <img style="width: 80%" src="../assets/site/img/exam1%20(2).webp" alt="image"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END <!------------- Bundle Pack ----------------------------------------> --}}

            {{-- <!------------- WEB Pack --------------------------------------------> --}}
            <section class="web_based_exam bg-f7fafd">
                <div class="container-fluid">
                    <div class="overview-box">
                        {{-- Left Side Image --}}
                        <div class="overview-image">
                            <div class="image" style="width: 80%; height: 512px; background:#ccc">
                                {{-- <img style="width: 80%" src="../assets/site/img/webbased.webp" alt="image"> --}}
                            </div>
                        </div>
                        <div class="overview-content web_based_exam_content" style="padding-top: 60px;">
                            <div class="content left-content pt-5">
                                <div class="left-content-fst" style="">
                                    <h2>Web-Based {{ $exam->exam_code ?? ''  }} Practice Test</h2>
                                    <br>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="far fa-calendar-check"></i> Last Updated : {{ $exam->getUpdatedAt() ?? '' }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="fa fa-question-circle"></i> {{ $exam->getTotalQuestions() ?? 0 }} Total Questions
                                            </span>
                                        </li>
                                    </ul>
                                    &nbsp;
                                    <p>
                                        {{ $exam->exam_code ?? ''  }} Web-Based Practice Test Engine Features:
                                    </p>
                                    <ul class="web_based_ul">
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            No Installation Required
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Start your Prepartion Instantly
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            900+ Satisfied Customers
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Based on Actual Exam Topics
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Compatible with All Major Browsers &amp; Operating Systems
                                        </li>
                                    </ul>
                                    <br />
                                    &nbsp;
                                    <div id="btnPlusprice_exam_webbased" class="row">
                                        <div>
                                            <div class="bundle_price_exam_webbased">
                                                Price: ${{ $exam->getPricing()->web->discounted ?? 1 }}
                                                <del>Before: ${{ $exam->getPricing()->web->orignal ?? '' }}</del>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="add_demo_btn">
                                                <ul>
                                                    <form method="GET"  action="{{route('add_cart') }}" class="web_form">
                                                        <input type="hidden" id="bundle_type" name="bundle_type" value="exam-web" />
                                                        <input type="hidden" id='bundle_title' name="bundle_title" value="{{$exam->title ?? ''}}" />
                                                        <input type="hidden" id='bundle_code' name="bundle_code" value="{{$exam->exam_code ?? ''}}" />
                                                        <input type="hidden" id="orignalPrice" name="orignalPrice" value="{{ $exam->getPricing()->web->orignal ?? 1 }}" />
                                                        <input type="hidden" id="discountedPrice" name="discountedPrice" value="{{ $exam->getPricing()->web->discounted ?? 1 }}" />
                                                        <input type="hidden" id="subcribed_for" name="subcribed_for" value="3" />
                                                        <button id="btn-cart" type="submit" class="btn">
                                                            <i class="fa fa-shopping-cart"></i> Add To Cart
                                                        </button>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                    </form>
                                                    <button id="btn-demo6"  class="try-5 btn pop_onloneDemo demo" data_val="1" demo>
                                                        Demo
                                                    </button>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END <!------------- WEB Pack ----------------------------------------> --}}

            {{-- <!------------- PDF Pack --------------------------------------------> --}}
            <section class="pdf_pack">
                <div class="container-fluid p-0">
                    <div class="overview-box">
                        <div class="overview-content" style="padding-top: 60px;">
                            <div class="content left-content pt-5">
                                <div class="left-content-inner">
                                    <h2>{{ $exam->exam_code ?? ''  }} Questions & Answers (PDF)</h2>
                                    <br>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="far fa-calendar-check"></i> Last Updated : {{ $exam->getUpdatedAt() ?? '' }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="fa fa-question-circle"></i> {{ $exam->getTotalQuestions() ?? 0 }} Total Questions
                                            </span>
                                        </li>
                                    </ul>
                                    &nbsp;
                                    <p style="margin-bottom: 2%;">
                                        {{ $exam->exam_code ?? ''  }} PDF Format
                                    </p>
                                    <ul class="pdf_ul">
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Compatible with All Modern Devices including Smartphones
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Easy to Use
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            1200+ Satisfied Customers
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Based on Actual {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }} Syllabus
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            90 Days Free Updates
                                        </li>
                                    </ul>
                                    <br />
                                    &nbsp;
                                    <div id="btnPlusprice_exam_pdf" class="row">
                                        <div class="">
                                            <div class="bundle_price_exam_pdf">
                                                Price: ${{ $exam->getPricing()->pdf->discounted ?? 1 }}
                                                <del>Before: ${{ $exam->getPricing()->pdf->orignal ?? '' }}</del>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="add_demo_btn">
                                                <ul>
                                                    <form method="GET"  action="{{route('add_cart') }}" class="pdf_form">
                                                        <input type="hidden" id="bundle_type" name="bundle_type" value="exam-pdf" />
                                                        <input type="hidden" id='bundle_title' name="bundle_title" value="{{$exam->title ?? ''}}" />
                                                        <input type="hidden" id='bundle_code' name="bundle_code" value="{{$exam->exam_code ?? ''}}" />
                                                        <input type="hidden" id="orignalPrice" name="orignalPrice" value="{{ $exam->getPricing()->pdf->orignal ?? 1 }}" />
                                                        <input type="hidden" id="discountedPrice" name="discountedPrice" value="{{ $exam->getPricing()->pdf->discounted ?? 1 }}" />
                                                        <input type="hidden" id="subcribed_for" name="subcribed_for" value="3" />
                                                        <button id="btn-cart1"  type="submit" class="btn">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            Add To Cart
                                                        </button>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                    </form>
                                                    <button id="btn-demo8" class="try-5 btn pop_pdfDemo demo" data_val="1">
                                                        Demo
                                                    </button>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Right Side Image --}}
                        <div class="overview-image">
                            <div class="image" style="width: 528px; height: 512px; background:#ccc">
                                {{-- <img style="width: 80%" src="../assets/site/img/pdf%20(2).webp" alt="image"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END <!------------- PDF Pack ----------------------------------------> --}}

            {{-- <!------------- Desktop Pack --------------------------------------------> --}}
            <section class="desktop_version_exam bg-f7fafd">
                <div class="container-fluid p-0">
                    <div class="overview-box">
                        {{-- Left Side Image --}}
                        <div class="overview-image">
                            <div class="image" style="width: 528px; height: 512px; background:#ccc">
                                {{-- <img style="width: 80%" src="../assets/site/img/image_4.webp" alt="image"> --}}
                            </div>
                        </div>
                        <div class="overview-content" style="padding-top: 60px;">
                            <div class="content left-content pt-5">
                                <div class="left-content-inner"style="">
                                    <h2>{{ $exam->exam_code ?? ''  }} Desktop Practice Test Software</h2>
                                    <br>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew"><i class="far fa-calendar-check"></i>
                                                Last Updated : {{ $exam->getUpdatedAt() ?? '' }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew"><i class="fa fa-question-circle"></i>
                                                {{ $exam->getTotalQuestions() ?? 0 }} Total Questions
                                            </span>
                                        </li>
                                    </ul>
                                    &nbsp;
                                    <p style=" margin-bottom: 2%;">
                                        {{ $exam->exam_code ?? ''  }} Desktop Practice Test
                                    </p>
                                    <ul class="desktop_ul">
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Best {{ $exam->exam_code ?? ''  }} Self-Assesment Software
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Reduce your chances of failure in actual {{ $exam->exam_code ?? ''  }} exam
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            500+ Satisfied Customers
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Compatible with Windows 8/8.1/10
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            Customizable Test Sessions, Try Free
                                        </li>
                                    </ul>
                                    <br />
                                    &nbsp;
                                    <div id="btnPlusprice_exam_desktop" class="row">
                                        <div class="">
                                            <div class="bundle_price_exam_desktop">
                                                Price: ${{ $exam->getPricing()->desktop->discounted ?? 1 }}
                                                <del>Before: ${{ $exam->getPricing()->desktop->orignal ?? '' }}</del>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="add_demo_btn">
                                                <ul>
                                                    <form method="GET"  action="{{route('add_cart') }}" class="soft_form">
                                                        <input type="hidden" id="bundle_type" name="bundle_type" value="exam-desktop" />
                                                        <input type="hidden" id='bundle_title' name="bundle_title" value="{{$exam->title ?? ''}}" />
                                                        <input type="hidden" id='bundle_code' name="bundle_code" value="{{$exam->exam_code ?? ''}}" />
                                                        <input type="hidden" id="orignalPrice" name="orignalPrice" value="{{ $exam->getPricing()->desktop->orignal ?? 1 }}" />
                                                        <input type="hidden" id="discountedPrice" name="discountedPrice" value="{{ $exam->getPricing()->desktop->discounted ?? 1 }}" />
                                                        <input type="hidden" id="subcribed_for" name="subcribed_for" value="3" />
                                                        <button id="btn-cart2"  type="submit" class="btn">
                                                            <i class="fa fa-shopping-cart"></i> Add To Cart
                                                        </button>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                    </form>
                                                    <button id="btn-demo1" class="try-5 btn pop_softDemo demo" data_val="2">
                                                        Demo
                                                    </button>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END <!------------- Desktop Pack ----------------------------------------> --}}

            {{-- <!------------- Features of Exam --------------------------------------------> --}}
            <section class="features_exam pt-5 pb-5 bg-f7fafd">

                <section class="features_exam pt-5 pb-5 bg-f7fafd" style=" ">
                    <div class="section-title">
                        {{-- <span class="heading_bg_heading_1">OUR STRENGTH</span> --}}
                        <h3>How Does Certsidea Serve You?</h3>
                    </div>
                    <div class="container">
                        <div style="text-align: center; margin-bottom: 3%; margin-top: -2%;">
                            <p>
                                Our {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }} practice test is the most reliable solution to quickly prepare for your
                                {{ $exam->vendor->title ?? ''  }} Power Platform Solution Architect. We are certain that our {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }}
                                practice exam will guide you to get certified on the first try.
                                Here is how we serve you to prepare successfully:
                            </p>
                        </div>
                        <div class="features_exam_inner">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 pb-4">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            {{-- <img alt="Practice Test" src="../assets/site/img/Path_1096.png" /> --}}
                                            <img alt="pdf" height="80" src="{{asset('frontend/assets/site/img/image_pdf.png')}}" width="70" />
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="heading">
                                                Free Demo of {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }} Practice Test
                                            </p>
                                            <p class="content">
                                                Try a free demo of our {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }} PDF and practice exam software before
                                                the purchase to get a closer look at practice questions and answers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 pb-4">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <img alt="updates" height="58" src="{{asset('frontend/assets/site/img/image_ero1.png')}}" width="70" />
                                            {{-- <img alt="Updates" src="../assets/site/img/Image_270.png" /> --}}
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="heading">
                                                Up to 3 Months of Free Updates
                                            </p>
                                            <p class="content">
                                                We provide up to 3 months of free after-purchase updates so that you get
                                                {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }} practice questions of today and
                                                not yesterday.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 pb-4">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <img alt="Success" height="74" src="{{asset('frontend/assets/site/img/image_sun.png')}}" width="70" />
                                            {{-- <img alt="Certified" src="../assets/site/img/Image_271.png" /> --}}
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="heading">
                                                Get Certified in First Attempt
                                            </p>
                                            <p class="content">
                                                We have a long list of satisfied customers from multiple countries.
                                                Our {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }} practice questions will
                                                certainly assist you to get passing marks on the first attempt.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 pb-4">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <img alt="Com" height="66" src="{{asset('frontend/assets/site/img/image_com.png')}}" width="70" />
                                            {{-- <img alt="Questions" src="../assets/site/img/Image_272.png" /> --}}
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="heading">
                                                PDF Questions and Practice Test
                                            </p>
                                            <p class="content">
                                                Certsidea offers {{ $exam->vendor->title ?? ''  }} {{ $exam->exam_code ?? ''  }}
                                                PDF questions, web-based and desktop practice tests that are consistently
                                                 updated.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 pb-4 ">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <img alt="Customer" height="70" src="{{asset('frontend/assets/site/img/image_user1.png')}}" width="70" />
                                                {{-- <img alt="Customer" src="../assets/site/img/image_user1.png" /> --}}
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="heading">
                                                    24/7 Customer Support
                                                </p>
                                                <p class="content">
                                                    Certsidea has a support team to answer your queries 24/7. Contact us
                                                    if you face login issues, payment and download issues. We will
                                                    entertain you as soon as possible.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 pb-4 ">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <img alt="Guaranteed" height="62" src="{{asset('frontend/assets/site/img/image_guran.png')}}" width="70" />
                                                {{-- <img alt="Guaranteed " src="../assets/site/img/guarantee.png" style="width: 80px;" /> --}}
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="heading">
                                                    100% Guaranteed Customer Satisfaction
                                                </p>
                                                <p class="content">
                                                    Thousands of customers passed the {{ $exam->vendor->title ?? ''  }} Power Platform
                                                    Solution Architect exam by using our product. We ensure that upon using our
                                                    exam products, you are satisfied.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            {{-- END <!------------- Features of Exam ----------------------------------------> --}}

            {{-- <!------------- Recent Updated Exams --------------------------------------------> --}}
            <section class="recent_update_exam_home pt-5 pb-5 bg-f7fafd">
                <div class="recent_update_exam_top_home">
                    <h3>Recent Updated Exams</h3>
                </div>
                <div class="recent_update_exam_bottom_home container">
                    <div class="row">
                        @forelse(recentUpdatedExams() as $recent_exam)
                            <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
                                <div class="card " style="">
                                    <div class="card-body hvr-sweep-to-right">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                                                <div style="text-align: center;">
                                                    <b><a href="javascript:;">{{ $recent_exam->exam_code }}</a></b>
                                                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">
                                                    {{ $recent_exam->title }}
                                                    </strong>
                                                    <p>{{ $recent_exam->questions->count() }} Total Questions </p>
                                                </div>
                                            </div>
                                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                                <div style="text-align: center;     padding-top: 10px;">
                                                    <strong>{{ date('d', strtotime($recent_exam->updated_at)) }}</strong>
                                                    <b >{{ date('F', strtotime($recent_exam->updated_at)) }}</b>
                                                    <p style=""><b>{{ date('Y', strtotime($recent_exam->updated_at)) }}</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </section>
            {{-- END <!------------- Recent Updated Exams ----------------------------------------> --}}

            {{-- <!------------- Certifications Testimonials --------------------------------------------> --}}
            <section class="exam_vendor_testimonials pt-5 pb-5" style=" ">
                <div class="section-title">
                    {{-- <span class="new_testimonials_bg_heading">TESTIMONIALS</span> --}}
                    <h3>{{ $exam->vendor->title ?? '' }} {{$exam->exam_code ?? ''}} Exam Testimonials</h3>
                </div>
                <div id="sample_page_2_new_testimonials" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 mb-4">
                    <div id="parant_comment" class="container mt-3">
                        <div class="media p-3">
                            <div class="initalname">
                                V
                            </div>
                            <div class="media-body">
                                <p style="color: #22ad95;font-size: 20px;font-weight: 500;">
                                    Virginia
                                    <!--<img src="https://flagcdn.com/w80/ca.png" alt="flag"  class="dicls">-->
                                    <span style="float: right;font-size: 16px;color: #da0606;"><i>Aug 30, 2021</i></span>
                                </p>
                                <div class="rating">
                                </div>
                                <p>
                                    Choosing {{ $exam->exam_code ?? '' }}  mock test of certsidea.com for practice was a conscious decision.
                                    I did not find anything better than these mock tests.
                                    They are designed to give practice to people who seriously want to clear the {{ $exam->exam_code ?? '' }} exam .
                                    The tests are well within my budget and I am sure practicing on them will help me pass the exam
                                    in first attempt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- END <!------------- Certifications Testimonials ----------------------------------------> --}}

            {{-- <!------------- Comments Area --------------------------------------------> --}}
            <section id="commentwriteareavendor" class="commentwritearea" style="background-color:#e1ffff;display:none;">
                <div class="container">
                    <div class="topArea">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="h4"> Leave Your Comment</div>
                            </div>
                        </div>
                    </div>
                    <div class="mainformarea">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="form-messages" style="background:none;">

                                </div>
                                <div class="text-center">
                                    <div class="alert alert-success" style="display:none"></div>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <!--<form method="post" name="contactusForm" id="contactusForm" action="https://www.certsidea.com/contact">-->
                                <div name="contactusForm" id="contactusForm">
                                    <div class="inputArea">
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="NameSearch form-control" id="full_name" name="full_name"
                                                    value="" placeholder="Full Name" required="required">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="NameSearch form-control" id="email" name="email" value=""
                                                    placeholder="example@email.com" required="required">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="NameSearch form-control" id="subject" name="subject"
                                                    value="" placeholder="Subject" required="required">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="LgSearch form-control" id="message" name="message" rows="8"
                                                    placeholder="Message" required="required"></textarea>
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <button class="btn btn-success" id="submitcontactdata">submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END <!------------- Comments Area ----------------------------------------> --}}

    {{-- END <!-------------Exam Detailed Info--------------------------------------------> --}}
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        function updateBundlePriceExam() {
            let orignalPrice=0;
            let discountedPrice=0;
            let subscribed_for = $("#subscription").val();
            if(subscribed_for==3){
                orignalPrice = '{{ $exam->getPricing()->bundle->orignal ?? 1 }}';
                discountedPrice = '{{ $exam->getPricing()->bundle->discounted ?? 1 }}';
            }
            if(subscribed_for==6){
                orignalPrice = '{{ $exam->getPricing()->bundle->orignal_price_2 ?? 1 }}';
                discountedPrice = '{{ $exam->getPricing()->bundle->discounted_price_2 ?? 1 }}';
            }
            if(subscribed_for==12){
                orignalPrice = '{{ $exam->getPricing()->bundle->orignal_price_3 ?? 1 }}';
                discountedPrice = '{{ $exam->getPricing()->bundle->discounted_price_3 ?? 1 }}';
            }

            $(".bundle_price_exam #lbl_price").text(discountedPrice);
            $(".bundle_price_exam del").text(' Before: $'+orignalPrice);
            $("#orignalPrice").val(orignalPrice);
            $("#discountedPrice").val(discountedPrice);
            $("#subcribed_for").val(subscribed_for);
        }
      </script>
@endsection
