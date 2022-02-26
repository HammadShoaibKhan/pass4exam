@extends('layouts.frontend.master')
@section('content')
    <style>
        .bg-background {
            background: #2f2f2f;
            padding: 20px;
        }
        #title {
            padding: 36px 0 20px 0;
        }
        #title h1 {
            color: #fff;
            font-size: 25px;
        }
        .exam_info h1 {
            text-align: center;
            font-weight: 800;
            font-family: Roboto;
            padding: 0px 10px 0px 10px;
        }
        .exam-meta-info, .our-info {
            background: #fafafa;
            color: #636363;
            padding: 20px;
            border-radius: 10px;
            margin-top: 10px;
        }
        .info-header {
            margin-bottom: 10px;
        }
        .info-header h2 {
            font-size: 22px;
            font-weight: 700!important;
            font-style: italic;
            color: #10005d;
        }
        .font_size_exam {
            font-size: 16px;
        }
        .table-striped {
            border: 1px solid #eee;
            width: 100%;
        }
        .exam_info .goto_exam {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
    <div class="exam_info bg-background">

        <div id="title">
            <h1>{{ $exam->title ?? '' }} {{ $exam->exam_code ?? '' }} Exam Dumps</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">


                </div>
                <div class="col-lg-6">
                    <div class="exam-meta-info">
                        <div class="info-header"> <h2>{{ $exam->vendor->title ?? '' }} {{ $exam->exam_code ?? '' }} Exam Dumps</h2> </div>
                        <p class="font_size_exam"> {!! $exam->description ?? '' !!} </p>
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th><strong>Exam Code: </strong></th>
                                <th>{{ $exam->exam_code ?? '' }}</th>
                            </tr>
                            <tr>
                                <th><strong>Exam Name: </strong></th>
                                <th>{{ $exam->title ?? '' }}</th>
                            </tr>
                            <tr style="display:none">
                                <th><strong>Vendor: </strong></th>
                                <th>{{ $exam->vendor->title ?? '' }} </th>
                            </tr>
                            <tr>
                                <th><strong>Exam Questions: </strong></th>
                                <th>{{ $exam->questions->count() }} </th>
                            </tr>
                            <tr>
                                <th><strong>Last Updated: </strong></th>
                                <th> {{ date('d-m-Y', strtotime($exam->updated_at)) }} </th>
                            </tr>
                            <tr>
                                <th><strong>Exam Certification: </strong></th>
                                <th>{{ $exam->certification->title ?? '' }} </th>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="goto_exam">
                <a href="javascript:;" class="btn btn-lg btn-success"> Go To {{ $exam->exam_code ?? '' }} Questions </a>

            </div>
            <div class="reviewBox">

            </div>
        </div>
    </div>
@endsection
