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
<body style="background: #fff !important">
<header>
    <div class="QuestionMainBoxBig">
        <input type="hidden" value="" class="exam_attempt_id">
        <div class="mainnav">
            <div class="container-fluid">
                <div class="nav-data">
                    <div class="imagetopnav">
                        <a href="#">
                            <img src="assets/images/1619507533_study4examslogo.webp" alt="">
                        </a>
                    </div>
                    <div class="textdivtopnav">
                        <h2>{{ $attemptResult['exam_code'] ?? '' }} Web-Based Practice Exam</h2>
                    </div>
                    <div class="timmerarea">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="ci-result-heading">
            <h4>Result Analysis</h4>
        </div>
    </div>

    <div class="row result-status-box" style="margin: 0">

        <div class="col-md-3">
            <p>Total Questions: <span class="bold-count">5</span></p>
        </div>
        <div class="col-md-3">
            <p>Attempt ID: <span class="bold-count">CertsIdea_{{$attemptResult['attempt_id']}}</span></p>
        </div>
        <div class="col-md-3">
            <p>Attempted: <span class="bold-count">{{ $attemptResult['total_attempt'] ?? 0 }}</span></p>
            <p>Wrong: <span class="bold-count">{{ $attemptResult['wrong'] ?? 0 }}</span></p>
        </div>
        <div class="col-md-3">
            <p>Correct: <span class="bold-count">{{ $attemptResult['correct'] ?? 0 }}</span></p>
            <p>Missed: <span class="bold-count">{{ $attemptResult['missed'] ?? 0 }}</span></p>
        </div>

    </div><br><br>

    <h4>Exam Result</h4>
    <div class="row" style="margin: 0">
        <div class="col-md-4" style="border: 1px solid #E8E8E8">
            <div class="percent-donut">
                <span class="ci-chart-text">{{ ($attemptResult['correct']/$attemptResult['total_questions']) * 100 }}/{{ getAssessmentPassingRange($attemptResult['attempt_id']) }}</span>
                <p class="ci-chart-type">Percentage</p>
                <div id="percentChart" style="height: 150px; width: 100%;"></div>
            </div>
        </div>
        <div class="col-md-4" style="border: 1px solid #E8E8E8">
            <div class="percent-donut">
                <span class="ci-chart-text">{{ $attemptResult['total_attempt'] }}/{{ getNoOfQuestionInAttempt($attemptResult['attempt_id']) }}</span>
                <p class="ci-chart-type">Question Attempted</p>
                <div id="attemptChart" style="height: 150px; width: 100%;"></div>
            </div>
        </div>
        <div class="col-md-4" style="border: 1px solid #E8E8E8">
            <div class="percent-donut">
                <div id="timeChart" style="height: 150px; width: 100%;"></div>
            </div>
        </div>
    </div><br><br>

    <div class="row" style="margin: 0">
        <h4>Exam Questions Result</h4>
        <div class="questions-table" style="margin-bottom: 100px">
            <table class="table" id="results-table">
                <thead>
                  <tr>
                    <th>Question&nbspNo</th>
                    <th>Question&nbspType</th>
                    <th>Your&nbspAnswer</th>
                    <th>Correct&nbspAnswer</th>
                    <th>Result</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                  @forelse(getAssessmentUserAttemptQuestion($attemptResult['attempt_id']) as $question)
                    @if($question['status'] != 2)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>SingleChoice</td>
                            <td>
                                @if($question['attempted_answer'] != '')
                                {{ getQuestionCorrectAnswerwithAlphabet($question['question_id'], $question['attempted_answer']) }}</td>
                                @endif
                            <td>
                                {{ getQuestionCorrectAnswerwithAlphabet($question['question_id']) }}
                            </td>
                            <td>
                                @if($question['status'] == 1 && $question['attempt_status'] == 1)
                                <span class="badge badge-success" style="padding: 10px;border-radius: 20px; color: #fff">Correct</span>
                                @elseif($question['status'] == 0 && $question['attempt_status'] == 1)
                                <span class="badge badge-danger" style="padding: 10px;border-radius: 20px; color: #fff">Wrong</span>
                                @elseif($question['status'] == 0 && $question['attempt_status'] == 0)
                                <span class="badge badge-warning" style="padding: 10px;border-radius: 20px; color: #fff">Skipped</span>
                                @endif
                            </td>
                            <td><button class="btn btn-info show-ans-stats" data-attempt-id="{{ $attemptResult['attempt_id'] }}" data-question-id={{ $question['question_id'] }} data-route="{{ route('exam.practice.counter') }}"><i class="fa fa-eye"></i></button></td>
                        </tr>
                    @endif
                  @empty
                  @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>

<section class="full-width-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-4">
                <div class="showAnswerBtn">
                    <a id="" class="btn btn-light-primary show-answer" href="{{ route('user.premium_exam', ['vendor_slug' => $attemptResult['vendor_slug'], 'exam_slug' => $attemptResult['exam_slug']]) }}">Retake&nbspExam</a>
                    <a class="btn btn-primary show-answer" href="{{ route('exam.attempt_history', $attemptResult['exam_id']) }}">Attempt&nbspHistory</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Review All Modal -->
  <div class="modal fade" id="answerStatsModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content" style="min-height: 200px">

        <!-- Modal Header -->
        <div class="modal-header">
            <h6>Review Question</h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body reviewbody">

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

<!-- Chart JS-->
<script src="{{ asset('frontend/js/canvasjs/canvasjs.min.js') }}"></script>
<!-- Custom Css -->
<script src="{{asset('frontend/assets/site/js/start_exam.js')}}"></script>

<script>
window.onload = function () {

    var percentChart = new CanvasJS.Chart("percentChart", {
        animationEnabled: true,
        title:{
            horizontalAlign: "left"
        },
        data: [{
            type: "doughnut",
            startAngle: 60,
            //innerRadius: 60,
            indexLabelFontSize: 17,
            indexLabel: "{label} - #percent%",
            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
            dataPoints: [
                { y: 100, label: "Total" },
                { y: {{ getAssessmentPassingRange($attemptResult['attempt_id']) }}, label: "Passing" },
                { y: {{ ($attemptResult['correct']/$attemptResult['total_questions']) * 100 }}, label: "Yours" }
            ]
        }]
    });

    var attemptChart = new CanvasJS.Chart("attemptChart", {
        animationEnabled: true,
        title:{
            horizontalAlign: "left"
        },
        data: [{
            type: "doughnut",
            startAngle: 60,
            indexLabelFontSize: 17,
            indexLabel: "{label} - #percent%",
            toolTipContent: "<b>{name}</b>: ${y} (#percent%)",
            dataPoints: [
                { y: {{ getNoOfQuestionInAttempt($attemptResult['attempt_id']) }}, label: "Total" },
                { y: {{ $attemptResult['total_attempt'] }}, label: "Yours" }
            ]
        }]
    });

    var timeChart = new CanvasJS.Chart("timeChart", {
        animationEnabled: true,
        title:{
            horizontalAlign: "left"
        },
        data: [{
            type: "doughnut",
            startAngle: 60,
            //innerRadius: 60,
            indexLabelFontSize: 17,
            indexLabel: "{label} - #percent%",
            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
            dataPoints: [
                { y: 67, label: "Inbox" },
                { y: 28, label: "Archives" },
                { y: 10, label: "Labels" }
            ]
        }]
    });

    percentChart.render();
    attemptChart.render();
    timeChart.render();

}
</script>
</body>
</html>
