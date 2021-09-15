@extends('layouts.frontend.master')
@section('content')

{{-- <!------------- HOME Banner--------------------------------------------> --}}
<section  class="home_banner_top ptb-70">
  <div class="home_banner_content">
    <strong>
      BE A CERTIFIED PROFESSIONAL WITH US
    </strong>
    <h1>
      Certification Exam <br>
      Preparation Material 
    </h1>
    <form class="demo-from" id="demos_form" name="demos_form" action="javascript:;" method="post">
      <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div style="" >
                <div id="demo_vendor_idLabel" style="display:none;">
                  Search
                </div>
          			<select style="height: 40px;
                  border-radius: 5px;
                  border: 2px solid #efefef;
                  padding-left: 10px;
                  width: 100%;
                  font-size: 13px;
                  font-weight: 400;margin-bottom: 10px;"
                  class="option1" name="demo_vendor_id" 
                  onchange="ajaxLoadVendorExams2(this.value);">
                  <option value="">Select Vendor</option>
                  @forelse ($vendors as $vendor)
                    <option value="{{$vendor->id}}">{{ $vendor->title ?? '' }}</option>
                  @empty
                  @endforelse
                </select>
                {{-- @TODO --}}
                {{-- <input type="hidden" name="demo_product_type" value="1"  />
                <input type="hidden" name="page_title" value="Home"  /> --}}
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div style="">
                <div id="demo_exam_idLabel" style="display:none;">
                  Search
                </div>
                <select style="height: 40px;
                  border-radius: 5px;
                  border: 2px solid #efefef;
                  padding-left: 10px;
                  width: 100%;
                  font-size: 13px;
                  font-weight: 400; margin-bottom: 10px;" class="option1" 
                  aria-labelledBy="demo_exam_idLabel" 
                  id="demo_exam_id" name="demo_exam_id">
                  {{-- @TODO --}}
                  @TODO
                  <option value="">Select Exam</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div id="home_banner_mail" style="">
                <div class="form-group">
                  <input type="email" id="demo_email" name="demo_email" placeholder="Enter your E-mail..." required="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="">
        <!--<a href="#" class="btn"></i>DOWNLOAD DEMO</a>-->
        <button type="submit" class="btn btn-default btnDemo" >DOWNLOAD DEMO</button>
      </div>
    </form>
  </div>
 </section>
{{-- END <!------------- HOME Banner--------------------------------------------> --}}

<main id="main" role="main">
  <div class="container-fluid">
    <style>
      #commentwriteareahome{
        background: rgb(224 239 236);
        color: #429482;
        padding: 50px 0px;
        margin-bottom: 0px;
      }
      #commentwriteareahome .topArea .row .col-lg-12{
        padding-left: 30px;
      }
      .new_testimonials_bg_heading{
        margin-bottom: -53px;
        margin-left: -4px;
        font-size: 98px;
        color: rgba(34, 173, 149, 7%);
        font-weight: 500;
        font-family: Roboto;
        line-height: 1.2;
        margin-top: 0;
        display: block;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
      }
      @media(max-width: 767px){
        .new_testimonials_bg_heading{
          margin-bottom: -30px;
          font-size: 42px;
        }
      }
      @media(max-width: 425px){
      }
      @media(max-width: 991px){
        .right_image_security_section{
          display: none;
        }
        .popular_certification_home .overview-image .image{
          display: none;
        }
      }
    </style>

    {{-- <!------------- Popular Certifications--------------------------------------------> --}}
    <section class="popular_certification_home pt-5 bg-f7fafd">
      <div class="container-fluid p-0">
        <div class="overview-box">
          <div class="overview-image">
            <div class="image">
              <img  width="561" height="657"  src="{{asset('frontend/assets/site/img/image_2.webp')}}" alt="image">
            </div>
          </div>
          <div class="overview-content">
            <div class="content left-content">
              <div style=" margin-bottom: 55px; margin-top: 7%;">
              <h2>Popular Vendors</h2> 
              <p>
                Certs Idea is a trusted brand for IT students to get a comprehensive range of practice questions to 
                prepare for all in-demand certifications. At Certs Idea, we offer you accurate preparation material for exams 
                conducted by Microsoft, Cisco, Oracle, CompTIA, and many other popular vendors. 
                Certs Idea guarantees that you will not need anything else after preparing from our actual practice questions. 
                Save your time and download the free demo to get a fair idea about Certs Idea practice questions.
                </p>
              </div>
              <div style=" margin-top: -4%;">
                <div class="topnav1_home">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      @forelse(popularVendors() as $key => $vendor)
                        <a class="nav-item nav-link {{$key == 0 ? 'active' : ''}}" id="nav-{{$vendor->slug}}-tab" data-toggle="tab" href="#nav-{{$vendor->slug}}" role="tab" aria-controls="nav-{{$vendor->slug}}" aria-selected="true">{{$vendor->title}}</a>
                      @empty
                      @endforelse
                    </div>
                  </nav>
                </div>

                <div class="tab-content">
                  @forelse(popularVendors() as $key => $vendor)
                    <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="nav-{{$vendor->slug}}" role="tabpanel" aria-labelledby="nav-{{$vendor->slug}}-tab">
                      <div class="row" style="margin-top: 5%;">
                        @forelse($vendor->exams->where('status', 1) as $exam)
                          <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                            <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                              <div class="card-body hvr-curl-bottom-right" 
                                style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                                <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;">
                                <a style="font-size: 14px;
                                  font-weight: 600;
                                  font-family: 'Poppins';
                                  color: #fff;" 
                                  href="microsoft/az-700.html" class="white">
                                  {{ $exam->exam_code }}
                                </a>
                                </strong>
                                  <span style="font-size: 13px;
                                  font-weight: 500;
                                  font-family: 'Poppins';
                                  display: block;
                                  margin-bottom: 8px;"> 
                                  Total Questions : {{ $exam->questions->count() }}
                                </span>
                                <span style="font-size: 13px;
                                  font-weight: 500;
                                  font-family: 'Poppins';
                                  margin-bottom: 0px;
                                  display: block;">
                                  Updated : {{date('d-M-Y', strtotime($exam->updated_at))}}
                                </span>
                              </div>
                            </div>
                          </div>
                        @empty
                        @endforelse
                      </div>
                    </div>
                  @empty
                  @endforelse
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END <!------------- Popular Certifications--------------------------------------------> --}}

    {{-- <!------------- World-class learning--------------------------------------------> --}}
    <section class="pic-list">
      <div id="security_section" class="container-fluid" style="background-color: #429482;">
        <div class="overview-box">
          <div class="overview-content">
            <div class="content left-content" style="padding-bottom: 0px; padding-right: 20px;">
              <div id="world-class-learning"> 
                <h2>
                  World-class learning for anyone, everywhere
                </h2> 
              </div> 
              <div id="world-class-learning2"> 
                <p>
                  Certs Idea offers comprehensive preparation 
                  material that guarantees your first attempt success in the leading IT certification exams. We ensure that you will get 
                  state-of-the-art and new practice questions from Certs Idea. It is our objective to help you prepare well for the most 
                  expected questions so that you can attempt these difficult questions of your desired IT certification exam on the first try. 
                  Certs Idea has paved the way&nbsp;for multiple candidates towards success. You can also get IT career 
                  benefits like a job promotion or boost a new career by preparing for your dream certification from Certs Idea.
                </p> 
              </div> 
              <div class="row" style="margin-left: 20px; margin-bottom: 15%;margin-top: 8%;"> 
                <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> 
                  <div style="color: white; margin-left: 5%; text-align: center; ">
                    <img alt="image" height="54" src="{{asset('frontend/assets/site/img/image_user.png')}}" width="75" /> 
                    <b class="bold_offer">24/7 Customer<br /> Support</b>
                  </div> 
                </div> 
                <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> 
                  <div style="color: white; margin-left: 5%; text-align: center;">
                    <img alt="image" height="54" src="{{asset('frontend/assets/site/img/image_ero.png')}}" width="52" /> 
                    <b class="bold_offer">Free 3 Months<br /> Updates</b>
                  </div> 
                </div> 
                <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> 
                  <div style="color: white; margin-left: 5%; text-align: center;">
                    <img alt="image" height="59" src="{{asset('frontend/assets/site/img/image_tic.png')}}" width="51" /> 
                    <b class="bold_offer">Security and<br /> Privacy</b>
                  </div> 
                </div> 
              </div>
            </div>
          </div>
          <div class="overview-image">
            <div class="right_image_security_section" style="text-align:center;">
              <img class="hvr-grow-rotate" width="500" height="331" src="{{asset('frontend/assets/site/img/image_10.webp')}}" alt="image" >
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END <!------------- World-class learning--------------------------------------------> --}}

    {{-- <!------------- Popular Exams--------------------------------------------> --}}
    <section class="home_popular_exam_section pt-5 pb-5 bg-f7fafd" style="">
      <div class="home_popular_exam_section_inner" style="">
        <h3>Popular Exams</h3> 
        <p>
          Thousands of candidates have successfully prepared from Certs Idea high-quality preparation material. 
          Our practice questions are enough for your success because of our experts&rsquo; continuous 
          efforts to keep our preparation material updated and relevant. 
          Get instant access to recently updated practice material and walk out on exam day as a successful candidate.
        </p>
      </div>
      <div class="container">
        <div class="row" style="margin-bottom: 3%;">
          @forelse(popularVendors() as $vendor)
            @forelse($vendor->exams->where('status', 1)->take(2) as $exam)
              <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div id="popular_exam_cards" class="card">
                  <div class="card-body hvr-rectangle-out" style="display: inline-block;
                    vertical-align: middle;
                    -webkit-transform: perspective(1px) translateZ(0);
                    transform: perspective(1px) translateZ(0);
                    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
                    position: inherit !important;
                    background: #fff !important;
                    -webkit-transition-property: color;
                    transition-property: color;
                    -webkit-transition-duration: .3s;
                    transition-duration: .3s;">
                    <div id="popular_exam_cards_body_content">
                      <strong >
                        <a href="javascript:;">
                          {{ $exam->exam_code }}
                        </a>
                      </strong>
                      <br>
                      <span>
                        {{ date('d, M Y', strtotime($exam->updated_at)) }}
                      </span>
                      <br>
                      <p> {{ $exam->questions->count() }} Total Questions </p>
                    </div>
                  </div>
                </div>
              </div>
            @empty
            @endforelse
          @empty
          @endforelse
        </div>
      </div>
    </section>
    {{-- END <!------------- Popular Exams--------------------------------------------> --}}
  
    <!--------------------------------------------------------- DIFFERENT --------------------------------------------------------->
  
    {{-- <!------------- Serving Portion--------------------------------------------> --}}
    <section class="different_home_section pt-5 pb-5 bg-f7fafd" style=" ">
      <div class="different_home_section_inner_top" style="">
        <h3>How Does Certs Idea Serve You?</h3> 
        <p>
          Our preparation material is the most reliable solution to quickly prepare for your dream IT certification exams. 
          We are certain that our preparation material will guide you to get certified on the first try. 
          Here is how we serve you to prepare successfully:
        </p> 
      </div> 
      <div class="different_home_section_inner_bottom" style=""> 
        <div class="row"> 
          <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> 
            <div class="row"> 
              <div class="col-xs-2">
                <strong>
                  <img alt="pdf" height="80" src="{{asset('frontend/assets/site/img/image_pdf.png')}}" width="70" />
                </strong>
              </div> 
              <div class="col-lg-10"> 
                <p class="heading">
                  Free Demo of Preparation Material
                </p> 
                <p class="content">
                  Try a free demo of our PDF and practice exam software before the purchase to get a closer look at practice 
                  questions and answers.
                </p> 
              </div> 
            </div> 
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> 
            <div class="row"> 
              <div class="col-xs-2">
                <strong>
                  <img alt="updates" height="58" src="{{asset('frontend/assets/site/img/image_ero1.png')}}" width="70" />
                </strong>
              </div> 
              <div class="col-lg-10"> 
                <p class="heading">Up to 3 Months of Free Updates</p> 
                <p class="content">
                  Certs Idea updates its preparation material according to changes in the exam syllabus. 
                  We provide up to 3 months of free updates so that you get practice questions of today and not yesterday.
                </p> 
              </div> 
            </div> 
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> 
            <div class="row"> 
              <div class="col-xs-2">
                <strong>
                  <img alt="Success" height="74" src="{{asset('frontend/assets/site/img/image_sun.png')}}" width="70" />
                </strong>
              </div> 
              <div class="col-lg-10"> 
                <p class="heading">Get Certified in First Attempt</p> 
                <p class="content">
                  We have a long list of satisfied customers from multiple countries. It does not matter which exam you are 
                  attempting. Our practice questions will certainly assist you to get passing marks on the first attempt.
                </p> 
              </div> 
            </div> 
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> 
            <div class="row"> 
              <div class="col-xs-2">
                <strong>
                  <img alt="Com" height="66" src="{{asset('frontend/assets/site/img/image_com.png')}}" width="70" />
                </strong>
              </div> 
              <div class="col-lg-10"> 
                <p class="heading">PDF Questions and Practice Test</p> 
                <p class="content">
                  We strive to make certain that preparation material for every certification exam is authentic. 
                  Certs Idea offers PDF questions, web-based and desktop practice tests that are consistently updated.
                </p> 
              </div> 
            </div> 
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> 
            <div class="row"> 
              <div class="col-xs-2">
                <strong>
                  <img alt="Customer" height="70" src="{{asset('frontend/assets/site/img/image_user1.png')}}" width="70" />
                </strong>
              </div> 
              <div class="col-lg-10"> 
                <p class="heading">24/7 Customer Support</p> 
                <p class="content">
                  Certs Idea has a dedicated support team to answer your queries 24/7. Contact us if you face the technical 
                  problems, login issues, payment and download issues. We will entertain you as soon as possible.
                </p> 
              </div> 
            </div> 
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> 
            <div class="row"> 
              <div class="col-xs-2">
                <strong>
                  <img alt="Guaranteed" height="62" src="{{asset('frontend/assets/site/img/image_guran.png')}}" width="70" />
                </strong>
              </div> 
              <div class="col-lg-10"> 
                <p class="heading">100% Guaranteed Customer Satisfaction</p> 
                <p class="content">
                  Certs Idea offers accurate practice questions at an affordable price. Thousands of customers have met 
                  their learning needs by using our products. We ensure that upon using our exam products, you are satisfied.
                </p> 
              </div> 
            </div> 
          </div> 
        </div> 
      </div>
    </section>
    {{-- END <!------------- Serving Portion --------------------------------------------> --}}

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
            <h3> Certification Exam Testimonials</h3>
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

  </div>
</main>
@endsection
