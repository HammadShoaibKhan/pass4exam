@extends('layouts.frontend.master')
@section('content')
    <?php
        $c = 0;
        // key must be equal to Replaceable Codes
        // Replaceable values can be seen in helper file ==> getReplaceables()
        $replacers = array(
            '{{EXAM-CODE}}'         =>  $exam->exam_code,
            '{{EXAM-TITLE}}'        =>  $exam->title,
            '{{VENDOR-TITLE}}'      =>  $exam->vendor->title,
            '{{CERTIFICATE-TITLE}}' =>  $exam->certification->title,
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
                                        <i class="fa fa-chevron-right "> </i>
                                    </li>
                                    <li>
                                        <a href="{{ route('vendor', $exam->vendor->slug) }}">vendor</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right "></i>
                                    </li>
                                    <li>{{$exam->exam_code}}</li>
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
            <section class="sample_page_2">
                <div class="container-fluid">
                    <div class="row">
                        <div id="sample_page_2_top_heading" class="col-sm-12 mb-4">
                            <h1> {{$exam->exam_code}} : {{$exam->title}} Exam</h1>
                        </div>

                        {{-- <!-------------LEFT SIDE PORTION 75% Area--------------------------------------------> --}}
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 mb-4">
                            <div class="row">
                                {{-- <!------------- Left Promo Card--------------------------------------------> --}}
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 mb-4">
                                    {{-- @TODO --}}
                                    <div class="card sample_page_card hvr-grow-shadow">
                                        <div class="card-header" >
                                            <!--<a href=""></a>-->
                                            <strong style="cursor: auto; color: #fff;font-size: 18px;font-family: 'Roboto';text-align: center;font-weight: 600;">
                                                {{$exam->vendor->title}} {{$exam->exam_code}} Exam
                                            </strong>
                                        </div>
                                        <div class="card-body text-center">
                                            <p>
                                                {{$exam->certification->title}} Fundamentals
                                            </p>
                                            <span>
                                                <!--{{$exam->exam_code}} Certification Practice Exam-->
                                                Total Questions: {{ $exam->getTotalQuestions() ?? 0 }}
                                            </span>
                                        </div>
                                        <div class="card-footer">
                                            <span style="font-size: 12px;font-weight: 700;color: #ffffff;font-family: 'Roboto';text-align: center;">
                                                Last Updated : {{ $exam->getUpdatedAt() ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- END <!------------- Left Promo Card----------------------------------------> --}}

                                {{-- <!------------- Exam Description--------------------------------------------> --}}
                                <div id="sample_page_2_top_content" class="col-xl-9 col-lg-9 col-md-8 col-sm-7 mb-4">
                                    <h2>
                                        <strong>{{$exam->vendor->title}} {{$exam->exam_code}} Exam</strong>
                                    </h2>
                                    <p>
                                        @isset($pageContent[$c]->placeholder_name)
                                            @if ($pageContent[$c]->placeholder_name == 'exam-info-exam-desc-1')
                                                {{ getReplacedValues($pageContent[$c++]->placeholder_value,$replacers) }}
                                            @endif
                                        @endisset
                                    </p>
                                </div>
                                {{-- END <!------------- Exam Description----------------------------------------> --}}

                                {{-- <!------------- Free Test Trigger--------------------------------------------> --}}
                                <div class="tryonlineBtn col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 m-auto text-center" >
                                    <div>
                                        {{-- <form method="post" action="javascript:;" id="demos_form" name="demos_form" target="_blank"> --}}
                                            {{-- <input type="hidden" name="exam_code" value="{{$exam->exam_code}}"> --}}
                                            {{-- <input type="hidden" name="demo" value="1"> --}}
                                            {{-- <input type="hidden" name="site" value="Certsidea"> --}}
                                            {{-- <input type="hidden" name="siteurl" value="../../index.html"> --}}
                                            {{-- <button class="demoLoginUserBtn btn demo"  type="submit" style="text-transform: none;"> --}}
                                                <a href="{{route('exam_demo',[$exam->vendor->slug,$exam->slug])}}" target="_blank" class="btn mt-3" style="text-transform: none;">
                                                    Take a Free Self-Assessment Quiz
                                                </a>
                                            {{-- </button> --}}
                                        {{-- </form> --}}
                                    </div>
                                </div>
                                {{-- END <!------------- Free Test Trigger----------------------------------------> --}}

                                {{-- <!------------- Premium Description--------------------------------------------> --}}
                                <div id="sample_page_2_middle_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 mb-4" >
                                    <div id="sample_page_2_middle_content_inner0">
                                        <div>
                                            <p>
                                                @isset($pageContent[$c]->placeholder_name)
                                                    @if ($pageContent[$c]->placeholder_name == 'exam-info-exam-desc-2')
                                                        {{ getReplacedValues($pageContent[$c++]->placeholder_value,$replacers) }}
                                                    @endif
                                                @endisset
                                            </p>
                                        </div>
                                        <div class="buyNowBtn mb-4 mb-4 m-auto text-center mt-3" >
                                            <div>
                                                <a href="{{route('exam_detail',[$exam->vendor->slug,$exam->slug])}}" target="_blank" class="btn mt-3" style="text-transform: none;">
                                                    Get Premium Self-Assessment Practice Test
                                                </a>
                                                <div class="social-links">
                                                    <img style="width: 25%;;margin-top: 10px;"
                                                        src="../../assets/site/img/new_patment_method.webp"
                                                        alt="payment method">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sample_page_2_middle_content" class="mt-4 mb-4" >
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                {{-- END <!------------- Premium Description----------------------------------------> --}}

                                {{-- <!------------- Premium Check List--------------------------------------------> --}}
                                <div id="sample_page_2_middle_content_ul" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 mb-4" >
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-10 col-sm-12">
                                            {{-- @TODO --}}
                                            <ul>
                                                <li>
                                                    Syllabus-based Microsoft AZ-140 questions that appear in the final exam.
                                                </li>
                                                <li>
                                                    Web-Based Microsoft AZ-140 Practice Test does not need software installation.
                                                </li>
                                                <li>
                                                    Browser-Based Microsoft AZ-140 Works on Mac, Linux, IOS, Andriod and Windows.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- END <!------------- Premium Check List----------------------------------------> --}}

                                {{-- <!-------------Feature Banner--------------------------------------------> --}}
                                <div id="sample_page_2_middle_content_inner" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 mb-4" >
                                    <h2>What Makes Our {{$exam->vendor->title}} {{$exam->exam_code}} Exam Material Better Than Others?</h2>
                                    <p>
                                        @isset($pageContent[$c]->placeholder_name)
                                            @if ( $pageContent[$c]->placeholder_name == 'exam-info-make-better-desc')
                                                {{ getReplacedValues($pageContent[$c++]->placeholder_value,$replacers) }}
                                            @endif
                                        @endisset
                                    </p>
                                </div>
                                {{-- END <!-------------Feature Banner----------------------------------------> --}}

                                {{-- <!-------------Feature List--------------------------------------------> --}}
                                <div id="sample_page_2_middle_content_inner_2" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 mb-4" >
                                    <h3>
                                        <strong>New {{$exam->vendor->title}} {{$exam->exam_code}}&nbsp;Questions According to Latest Syllabus</strong>
                                    </h3>
                                    <p>
                                        @isset($pageContent[$c]->placeholder_name)
                                            @if ($pageContent[$c]->placeholder_name == 'exam-info-latest-syllabus')
                                                {{ getReplacedValues($pageContent[$c++]->placeholder_value,$replacers) }}
                                            @endif
                                        @endisset
                                    </p>
                                    <h3>
                                        <strong>{{$exam->vendor->title}} {{$exam->exam_code}} Practice Questions with Free updates</strong>
                                    </h3>
                                    <p>
                                        @isset($pageContent[$c]->placeholder_name)
                                            @if ($pageContent[$c]->placeholder_name == 'exam-info-free-updates')
                                                {{ getReplacedValues($pageContent[$c++]->placeholder_value,$replacers) }}
                                            @endif
                                        @endisset
                                    </p>
                                    <h3>
                                        <strong>Self-Assessment With {{$exam->vendor->title}} {{$exam->exam_code}} Exam Practice Test</strong>
                                    </h3>
                                    <p>
                                        @isset($pageContent[$c]->placeholder_name)
                                            @if ($pageContent[$c]->placeholder_name == 'exam-info-practice-test')
                                                {{ getReplacedValues($pageContent[$c++]->placeholder_value,$replacers) }}
                                            @endif
                                        @endisset
                                    </p>
                                </div>
                                {{-- END <!-------------Feature List----------------------------------------> --}}

                                {{-- <!-------------Frequent Links--------------------------------------------> --}}
                                <div id="sample_page_note_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <div class="terms">
                                        <p class="taxonomy">
                                            <a class="vocab-term" href="javascript:;">{{$exam->certification->title}}</a>
                                            | <a  class="vocab-term" href="javascript:;">{{$exam->certification->title}} Administrators</a>
                                            | <a  class="vocab-term" href="javascript:;">Microsoft Business User</a>
                                            | <a  class="vocab-term" href="javascript:;">Microsoft Technology Manager</a>
                                            | <a class="vocab-term" href="javascript:;">Microsoft Beginner</a> |
                                            <a class="vocab-term" href="javascript:;">{{$exam->exam_code}} Exam Topics</a>
                                            | <a class="vocab-term" href="javascript:;">{{$exam->exam_code}} Questions Answers</a>
                                            | <a class="vocab-term" href="javascript:;">{{$exam->exam_code}} Real Questions</a>
                                            | <a class="vocab-term" href="javascript:;">{{$exam->certification->title}} Fundamentals Course Details</a>
                                        </p>

                                    </div>
                                </div>
                                {{-- END <!-------------Frequent Links----------------------------------------> --}}

                            </div>
                        </div>
                        {{-- END <!-------------LEFT SIDE PORTION 75% Area ----------------------------------------> --}}

                        {{-- <!-------------Right Side Promo Cards--------------------------------------------> --}}
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4 sample_page_2_right_bar">
                            <div class="sample_page_2_right_bar_testimonials">
                                <div class="card" style="margin-bottom: 6px;border-radius: 5px;">
                                    <div class="card-header" style="background-color: #22ad95; border-radius: 5px 5px 0px 0px;" >
                                        <!--<a href=""></a>-->
                                        <h4 style="font-size: 20px;">Free {{$exam->exam_code}} Questions</h4>
                                    </div>
                                    {{-- @TODO --}}
                                    <div class="card-body">
                                        <a style="color: #22ad95;" href="javascript:;">
                                            Free {{$exam->vendor->title}} {{$exam->exam_code}} Exam  Questions
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- 2nd Card --}}
                            {{-- <div class="sample_page_2_right_bar_testimonials">
                                <div class="card" style="margin-bottom: 6px;border-radius: 5px;">
                                    <div class="card-header" style="background-color: #22ad95; border-radius: 5px 5px 0px 0px;" >
                                        <h4 style="font-size: 20px; cursor: auto; "> {{$exam->exam_code}} Exam Syllabus</h4>
                                    </div>
                                    <div class="card-body">
                                        <a style="color: #22ad95;" href="javascript:;">
                                            {{$exam->vendor->title}} {{$exam->exam_code}} Exam Syllabus
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- Extra Card Down Part --}}
                            {{-- <div class="sample_page_2_right_bar_testimonials">
                                <h3 >
                                    <a href="#">Related Exams</a>
                                </h3>
                            </div> --}}
                            {{-- Hot Exam --}}
                            {{-- <div class="sample_page_2_right_bar_blog">
                                <div class="sample_page_right_bar_blog_heading">
                                    <h3>
                                        HOT EXAMS
                                    </h3>
                                </div>
                                <!-- Exam List -->
                                <div class="sample_page_2_right_bar_blog_links">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" class="btun margin-right">
                                                <span>C100DBA </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="btun margin-right">
                                                <span>1Z0-343 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="btun margin-right">
                                                <span>MB-700 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                        {{-- END <!-------------Right Side Promo Cards----------------------------------------> --}}
                    </div>
                </div>
            </section>
            {{-- END <!-------------Exam Detailed Info--------------------------------------------> --}}
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    @endsection
