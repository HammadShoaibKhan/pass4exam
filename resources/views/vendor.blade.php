@extends('layouts.frontend.master')
@section('content')
<?php
  $vendor_title = ($vendor->title)? $vendor->title:'';
  $vendor_description = ($vendor->description)? $vendor->description:'';

  // key must be equal to Replaceable Codes
  // Replaceable values can be seen in helper file ==> getReplaceables()
  $replacers = array(
    '{{VENDOR-TITLE}}'      =>  $vendor_title,
  );
?>
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
                                    <i class="fa fa-chevron-right "></i>
                                  </li>
                                  <li>{{$vendor_title ?? ''}}</li>
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
          {{-- <div class="container-fluid"> --}}
          {{-- <!-------------BundlePack--------------------------------------------> --}}
          <section class="bundle_pack_vendor pb-3">
            <div class="container-fluid">
              <div class="overview-box">
                <div class="overview-content pt-3">
                  <div class="content left-content" style="padding-right: 0px;">
                    <div class="left-content-fst">
                      <h1 style="font-size: 30px; color: #e2574c; font-family: 'Roboto'; font-weight: bold;">
                        {{$vendor_title ?? ''}} Certification Exams Discount Pack
                      </h1>
                      <br>
                      <p style="color: #363636; font-size: 22px; font-weight: bold; font-family: 'Roboto'; margin: 0px;">
                        Get All Product formats for All Microsoft Exams
                      </p>
                      <br>
                    </div>
                    <form method="GET"  action="{{route('add_cart') }}" class="form-inline form">
                      <input type="hidden" id="shop_type" name="shop_type" value="bundle" />
                      <input type="hidden" id="bundleType" name="bundleType" value="1" />
                      <input type="hidden" id="bundleIcon" name="bundleIcon" value="IMG_4210801752032.png" />
                      <div class="left-content-sec">
                        <div class="row">
{{--                          <div class="versions hvr-grow-shadow">--}}
{{--                            <div class="row">--}}
{{--                              <div class="versions_inner_left " style="  background-color: rgba(244,244,244,1); padding: 8px 12px; padding-top: 22px;">--}}
{{--                                <img width="38" height="38" alt="Desktop Practice Test software" src="{{ asset('frontend/assets/site/img/Image_244.png') }}">--}}
{{--                              </div>--}}
{{--                              <div class="versions_inner_right">--}}
{{--                                <span style="">Desktop Practice <br>Test software</span>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
                          <div class="versions hvr-grow-shadow">
                            <div class="row">
                              <div class="versions_inner_left" style="background-color: rgba(244,244,244,1); padding: 8px 14px;padding-top: 22px;">
                                <img width="32" height="32" alt="Web Based Practice Test" src="{{ asset('frontend/assets/site/img/Image_2455.png') }}">
                              </div>
                              <div class="versions_inner_right">
                                <span style="">Web Based <br>Practice Test</span>
                              </div>
                            </div>
                          </div>
                          <div class="versions hvr-grow-shadow">
                            <div class="row">
                              <div class="versions_inner_left" style="background-color: rgba(244,244,244,1); padding: 8px 12px; ">
                                <br>
                                <img width="32" height="32" alt="Questions & Answers (PDF)" src="{{ asset('frontend/assets/site/img/Image_246.png') }}">
                              </div>
                              <div class="versions_inner_right" style="">
                                <span style="">Questions & <br> Answers (PDF)</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="qualitys hvr-float-shadow">
                            <div class="qualitys_inner">
                              <div>{{$vendor->getTotalExams() ?? '' }}<span><i class="fas fa-clipboard-list"></i></span></div>
                                <p>Total Active Exams </p>
                            </div>
                          </div>
                          <div class="qualitys hvr-float-shadow">
                            <div class="qualitys_inner">
                              <div>90<span><i class="fas fa-sync-alt"></i></span></div>
                              <p>Days Free Updates </p>
                            </div>
                          </div>
                          <div class="qualitys hvr-float-shadow">
                            <div class="qualitys_inner">
                              <div>Yes <span><i class="fas fa-file-download"></i></span></div>
                              <p>Unlimited download</p>
                            </div>
                          </div>
                          <div class="qualitys hvr-float-shadow">
                            <div class="qualitys_inner">
                              <div>Yes <span><i class="fas fa-file-download"></i></span></div>
                              <p>Instant Download</p>
                            </div>
                          </div>
                        </div>

                        <br><br>

                        <div class="payment_option_main">
                          <strong style="color: #363636; font-size: 22px; font-weight: bold; font-family: 'Roboto';">
                            Payment Options
                          </strong>
                          <div class="Purchase_options row">
                            <div style="margin: 10px;">
                              <select style="height: 40px;
                                border-radius: 5px;
                                border: 2px solid #efefef;
                                padding-left: 10px;
                                width: 100%;
                                font-size: 13px;
                                font-weight: 400;
                                margin-bottom: 10px;"
                                id="subscription" name="subscription"
                                onchange="updateBundlePrice();">
                                <option value="3" selected="selected">3 Months Updates</option>
                                <option value="6">6 Months Updates</option>
                                <option value="12">12 Months Updates</option>
                              </select>
                            </div>
                            {{-- <div style="margin: 10px;">
                              <select style="height: 40px;
                                border-radius: 5px;
                                border: 2px solid #efefef;
                                padding-left: 10px;
                                width: 100%;
                                font-size: 13px;
                                font-weight: 400;
                                margin-bottom: 10px;"
                                id="subscription_plan"
                                name="subscription_plan"
                                onchange="updateBundlePrice();">
                                <option value="individual" selected="selected">Individual 2 PCs</option>
                                <option value="corporate">Corporate 10 PCs</option>
                                <option value="trainer">Trainer 25 PCs</option>
                              </select>
                            </div> --}}
                          </div>

                          <div id="btnPlusprice" class="row">
                            <div class="___class_+?50___">
                              {{-- @TODO --}}
                              <div class="bundle_price">Price: $
                                <span id="lbl_price">{{ $vendor->getPricing()->bundle->discounted ?? 1 }}</span>
                                <del> Before: ${{ $vendor->getPricing()->bundle->orignal ?? 1 }} </del>
                              </div>
                            </div>

                            <div class="___class_+?53___">
                              <input type="hidden" id="bundle_type" name="bundle_type" value="vendor" />
                              <input type="hidden" id='bundle_title' name="bundle_title" value="{{$vendor_title ?? ''}} Certification Exams Bundle" />
                              <input type="hidden" id="orignalPrice" name="orignalPrice" value="{{ $vendor->getPricing()->bundle->orignal ?? 1 }}" />
                              <input type="hidden" id="discountedPrice" name="discountedPrice" value="{{ $vendor->getPricing()->bundle->discounted ?? 1 }}" />
                              <input type="hidden" id="subcribed_for" name="subcribed_for" value="3" />
                              <input type="hidden" id="vendor_id" name="vendor_id" value="{{$vendor->id ?? ''}}" />
                              <div class="___class_+?54___">
                                <button type="submit"  class="btn" href="">
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
                {{-- Right Portion --}}
                <div class="overview-image">
                  <div class="image" style="width: 528px; height: 512px; background:#ccc">
                    {{-- <img style="width: 80%" width="528" height="512" src="" alt="image"> --}}
                  </div>
                </div>
              </div>
            </div>
          </section>
          {{-- END <!-------------BundlePack----------------------------------------> --}}

          {{-- <!-------------Features vendor--------------------------------------------> --}}
          <section class="exam_vendor pt-5 pb-5 bg-f7fafd">
            <div class="section-title">
              {{-- <span class="heading_bg_heading_1">{{$vendor_title ?? ''}} </span> --}}
              <h2>Select {{$vendor_title ?? ''}} Exam From the list Below</h2>
            </div>
            <div class="container-fluid">
              <p class="content">
                  {!! getReplacedValues($pageContent->placeholder_value,$replacers) !!}
              </p>
            </div>
          </section>
          {{-- END <!-------------Features vendor----------------------------------------> --}}

          {{-- <!-------------Certification vendor--------------------------------------------> --}}
          <section class="certification_vendor">
            <div class="container-fluid">
              <div class="certification_headibg_vendor">
                <div id="certs_name_b_l">

                </div>
                <h2>
                  {{$vendor_title ?? ''}} Certifications Exams List
                </h2>
              </div>
              <div class="certification_2col_vendor">
                <div class="row">
                  @if($vendor->certifications)
                  @foreach ($vendor->certifications as $certificate)
                  @if ($certificate->exams->count() > 0)
                  {{-- LEFT SIDE --}}
                    <div class="col-md-6 col-sm-6 certification_fst_vendor">
                    <div class="certification_fst_vendor_inner_1" style="">
                      <div class="certification_fst_vendor_inner_2" style="">
                        <div style="font-weight: 500; text-align: center;margin-bottom: 0px; padding: 5px; font-family: 'Roboto'; font-size: 22px;">
                          <style>
                              #hoveron:hover{
                                  text-decoration: none;
                                  border-bottom: 0px solid;
                              }
                          </style>
                          {{$certificate->title ?? ''}}
                        </div>
                      </div>
                      <div class="row certification_fst_vendor_inner_2_row">
                          @forelse($certificate->exams->where('status', 1) as $exam)
                            <div  class="col-xl-6 col-lg-12 mb-4 top_error">
                              <div>
                                <!--<div id="line-left"></div>-->
                                <div class="card certification_vendor_card hvr-grow-shadow" style="display: block;">
                                  <div class="card-header" >
                                    <a href="{{route('exam_info',[$vendor->slug,$exam->slug])}}">
                                      {{$exam->exam_code ?? ''}}
                                    </a>
                                    <span><span>
                                    <img width="25" height="25" alt="Desktop" src="{{ asset('frontend/assets/site/img/Image_244.png') }}">
                                    <img alt="Web-Based" width="25" height="25" src="{{ asset('frontend/assets/site/img/Image_245.png') }}">
                                    <img alt="PDF" width="25" height="25" src="{{ asset('frontend/assets/site/img/Image_246.png') }}"></span>
                                  </div>
                                  <div class="card-body">
                                    <p>
                                      {{$exam->title ?? ''}}
                                    <BR>
                                     {{ $vendor_title}}  {{$exam->exam_code}}
                                    </p>
                                    <div class="card-body-qd" style="">
                                      <div class="questions">
                                        <i class="fas fa-clipboard-list questions_fst_i"></i>
                                        <i class="questions_sec_i"> {{ $exam->getTotalQuestions() ?? 0 }}  <span>Questions</span></i>
                                      </div>
                                      <div class="update_date" >
                                        <i class="fas fa-sync-alt update_date_fst_i"></i>
                                        <i class="update_date_sec_i">
                                          <?php echo (date('d M', strtotime($exam->getUpdatedAt()))) ?><span>Last Updated</span>
                                        </i>
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
                  </div>
                  {{-- END LEFT SIDE --}}
                    @endif
                  @endforeach
                  @endif
                </div>
              </div>
            </div>
          </section>
          {{-- END <!-------------Certification vendor----------------------------------------> --}}


          {{-- <!------------- Certifications Testimonials --------------------------------------------> --}}
          <section class="exam_vendor_testimonials pt-5 pb-5" style=" ">
            <div class="section-title">
                <h3> Testimonials</h3>
            </div>
            <div id="sample_page_2_new_testimonials" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 mb-4">
              @forelse ($testimonials as $testimonial)
                <div id="parant_comment" class="container mt-3">
                  <div class="media p-3">
                      <div class="initalname">
                          @empty(!$testimonial->name)
                            {{ ucfirst( Str::substr($testimonial->name, 0, 1) ) ?? '' }}
                          @endempty
                      </div>
                      <div class="media-body">
                          <p style="color: #22ad95;font-size: 20px;font-weight: 500;">
                              {{$testimonial->subject ?? ''}}
                              <span style="float: right;font-size: 16px;color: #da0606;"><i>{{date('M d, Y', strtotime($testimonial->created_at))}}</i></span>
                          </p>
                          <div class="rating">
                          </div>
                          <p>
                              {{ $testimonial->message ?? ''}}
                          </p>
                        </div>
                  </div>
                </div>
              @empty

              @endforelse
            </div>
          </section>
          {{-- END <!------------- Certifications Testimonials ----------------------------------------> --}}

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

                            <form  method="POST" name="contactusForm" class="contactusForm" id="contactusForm">
                              <input type="hidden" value="vendor" id="GenratedFormtype" name="GenratedFormtype">
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
                                                  <button class="btn btn-success submitcontactdata" data-route="{{route('testimonial_create')}}" id="submitcontactdata">submit</button>
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

              {{-- <script>
            $("#submitcontactdata").click(function(){

              name = $("#full_name").val();
              email = $("#email").val();
              subject = $("#subject").val();
              message = $("#message").val();
              captcha = $("#captcha").val();
                if($("#full_name").val() == "" && $("#email").val() == "" && $("#subject").val() == "" && $("#message").val() == ""){
                    $(".mainformarea input").css("border-color","red");
                    $(".mainformarea textarea").css("border-color","red");
                }
                if(name == "" ){
                    $("#full_name").focus();
                }else if(email == ""){
                    $("#email").focus();
                }else if(subject == ""){
                    $("#subject").focus();
                }else if(message == ""){
                    $("#message").focus();
                }else{
                    $.post(BASE_URL + 'submitcontact',{
                      name:name,
                      email: email,
                      subject:subject,
                      message: message, //parameters
                      captcha: captcha, //parameters
                    }, function(resp){
                      resp = $.parseJSON(resp); //data decoded
                      if(resp.msgStatus == "Success"){
                        // alert(resp.msgText);
                        $(".alert-success").html(resp.msgText);
                        $(".mainformarea .alert-success").show();

                        $("#full_name").val("");
                        $("#email").val("");
                        $("#subject").val("");
                        $("#message").val("");
                        $("#contactusForm").hide();
                        $(".aftersumithide").hide();
                        $("#contactusForm").before('<h4 class="text-center">Please refresh Page to submit another Comment <br> <a href="https://www.certsidea.com/microsoft-exams">Click this link to Submit New comment</a></h4>');
                        // setTimeout(function() {
                        //     $(".innerLogincolm .alert-success").fadeOut();
                        // }, 5000);
                      }else{
                        $(".alert-danger").html(resp.msgText);
                        $(".mainformarea .alert-danger").show();
                        setTimeout(function() {
                            $(".mainformarea .alert-danger").fadeOut();
                        }, 5000);
                      }
                    })
                }
            });
          </script>

          <script>
            function submitBundle(){$("#bundleInfoForm").submit()}
              $(document).ready(function(){

              })

              function updateBundlePrice() {
              var e = $("#subscription").val(),
                  r = $("#subscription_plan").val(),
                  a = $("#price").val();
              $("#checkout_price").val(),
                  $("#subscription_price_3_inc").val(),
                  $("#subscription_price_6_inc").val(),
                  $("#subscription_price_12_inc").val(),
                  $("#individual_pcs").val(),
                  $("#individual_price_inc").val(),
                  $("#corporate_pcs").val(),
                  $("#corporate_price_inc").val(),
                  $("#trainer_pcs").val(),
                  $("#trainer_price_inc").val();
              (a = parseInt(a) + parseInt($("#subscription_price_" + e + "_inc").val())), (a = parseInt(a) + parseInt($("#" + r + "_price_inc").val())), $("#checkout_price").val(a), $("#lbl_price").html(a);
              var t = 30 * e;
              $("#free_update").html(t + " days"), $("#plan_type").html($("#" + r + "_pcs").val() + " PC's");
            }
          </script> --}}



          {{-- <!-------------DiscountDeals--------------------------------------------> --}}
          {{-- <div class="row mt-3">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <style>
                              .thanku-details.all-vendor h2 {
                                  display: inline-block;
                                  width: 100%;
                              }
                              .vlisth2 {
                                  font-size: 22px !important;
                              }
                              .vlisth2 span {
                                  font-size: 18px !important;
                              }
                              .vlisth2 a {
                                  text-decoration: none;
                              }
                              .vlisth2 a:hover {
                                  color: #062F4F;
                                  text-decoration: none;
                              }
                              .thanku-details.all-vendor img {
                                  margin: 4px 11px 0 0;
                              }
                          </style>
                          <section class="about-details">
                              <div class="container p-0">
                                  <div class="heading-blcok">
                                      <h1>Latest Discount Deals for All Vendor Exams </h1>
                                      <!--()-->
                                      <form role="form" id="listing_form" name="listing_form"
                                          method="post" action="https://www.certsidea.com/vendors">
                                          <select id="sort_by" name="sort_by"
                                              onchange="submitForm('vendors.html');">
                                              <option value=''>All Vendors</option>
                                              <option value="A">A</option>
                                              <option value="B">B</option>
                                              <option value="C">C</option>
                                              <option value="D">D</option>
                                              <option value="E">E</option>
                                              <option value="F">F</option>
                                              <option value="G">G</option>
                                              <option value="H">H</option>
                                              <option value="I">I</option>
                                              <option value="J">J</option>
                                              <option value="K">K</option>
                                              <option value="L">L</option>
                                              <option value="M">M</option>
                                              <option value="N">N</option>
                                              <option value="O">O</option>
                                              <option value="P">P</option>
                                              <option value="Q">Q</option>
                                              <option value="R">R</option>
                                              <option value="S">S</option>
                                              <option value="T">T</option>
                                              <option value="U">U</option>
                                              <option value="V">V</option>
                                              <option value="W">W</option>
                                              <option value="X">X</option>
                                              <option value="Y">Y</option>
                                              <option value="Z">Z</option>
                                          </select>
                                      </form>
                                  </div>
                              </div>

                              <!-- new container -->
                              <div class="container pt-1">
                                  <div class="row vendor_list_row">
                                      <div class="col-lg-1 col-md-4 col-sm-12 pt-3 m-auto">
                                          <img src="uploads/vendors/1484902809_worldatwork.jpg"
                                              alt="Worldatwork" style="max-width: 70px;">
                                      </div>

                                      <div class="col-lg-3 col-md-8 col-sm-12 pt-4 m-auto">
                                          <h3 style="color: #404040;">Worldatwork
                                          </h3>
                                      </div>

                                      <div class="col-lg-3 col-md-4 col-sm-12 pt-3 m-auto">
                                          <div class="___class_+?71___">
                                              <p style="color: #404040;">
                                                  Available Exam : <span>7</span>
                                              </p>

                                          </div>
                                          <div class="d-lg-inline-block">
                                              <p style="color: #404040;">
                                                  Package Price : <span> $270</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-md-4 col-sm-12 pt-3 m-auto">

                                          <div>
                                              <p style="margin-bottom: 0px; color: #404040;"><i
                                                      style="font-size: 16px;color: #22ad95;"
                                                      class="fa fa-check"></i> Web-Based Practice Test
                                              </p>

                                              <p style="margin-bottom: 0px; color: #404040;"><i
                                                      style="font-size: 16px;color: #22ad95;"
                                                      class="fa fa-check"></i> Questions & Answers
                                                  (PDF)</p>
                                          </div>

                                      </div>
                                      <div class="col-lg-2 col-md-4 col-sm-12 m-auto">

                                          <div style="padding-top: 20px;">
                                              <a href="worldatwork-exams.html" class="btn btn-primary"
                                                  style="font-size: 14px;">SEE DETAILS</a>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row vendor_list_row">
                                      <div class="col-lg-1 col-md-4 col-sm-12 pt-3 m-auto">


                                          <img src="uploads/vendors/1485509721_ni.jpg" alt="NI"
                                              style="max-width: 70px;">


                                      </div>

                                      <div class="col-lg-3 col-md-8 col-sm-12 pt-4 m-auto">
                                          <h3 style="color: #404040;">NI
                                          </h3>
                                      </div>

                                      <div class="col-lg-3 col-md-4 col-sm-12 pt-3 m-auto">
                                          <div class="___class_+?82___">
                                              <p style="color: #404040;">
                                                  Available Exam : <span>1</span>
                                              </p>

                                          </div>
                                          <div class="d-lg-inline-block">
                                              <p style="color: #404040;">
                                                  Package Price : <span> $90</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-md-4 col-sm-12 pt-3 m-auto">

                                          <div>
                                              <p style="margin-bottom: 0px; color: #404040;"><i
                                                      style="font-size: 16px;color: #22ad95;"
                                                      class="fa fa-check"></i> Web-Based Practice Test
                                              </p>

                                              <p style="margin-bottom: 0px; color: #404040;"><i
                                                      style="font-size: 16px;color: #22ad95;"
                                                      class="fa fa-check"></i> Questions & Answers
                                                  (PDF)</p>
                                          </div>

                                      </div>
                                      <div class="col-lg-2 col-md-4 col-sm-12 m-auto">

                                          <div style="padding-top: 20px;">
                                              <a href="ni-exams.html" class="btn btn-primary"
                                                  style="font-size: 14px;">SEE DETAILS</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </section>
                      </div>
                  </div>
              </div>
          </div> --}}
          {{-- END <!-------------DiscountDeals----------------------------------------> --}}

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <script>
        function updateBundlePrice() {
          let orignalPrice=0;
          let discountedPrice=0;
          let subscribed_for = $("#subscription").val();
          if(subscribed_for==3){
            orignalPrice = '{{ $vendor->getPricing()->bundle->orignal ?? 1 }}';
            discountedPrice = '{{ $vendor->getPricing()->bundle->discounted ?? 1 }}';
          }
          if(subscribed_for==6){
            orignalPrice = '{{ $vendor->getPricing()->bundle->orignal_price_2 ?? 1 }}';
            discountedPrice = '{{ $vendor->getPricing()->bundle->discounted_price_2 ?? 1 }}';
          }
          if(subscribed_for==12){
            orignalPrice = '{{ $vendor->getPricing()->bundle->orignal_price_3 ?? 1 }}';
            discountedPrice = '{{ $vendor->getPricing()->bundle->discounted_price_3 ?? 1 }}';
          }
          $(".bundle_price #lbl_price").text(discountedPrice);
          $(".bundle_price del").text(' Before: $'+orignalPrice);
          $("#orignalPrice").val(orignalPrice);
          $("#discountedPrice").val(discountedPrice);
          $("#subcribed_for").val(subscribed_for);
        }
      </script>

    @endsection
