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
                        <h2>{{ $exam->certification->title . ' ' . $exam->exam_code }} Web-Based Practice Exam</h2>
                    </div>
                    <div class="timmerarea">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">

    <br><br>
    <div class="row" style="margin: 0">
        <h4>Exam Attempts</h4>
        <div class="questions-table" style="margin-bottom: 100px">
            <table class="table" id="results-table">
                <thead>
                <tr>
                    <th>Attempt&nbsp;ID</th>
                    <th>Total&nbsp;Questions</th>
                    <th>Attempted</th>
                    <th>Correct</th>
                    <th>Wrong</th>
                    <th>Missed</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($examHistory as $history)
                        <tr>
                            <td><a href="{{ route('exam.practice.result', $history->attempt_id) }}">{{ $history->attempt_id }}</a></td>
                            <td>{{ getNoOfQuestionInAttempt($history->attempt_id) }}</td>
                            <td>{{ getAssessmentAttemptResult($history->attempt_id, 'attempt_questions') }}</td>
                            <td>{{ getAssessmentAttemptResult($history->attempt_id, 'correct') }}</td>
                            <td>{{ getAssessmentAttemptResult($history->attempt_id, 'wrong') }}</td>
                            <td>{{ getAssessmentAttemptResult($history->attempt_id, 'missed') }}</td>
                        </tr>
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
                    <a class="btn btn-light-primary show-answer" href="{{ route('user.premium_exam', ['vendor_slug' => $exam->vendor->slug, 'exam_slug' => $exam->slug]) }}">Retake&nbspExam</a>
                    <a class="btn btn-primary show-answer" href="{{ route('user.dashboard') }}">My&nbsp;Dashboard</a>
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


</body>
</html>
