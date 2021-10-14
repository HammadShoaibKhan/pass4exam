@extends('layouts.admin.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Question</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.exams') }}">Exams</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('admin.exam.edit', $caseStudy->exam->id) }}">Case&nbspStudies</a></li>
                            <li class="breadcrumb-item"><a href="{{ Route('admin.case-study.questions', $caseStudy->id) }}">Questions</a></li>
                            <li class="breadcrumb-item">Create</li>
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
                                                <h3 class="card-title">Create Question</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <form action="{{ route('admin.question.store') }}" method="POST" id="add-question-form">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="case_study_id" value="{{ $caseStudy->id ?? '' }}">

                                                    <div class="row">

                                                        <div class="col-sm-12">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>Question</label>
                                                                <textarea class="form-control" name="question" id="summernote" rows="10"></textarea>
                                                            </div>
                                                            @error('question')
                                                            <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <input name="demo_question" id="demo_question" type="checkbox" value="1">
                                                                <label for="demo_question" style="font-weight: normal"> &nbsp;&nbsp;Show in Demo question</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2 offset-10">
                                                            <button class="btn btn-md btn-block btn-primary" type="submit">Create</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-answer" role="tabpanel" aria-labelledby="custom-tabs-four-answer-tab">
                                        Please create question first!
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
