@include('layouts.frontend.includes.head_files')
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>{{$title ?? ''}}</title>
      <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <!--<link rel="stylesheet" href="css/style.css">-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.js" ></script>
      <meta name="robots" content="noindex, nofollow">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.js" ></script>
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/jquery.multiselect2side.css" type="text/css" media="screen" />
      <script type="text/javascript" src="js/jquery.multiselect2side.js" ></script>
      <script type="text/javascript" src="js/common.js" ></script>
      <script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
      <link rel="stylesheet" type="text/css" href="css/jquery.countdownTimer.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
      <script src="js/jquery.mCustomScrollbar.js"></script>
      <link rel="stylesheet" href="css/jquery.fancybox.css">
      <script src="js/jquery.fancybox.js"></script>

      <link rel="stylesheet" href="{{asset('frontend/assets/site/css/exam_demo.css')}}">

  </head>
  <body class="practice-test">
    <div class="wrapper">
      {{-- EXAM START --}}
      <div class="ExamStartOptions">

        {{-- <!-------------Header--------------------------------------------> --}}
        <div class="mainnav fixed">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="imagetopnav">
                  <form action="" method="post">
                    <input type="hidden" name="exam_code" value="{{$exam->exam_code ?? ''}}">
                      <input type="hidden" name="site" value=" Certsidea">
                      <input type="hidden" name="siteurl" value="https://www. certsidea.com/">
                      <button type="submit">
                        <div class="image" style="width: 200px; height: 120px; background:#ccc">
                          {{-- <img src="https://www. certsidea.com/assets/site/image/1619507533_ Certsideaslogo.webp"
                            class="img-responsive" alt="" > --}}
                        </div>
                      </button>
                  </form>
                  <!--<h6>Demo Version</h6>-->
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="textdivtopnav">
                  <h2>{{$exam->vendor_title ?? ''}} {{$exam->exam_code ?? ''}} Web-Based Practice Exam Demo</h2>
                  <p>{{$exam->title ?? ''}}</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <!--<a class="btn btn-red pull-right btn-danger maintopmarginbtn" class="background:#FD0000" href="https://www. certsidea.com/{{$exam->exam_code ?? ''}}-exam-questions.html" target="_blank">Get Full Access</a>-->
                <form action="https://www. certsidea.com/carts" method="post" class="pdf_form" style="float:right">
                  <input type="hidden" value="Online Practice Exam" name="product_name" />
                  <input type="hidden" value="{{$exam->exam_code ?? ''}}" name="exam_code" />
                  <input type="hidden" value="" id="cartqry" name="cart_qty" />
                  <input type="hidden" value="" id="cartsub" name="subscription" />
                  <input type="hidden" value="3" name="ptype_id" />
                  <input type="hidden" value="single" name="shop_type" />
                  <button type="submit" class="pull-right btn-danger maintopmarginbtn" class="background:#FD0000">
                    Get Full Access
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        {{-- END <!-------------Header----------------------------------------> --}}
        <br><br><br><br>

        {{-- <!-------------Exam Question Section--------------------------------------------> --}}
        <div class="container">
          <div class="row" style="display:none">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12 tabscustomsize">
              <div class="liner">

              </div>
              <div class="liner2">

              </div>
              <ul class="nav nav-pills mainpills">
                <li class="active">
                  <a data-toggle="pill">1</a>
                  <p>Test type</p>
                </li>
                <li class="active">
                  <a data-toggle="pill" >2</a>
                  <p>Exam Options </p>
                </li>
                <li class="disabled">
                  <a data-toggle="pill" >3</a>
                  <p>Start Test</p>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

            </div>
          </div>

          <div class="tab-content margtop100">
            <div id="menu1" class="tab-pane fade in active">
              <!--<h3 class="text-center">
                <span>Step 2 -</span>
                What exam options that you want?
              </h3>-->
              <h3 class="text-center">
                <span>Demo Version Limited Functionality</span>
                <br> Customize your Practice Attempt(Optional)
              </h3>

              {{-- Central Content --}}
              <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                  <form method="post" action="{{ route('exam.demo.practice') }}">
                      {{ csrf_field() }}
                      <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                      <input type="hidden" name="exam_type" value="demo">
                    <div class="row">
                      {{-- Case Study --}}
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="case_studies[]" value="1" />
                        <div class="form-group Questype">
                          <h4>
                            Available Case Studies:
                          </h4>
                          <div class="qCSTypes">
                              @forelse($exam->caseStudies as $key => $caseStudy)
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                  <label  class="checkbox-inline">
                                    <input type="checkbox" {{ $key == 0 ? 'checked' : 'disabled' }}
                                    data-val="14" value="{{ $caseStudy->id }}" name="case_studies[]" id="cs1" disabled/>
                                    {{ $caseStudy->name ?? '' }}                                ({{$caseStudy->questions->count()}})
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              @empty
                              @endforelse
                            <style>
                                .Allquestiontab {
                                      position: relative;
                                      top: 0px;
                                      /*z-index: 1; */
                                      left: 0;
                                      transform: none;
                                }
                                .Allquestiontab .columnstylings{
                                    border-top:0px;
                                    border-right:0px;
                                }
                                .Allquestiontab .columnstylings:before,.Allquestiontab .columnstylings:after{
                                    border:0px;
                                    position:relative;
                                    left: 0;
                                    z-index: 90
                                    height: 0px;
                                    top: 0;
                                    border-bottom-left-radius: 0px;
                                }
                                @media (min-width: 1200px){
                                    .casestudycss {
                                        /* margin-top: 24px; */
                                        /*margin-left: 25%;*/
                                    }
                                }
                                .casestudypercentage{
                                    /*margin-bottom:21px;*/
                                }
                                .casestudycss .columnstylings {
                                    /*margin-top: 0px;*/
                                }
                                .HotImage:nth-last-child(3):before {
                                    width: 16%;
                                }
                            </style>
                          </div>
                        </div>
                      </div>
                      {{-- END Case Study --}}
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 Allquestiontab">
                        <div class="form-group hideifSpecific columnstylings">
                          <!--<h4>No. of Questions: (per Exam)</h4>-->
                          <h4>
                            Based on Selection above, you can practice with All
                            <span id="showss">{{ $exam->getTotalQuestions() }}</span> Questions
                          </h4>
                          <!--<h4 class="text-center">OR</h4>-->
                          <h4>
                            or Create Multiple Practice tests with Limited Questions
                          </h4>
                          <input type="range" min="1" max="5"
                            onchange="return updateExamSets(this.value);"
                            oninput="QuestionNoRangevalue.value = QuestionNoRange.valueAsNumber"
                            value="5" class="slider" name="QuestionNoRange" id="QuestionNoRange">
                          <div  id="show" class="qRangeOutput">
                            <output name="QuestionNoRangevalue" for="QuestionNoRange" >
                              5
                            </output>
                            / {{ $exam->getTotalQuestions() }}
                          </div>
                          <!--<h4 class="h4lastchild">Total Questions: 320</h4>-->
                        </div>
                      </div>
                      {{-- Rollers --}}
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 casestudypercentage">
                        <div class="columnstyl">
                          <!--<h4>Pass Percentage:</h4>-->
                          <h4>
                            Set your Desired Pass Percentage:
                          </h4>
                          <input type="range" min="10" max="70"
                            oninput="PassRangevalue.value = PassRange.valueAsNumber"
                            value="70" class="slider" name="PassRange" id="PassRange">
                          <div class="pRangeOutput">
                            <output name="PassRangevalue" for="PassRange">
                              70
                            </output>
                            /100
                          </div>
                        </div>
                      </div>
                      {{--End Rollers  --}}

                      {{-- Practice Set  --}}
                      {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
                        <div class="form-group Questype setsarea">
                          <!--<h4>Exam Sets:</h4>-->
                          <h4>
                            Available Practice sets:
                          </h4>
                          <div class="examSetsTypes">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                              <label class="checkbox-inlines    newdisabled">
                                <input type="radio" checked="checked" value="1" name="exam_set" id="es1 " disabled>
                                Practice Set 1
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                      {{--END Practice Set  --}}

                      {{-- Set Time Interval --}}
                      <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12  doThisOnCheck">
                        <div class="form-group timeallowedarea" style="    margin: 0px">
                          <div class="shoehidediconexams">
                            <label>
                              Allocate Time (Hours : Minutes)
                            </label>
                            <select  class="form-control" name="hours" id="tHour">
                              <option value="00">00</option>
                              <option value="01" selected="selected">01</option>
                              <option value="02">02</option>
                            </select>
                            <select  class="form-control" name="mins" id="tMinutes">
                              <option value="00">00</option>
                              @for ($i=1; $i<60; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                              @endfor
                            </select>
                          </div>
                          <div class="Questype withouttime">
                            <label class="checkbox-inline">
                              <input type="checkbox"  id="withouttimer" name="without_timer" value="1">
                              Practice without Timer
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      {{-- End Set Time interval --}}
                    </div>

                    <p class="text-center">
                      <!--$site = $_REQUEST['site'];-->
                      <!--$siteurl = $_REQUEST['siteurl'];-->
                      <input type="hidden" class="form-control" value=" Certsidea" name="site">
                      <input type="hidden" class="form-control" value="https://www. certsidea.com/" name="siteurl">
                      <button type="submit" class="roundedbuttonclass" id="StartExam">Start Exam</button>
                      <!--<button type="submit" class="btn btn-primary btn-lg  roundedbuttonclass" id="StartExam" onclick="return startExam();">Start Exam</button>-->
                      <!--<a href="javascript:void(0);" class="btn btn-warning attemptHistory">Attempt History</a>-->
                    </p>
                  </form>
                </div>
              </div>
              {{--END Central Content --}}
            </div>

            {{--  --}}
            <div id="menu2" class="tab-pane fade">
              <h3>
                Menu 2
              </h3>
              <p>
                Some content in menu 2.
              </p>
            </div>
          </div>
        </div>
        {{--END <!-------------Exam Question Section--------------------------------------------> --}}


        <div style="display:none">
          <div class="demogifarea">
            <img src="images/demo.gif" alt="image">
          </div>
          <div class=" ndarea">
            <a href="https://www. certsidea.com/product-detail/{{$exam->exam_code ?? ''}}">
              <img src="images/demo2.gif" alt="image">
            </a>
          </div>
        </div>
      </div>
      {{--END  EXAM START --}}

    </div>
    <br><br>
    <input type="hidden" id="site" value=" Certsidea" />
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{ asset('frontend/js/exam_demo_functions.js') }}"></script>

@include('layouts.frontend.includes.footer_files')
