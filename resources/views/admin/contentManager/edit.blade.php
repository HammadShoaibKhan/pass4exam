@extends('layouts.admin.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update {{ Str::upper($ContentManager[0]->type) ?? '' }} Content</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.contents') }}">Content Manager</a></li>
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
                            <div class="card-body">
                                @include('layouts.admin.includes.messages')
                                <style>
                                    .Replaceables li{
                                        /* display: inline-block; */
                                    }
                                    .Replaceables li span{
                                        display: inline-block;
                                    }
                                    .color_code{
                                        color:red;
                                        font-weight: bolder;
                                    }
                                </style>
                                <div class="col-sm-12">
                                    <ul class="Replaceables row">
                                        @foreach (getReplaceables() as $key => $item)
                                            <li class="col-sm-12">
                                                <span class="col-sm-4">{{$key}}</span><span class="col-sm-5 color_code">{{$item}}</span>                                             
                                            </li>                                            
                                        @endforeach
                                    </ul>
                                </div>
                                @forelse ($ContentManager as $content)
                                    <div class="card card-primary">
                                        <div class="card-body">
                                            <form action="{{ route('admin.content.update', $content->id) }}" method="POST" id="edit-content-form">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="type" value="{{ $content->type ?? 0}}">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label class="form-label">{{ Str::upper($content->placeholder_name) ?? ''}}</label>
                                                            <textarea class="form-control summernote" name="placeholder_value" rows="7">{{ ($content->placeholder_value) ?? ''}}</textarea>
                                                            <p class="text-danger">
                                                                @error('placeholder_value')
                                                                {{ $message }}
                                                                @enderror
                                                            </p> 
                                                        </div>
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
                                @empty
                                @endforelse
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
