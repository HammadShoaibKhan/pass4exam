@extends('layouts.frontend.master')
@section('content')
    {{-- @foreach ($exam_info as $exam) --}}

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
                                        <a href="{{ route('vendor') }}">{{ 'vender' }}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right "></i>
                                    </li>
                                    <li>{{ '$exam->exam_code' }} Questions</li>
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
            <!--Array
                (
                    [name] => Microsoft Power Platform Solution Architect
                    [p_type] => 0
                    [price] => 98
                    [ptype_id] => 3
                    [exam_code] => PL-600
                    [cert_names] => Microsoft Dynamics 365,Microsoft Power Apps + Dynamics 365 Solution Architect Expert,Microsoft Power Platform
                    [vendor_name] => Microsoft
                )
                -->

            <section class="bundle_pack_exam ">
                <div class="container-fluid">
                    <div class="overview-box">
                        <div class="overview-content pt-3">
                            <div class="content left-content">
                                <div class="left-content-fst">
                                    <h1>Microsoft PL-600 Exam</h1>
                                    <p>Prepare for Microsoft Power Platform Solution Architect PL-600 Exam</p>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="far fa-calendar-check"></i> Last Updated : 31-07-2021
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="fa fa-question-circle"></i> Total Questions: 47
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
                                        <form method="post" name="bundleInfoForm" id="bundleInfoForm"
                                            action="https://www.study4exam.com/carts/" class="form-inline form">
                                            <div class="Purchase_options row">
                                                <div style="margin: 10px;">
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
                                                </div>
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
                                                        Price: $<span id="lbl_price">79</span> 
                                                        <del>Before: $158</del> 
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class=" row">
                                                        <div class="col-sm-12">
                                                            <input type="hidden" id='bundle_name' name="bundle_name"
                                                                value="Microsoft PL-600 Bundle Pack" />
                                                            <input type="hidden" id="price" name="price" value="158" />
                                                            <input type="hidden" id="checkout_price" name="checkout_price"
                                                                value="158" />
                                                            <input type="hidden" id="bundle_type" name="bundle_type"
                                                                value="default" />
                                                            <input type="hidden" id="bundle_id" name="bundle_id" value="4" />
                                                            <input type="hidden" id="bundle_type_id" name="bundle_type_id"
                                                                value="3923" />
                                                            <input type="hidden" id="subscription_price_3_inc"
                                                                name="subscription_price_3_inc" value="0" />
                                                            <input type="hidden" id="subscription_price_6_inc"
                                                                name="subscription_price_6_inc" value="30" />
                                                            <input type="hidden" id="subscription_price_12_inc"
                                                                name="subscription_price_12_inc" value="50" />
                                                            <input type="hidden" id="individual_pcs" name="individual_pcs"
                                                                value="2" />
                                                            <input type="hidden" id="individual_price_inc"
                                                                name="individual_price_inc" value="0" />
                                                            <input type="hidden" id="corporate_pcs" name="corporate_pcs"
                                                                value="10" />
                                                            <input type="hidden" id="corporate_price_inc" name="corporate_price_inc"
                                                                value="50" />
                                                            <input type="hidden" id="trainer_pcs" name="trainer_pcs" value="25" />
                                                            <input type="hidden" id="trainer_price_inc" name="trainer_price_inc"
                                                                value="100" />
                                                            <input type="hidden" id="shop_type" name="shop_type" value="bundle" />
                                                            <input type="hidden" id="bundleType" name="bundleType" value="3" />
                                                            <input type="hidden" id="bundleIcon" name="bundleIcon"
                                                                value="img_4210801752032.html" />
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
                                    <h2>Web-Based PL-600 Practice Test</h2>
                                    <br>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="far fa-calendar-check"></i> Last Updated : 31-07-2021
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="fa fa-question-circle"></i> 47 Total Questions
                                            </span>
                                        </li>
                                    </ul>
                                    &nbsp; 
                                    <p>
                                        PL-600 Web-Based Practice Test Engine Features:
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
                                                Price: $49 
                                                <del>Before: $98</del> 
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="add_demo_btn">
                                                <ul>
                                                    <form action="https://www.study4exam.com/carts/" method="post" class="web_form">
                                                        <input type="hidden" value="Online Practice Exam" name="product_name" />
                                                        <input type="hidden" value="PL-600" name="exam_code" />
                                                        <input type="hidden" value="3" name="ptype_id" />
                                                        <input type="hidden" value="single" name="shop_type" />
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
                                    <h2>PL-600 Questions & Answers (PDF)</h2>
                                    <br>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="far fa-calendar-check"></i> Last Updated : 31-07-2021
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew">
                                                <i class="fa fa-question-circle"></i> 47 Total Questions
                                            </span>
                                        </li>
                                    </ul>
                                    &nbsp; 
                                    <p style="margin-bottom: 2%;">
                                        PL-600 PDF Format
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
                                            Based on Actual Microsoft PL-600 Syllabus
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
                                                Price: $59 
                                                <del>Before: $118</del> 
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="add_demo_btn">
                                                <ul>
                                                    <form action="https://www.study4exam.com/carts/" method="post" class="pdf_form">
                                                        <input type="hidden" value="PDF" name="product_name" />
                                                        <input type="hidden" value="PL-600" name="exam_code" />
                                                        <input type="hidden" value="1" name="ptype_id" />
                                                        <input type="hidden" value="single" name="shop_type" />
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
                                    <h2>PL-600 Desktop Practice Test Software</h2>
                                    <br>
                                    <ul class="services-list">
                                        <li>
                                            <span class="hvr-wobble-skew"><i class="far fa-calendar-check"></i> 
                                                Last Updated : 31-07-2021 
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hvr-wobble-skew"><i class="fa fa-question-circle"></i> 
                                                47 Total Questions
                                            </span>
                                        </li>
                                    </ul>
                                    &nbsp; 
                                    <p style=" margin-bottom: 2%;">
                                        PL-600 Desktop Practice Test
                                    </p> 
                                    <ul class="desktop_ul"> 
                                        <li>
                                            <span><i class="fas fa-check"></i></span> 
                                            Best PL-600 Self-Assesment Software
                                        </li> 
                                        <li>
                                            <span><i class="fas fa-check"></i></span> 
                                            Reduce your chances of failure in actual PL-600 exam
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
                                                Price: $39 
                                                <del>Before: $78</del> 
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="add_demo_btn">
                                                <ul>
                                                    <form action="https://www.study4exam.com/carts/" method="post" class="soft_form">
                                                        <input type="hidden" value="Practice Exam" name="product_name" />
                                                        <input type="hidden" value="PL-600" name="exam_code" />
                                                        <input type="hidden" value="2" name="ptype_id" />
                                                        <input type="hidden" value="single" name="shop_type" />
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
                        <span class="heading_bg_heading_1">OUR STRENGTH</span>
                        <h3>How Does Study4exam Serve You?</h3> 
                    </div> 
                    <div class="container"> 
                        <div style="text-align: center; margin-bottom: 3%; margin-top: -2%;"> 
                            <p>
                                Our Microsoft PL-600 practice test is the most reliable solution to quickly prepare for your 
                                Microsoft Power Platform Solution Architect. We are certain that our Microsoft PL-600 
                                practice exam will guide you to get certified on the first try. 
                                Here is how we serve you to prepare successfully:
                            </p> 
                        </div> 
                        <div class="features_exam_inner"> 
                            <div class="row"> 
                                <div class="col-lg-6 col-md-6 col-sm-12 pb-4"> 
                                    <div class="row"> 
                                        <div class="col-xs-2">
                                            <img alt="Practice Test" src="../assets/site/img/Path_1096.png" />
                                        </div> 
                                        <div class="col-lg-10"> <p class="heading">Free Demo of Microsoft PL-600 Practice Test</p> <p class="content">Try a free demo of our Microsoft PL-600 PDF and practice exam software before the purchase to get a closer look at practice questions and answers.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4"> <div class="row"> <div class="col-xs-2"><img alt="Updates" src="../assets/site/img/Image_270.png" /></div> <div class="col-lg-10"> <p class="heading">Up to 3 Months of Free Updates</p> <p class="content">We provide up to 3 months of free after-purchase updates so that you get Microsoft PL-600 practice questions of today and not yesterday.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4"> <div class="row"> <div class="col-xs-2"><img alt="Certified" src="../assets/site/img/Image_271.png" /></div> <div class="col-lg-10"> <p class="heading">Get Certified in First Attempt</p> <p class="content">We have a long list of satisfied customers from multiple countries. Our Microsoft PL-600 practice questions will certainly assist you to get passing marks on the first attempt.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4"> <div class="row"> <div class="col-xs-2"><img alt="Questions" src="../assets/site/img/Image_272.png" /></div> <div class="col-lg-10"> <p class="heading">PDF Questions and Practice Test</p> <p class="content">Study4exam offers Microsoft PL-600 PDF questions, web-based and desktop practice tests that are consistently updated.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 "> <div class="row"> <div class="col-xs-2"><img alt="Customer" src="../assets/site/img/image_user1.png" /></div> <div class="col-lg-10"> <p class="heading">24/7 Customer Support</p> <p class="content">Study4exam has a support team to answer your queries 24/7. Contact us if you face login issues, payment and download issues. We will entertain you as soon as possible.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 "> <div class="row"> <div class="col-xs-2"><img alt="Guaranteed " src="../assets/site/img/guarantee.png" style="width: 80px;" /></div> <div class="col-lg-10"> <p class="heading">100% Guaranteed Customer Satisfaction</p> <p class="content">Thousands of customers passed the Microsoft Power Platform Solution Architect exam by using our product. We ensure that upon using our exam products, you are satisfied.</p> </div> </div> </div> </div> </div> </div> </section>     </div>
            </section>
            {{-- END <!------------- Features of Exam ----------------------------------------> --}}

            {{-- <!------------- Recent Updated Exams --------------------------------------------> --}}
            <section class="recent_update_exam_exam pt-5 pb-5 bg-f7fafd">
                <div class="recent_update_exam_top_exam">
            
                              <div class="recent_update_exam_top_exam"><span class="heading_bg_heading_1">RECENT UPDATES</span> <h3>Recently Updated Exams</h3> </div>     </div>
                    <div class="recent_update_exam_bottom_exam container">
                  <div class="row">
                              <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="az-204.html">AZ-204</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Developing Solutions for Microsoft Azure Exam</strong>
                                <p><b>246 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--05 August 2021-->
                                <strong>05</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="../cisco/300-410-enarsi.html">300-410</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Implementing Cisco Enterprise Advanced Routing and Services</strong>
                                <p><b>216 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--04 August 2021-->
                                <strong>04</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="../salesforce/adm-201.html">ADM-201</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Administration Essentials for New Admins</strong>
                                <p><b>360 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--04 August 2021-->
                                <strong>04</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="../amazon/ans-c00.html">ANS-C00</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">AWS Advanced Networking Specialty</strong>
                                <p><b>153 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--04 August 2021-->
                                <strong>04</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="../cisco/300-715-sise.html">300-715</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Implementing and Configuring Cisco Identity Services Engine</strong>
                                <p><b>152 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--04 August 2021-->
                                <strong>04</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="../servicenow/csa.html">CSA</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">ServiceNow Certified System Administrator</strong>
                                <p><b>147 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--03 August 2021-->
                                <strong>03</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="../cisco/350-801-clcor.html">350-801</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Implementing and Operating Cisco Collaboration Core Technologies</strong>
                                <p><b>240 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--03 August 2021-->
                                <strong>03</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="../apics/cscp.html">CSCP</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">APICS Certified Supply Chain Professional</strong>
                                <p><b>360 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--03 August 2021-->
                                <strong>03</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
                              </div>
                            </div>
            
                          </div>
                        </div>
                      </div>
                    </div>
                            <div class="recent_update_exam_bottom_card_exam col-lg-4 col-md-12 col-sm-12 mb-4">
                      <div class="card" style="">
                        <div class="card-body hvr-sweep-to-right">
                          <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                              <div style="text-align: center;">
                                <b><a href="dp-300.html">DP-300</a></b>
                                <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Administering Relational Databases on Microsoft Azure</strong>
                                <p><b>176 Total Questions </b></p>
                              </div>
                            </div>
                            <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                              <div style="text-align: center;     padding-top: 10px;">
                                  <!--03 August 2021-->
                                <strong>03</strong>
                                <b style="display: block;margin-bottom: 8px;font-size: 15px;font-family: 'Roboto';">August</b>
                                <p>
                                  <b>2021</b></p>
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
            {{-- END <!------------- Recent Updated Exams ----------------------------------------> --}}

    {{-- <!------------- Vendor Testimonials --------------------------------------------> --}}
    <section class="exam_vendor_testimonials pt-5 pb-5" style=" ">
        <div class="section-title">
            {{-- <span class="new_testimonials_bg_heading">TESTIMONIALS</span> --}}
            <h3>{{ $vendor_title ?? '' }} Certification Exam Testimonials</h3>
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
                            Choosing DP-100 mock test of certsidea.com for practice was a conscious decision.
                            I did not find anything better than these mock tests.
                            They are designed to give practice to people who seriously want to clear the DP-100 exam .
                            The tests are well within my budget and I am sure practicing on them will help me pass the exam
                            in first attempt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END <!------------- Vendor Testimonials ----------------------------------------> --}}

    {{-- <!------------- Comments Area --------------------------------------------> --}}
    <section id="commentwriteareavendor" class="commentwritearea" style="background-color:#e1ffff;">
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
    {{-- @endforeach --}}

@endsection
