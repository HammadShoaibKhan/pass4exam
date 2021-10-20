@extends('layouts.admin.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.contents') }}">Content Manager</a></li>
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
                            {{-- <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">General</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="card-body">

                                @include('layouts.admin.includes.messages')
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane active show fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Create Page Content </h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <form action="{{ route('admin.content.create') }}" method="POST" id="add-content-form">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>Page Type</label>
                                                                <select name="type" class="form-control">
                                                                    <option value="">Select Page Type</option>
                                                                    @forelse (getPageTypes() as $key => $pageType)
                                                                        <option value="{{$key ?? 0}}">{{ $pageType ?? ''}}</option>                                                                       
                                                                    @empty
                                                                    @endforelse
                                                                </select>
                                                                <p class="text-danger">
                                                                    @error('type')
                                                                    {{ $message }}
                                                                    @enderror
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Placeholder Name</label>
                                                                <input type="text" class="form-control" name="placeholder_name" placeholder="Placeholder Name">
                                                                <p class="text-danger">
                                                                    @error('placeholder_name')
                                                                    {{ $message }}
                                                                    @enderror
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Placeholde Content</label>
                                                                <textarea class="form-control" name="placeholder_value" id="summernote" rows="10"></textarea>
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
