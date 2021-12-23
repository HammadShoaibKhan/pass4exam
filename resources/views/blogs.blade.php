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

           
                {{-- END <!------------- Bundle Pack ----------------------------------------> --}}


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
                                <input type="hidden" value="exam" id="GenratedFormtype" name="GenratedFormtype">
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
