<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--DataTable-->
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
      <!--Sweet Alert 2-->
    <link href="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/site/css/start_exam.css')}}">
</head>
<body>
    <div class="loading" style="display: none">Loading&#8230;</div>
<header>
    <div class="QuestionMainBoxBig">
        <input type="hidden" value="{{ $assessment->attempt_id }}" class="exam_attempt_id">
        <div class="mainnav">
            <div class="container-fluid">
                <div class="nav-data">
                    <div class="imagetopnav">
                        <a href="#">
                            <img src="assets/images/1619507533_study4examslogo.webp" alt="">
                        </a>
                    </div>
                    <div class="textdivtopnav">
                        <h2>Microsoft MS-740 Web-Based Practice Exam Demo</h2>
                        <p>Troubleshooting Microsoft Teams</p>
                    </div>
                    <div class="timmerarea">
                        <!-- <h4 class="timeBox" style="/* display: none; */">
                        <img src="images/timer.png" class="" alt="">
                        <span id="timeRem" class="style size_sm"></span>
                        </h4> -->
                        <button class="btn btn-danger roundedbuttonclass end-exam" data-route="{{ route('exam.practice.end') }}">End Exam</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@php
    $extractedQuestions = json_decode($assessment->selected_questions);
    $noOfQuestions = count($extractedQuestions);

@endphp
<section class="mainexamarea bind-questions">
    <div class="mainexamarea-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="casestudy caseStudyItem" id="CSBX3">
                    <h1>Case Study: 1 </h1>
                    <h3>Mix Questions</h3>
                </div>
                <div class="accordion_main">
                    <button class="accordion">Mix Questions</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 2</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 3</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="examarea_main">
                    <div class="fullwidth innermainexamarea">
                        <!--<h3>Question No. 2</h3>-->
                        <h2>Question No. <span id="CurrentQNo">1</span> <small> / Out of {{$noOfQuestions ?? ''}}<span id="totalQNoCS"></span><span style="display:none;" id="totalQNo">5</span></small></h2>

                        <label class="checkbox-inline markLabel">
                            <input class="markcheck marked-question" type="checkbox" data-question-id="{{$extractedQuestions[0]->question_id}}">
                            <span>Marked</span>
                            <span class="checkmark first-checkmark" ></span>
                        </label>
                    </div>
                    <div class="answerareabox mainquestion">
                        <h3>Question Type: SingleChoice</h3>
                        {!! $extractedQuestions[0]->question !!}

                        <div class="answerBox">
                            <div class="answerBox">
                                <input type="hidden" value="{{$extractedQuestions[0]->question_id}}" class="current_question_id">
                                @php
                                    $answers = getQuestionAnswers($extractedQuestions[0]->question_id);
                                    $i = 1;
                                @endphp
                                <h4><strong>You Options: </strong></h4>
                                @forelse($answers as $answer)
                                    @php
                                    if ($i == 1) {
                                        $option = 'A';
                                        if ($answer['status']) {
                                            $correctAnswer = 'A';
                                        }
                                    } else if ($i == 2) {
                                        $option = 'B';
                                        if ($answer['status']) {
                                            $correctAnswer = 'B';
                                        }
                                    } else if ($i == 3) {
                                        $option = 'C';
                                        if ($answer['status']) {
                                            $correctAnswer = 'C';
                                        }
                                    } else if ($i == 4) {
                                        $option = 'D';
                                        if ($answer['status']) {
                                            $correctAnswer = 'D';
                                        }
                                    }
                                    @endphp
                                <div class="radio">
                                    <label>
                                        <input class="selected-answer" type="radio" name="answer" value="{{$answer['text']}}">
                                        <span class="checkmark">{{ $option }}</span>
                                        <span>{{ $answer['text'] }}<br></span>
                                        <!--<span class="checkmark"></span>-->
                                    </label>
                                </div>
                                    @php
                                        $i++;
                                    @endphp
                                @empty
                                @endforelse
                            </div>

                            <div class="correctAnswers hideThis"><div class="mainAnswer">
                                    <span class="AnsTxt">Answer:</span>
                                    <span>{{ $correctAnswer ?? ''}}</span></div><hr>
                                <div class="explainarea">
                                    <span class="AnsTxt">Explanation:</span> <br>
                                </div>
                            </div>

                            <input type="hidden" id="correctAnswer" value="C">
                            <div class="afteranswerdiv">
                                <div class="newclass"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="full-width-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="swiper-wrapper">
                    @forelse($extractedQuestions as $key => $question)
                        <div class="swiper-slide {{ $key == 0 ? 'item-arrow' : '' }}" style="pointer-events:none">
                            <div class="slide_Item question_no_wdg" data-route="{{ route('exam.practice.counter') }}" data-question-id="{{ $question->question_id }}">
                                <span>{{ $key + 1 }}</span>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer_data">
                    <a href="javascript:;" data-route={{ route('exam.practice.questions-reviews') }} data-toggle="modal" data-target="#reviewAllModal" class="review_all btn ">Review All</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="showAnswerBtn">
                    <button id="show-hide" class="btn btn-success show-answer">
                        <i class="fa fa-eye"></i> Show Answer</button>
                    <button id="" class="btn btn-light-primary show-answer previous-question" style="display: none" data-route="{{ route('exam.practice.previous') }}">Back</button>
                    <button id="" class="btn btn-primary show-answer next-question" data-route="{{route('exam.practice.next')}}">Next</button>
                    <button id="" class="btn btn-danger show-answer end-exam" data-route="{{ route('exam.practice.end') }}" style="display: none">End Exam</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Review All Modal -->
  <div class="modal fade" id="reviewAllModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="min-height: 200px">
      
        <!-- Modal Header -->
        <div class="modal-header">
            <h6>Review Question</h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                <div class="swiper-wrapper bind-swiper-items" style="padding: 15px; justify-content: left">

                </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <div class="markingvaluesnames">
                <ul>
                    <li><img src="{{ asset('frontend/assets/site/images/complete.png') }}">Complete</li>
                    <li><img src="{{ asset('frontend/assets/site/images/pending.png') }}">Incomplete</li>
                    <li><img src="{{ asset('frontend/assets/site/images/mark.png') }}">Marked</li>
                </ul>
            </div>
        </div>
        
      </div>
    </div>
  </div>
</section>





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<!--Sweet Alert 2-->
<script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

<!-- Custom Css -->
<script src="{{asset('frontend/assets/site/js/start_exam.js')}}"></script>
</body>
</html>
