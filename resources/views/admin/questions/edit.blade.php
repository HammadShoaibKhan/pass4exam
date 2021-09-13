@extends('layouts.admin.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Question</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.exams') }}">Exams</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('admin.exam.edit', $question->caseStudy->exam->id) }}">Case&nbspStudies</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('admin.case-study.questions', $question->caseStudy->id) }}">Questions</a></li>
                            <li class="breadcrumb-item">Update</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Question</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-answer-tab" data-toggle="pill" href="#custom-tabs-four-answer" role="tab" aria-controls="custom-tabs-four-answer" aria-selected="false">Answers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">

                                @include('layouts.admin.includes.messages')
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane active show fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Update Question</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <form action="{{ route('admin.question.update', $question->id) }}" method="POST" id="add-question-form">
                                                    {{ csrf_field() }}


                                                    <div class="row">

                                                        <div class="col-sm-12">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>Question</label>
                                                                <textarea class="form-control" name="question" id="summernote" rows="10">{{ $question->question }}</textarea>
                                                            </div>

                                                            @error('question')
                                                            <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2 offset-10">
                                                            <button class="btn btn-md btn-block btn-primary" type="submit">Save</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-answer" role="tabpanel" aria-labelledby="custom-tabs-four-answer-tab">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Answers</h3>
                                            </div>
                                            @php
                                                $answers = json_decode($question->answer);
                                            @endphp
                                            <div class="card-body">
                                                <form action="{{ route('admin.answer.save', $question->id) }}" method="POST" id="answers-form">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input class="form-control" value="{{$answers->answer_1->text ?? '' }}" type="text" placeholder="Answer 1" name="answer_1">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input class="form-control" {{($answers != null) && $answers->answer_1->status == 1 ? 'checked' : ''}} {{($answers == null) ? 'checked' : ''  }} type="radio" name="true" value="answer_1">
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input class="form-control" type="text" value="{{$answers->answer_2->text ?? '' }}" placeholder="Answer 2" name="answer_2">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input class="form-control" type="radio" {{($answers != null) && $answers->answer_2->status == 1 ? 'checked' : ''}} name="true" value="answer_2">
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input class="form-control" type="text" value="{{$answers->answer_3->text ?? '' }}" placeholder="Answer 3" name="answer_3">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input class="form-control" type="radio" {{($answers != null) && $answers->answer_3->status == 1 ? 'checked' : ''}} name="true" value="answer_3">
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input class="form-control" type="text" value="{{$answers->answer_4->text ?? '' }}" placeholder="Answer 4" name="answer_4">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input class="form-control" type="radio" {{($answers != null) && $answers->answer_4->status == 1 ? 'checked' : ''}} name="true" value="answer_4">
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-2 offset-10">
                                                            <button class="btn btn-block btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
