@extends('layouts.admin.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.blogs') }}">Blogs</a></li>
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
                    <div class="card-body">
                        @include('layouts.admin.includes.messages')
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                          <div class="tab-pane active show fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Create Blog</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <form action="{{ route('admin.blog.create') }}" method="POST"  enctype="multipart/form-data" id="add-blog-form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                      <div class="col-sm-8">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Title</label>
                                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                            <p class="text-danger">
                                            @error('title')
                                            {{ $message }}
                                            @enderror
                                            </p>
                                        </div>
                                      </div>
                                      <input type="hidden" id="blog-name-exist" value="{{ route('admin.blog.name-exists') }}">

                                      <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Disabled</option>
                                            </select>
                                        </div>
                                      </div>

                                    </div>

                                    <div class="row">
                                      <div class="col-sm-12">
                                        <!-- Image input -->
                                        <div class="form-group">
                                          <label>Banner</label>
                                          <div class="row">
                                            <div class="col-sm-12">
                                              <div class="form-group">
                                                <!-- Image Box -->
                                                <div id="banner_box" style="width: 100%;">
                                                  <img class="img-fluid rounded" id="blog_banner" width="100%">
                                                </div>
                                                <!-- END Image Box -->
                                                <div class="custom-file mt-2">
                                                  <input type="file" class="custom-file-input" onchange="readURL(this);" id="blog_banner_file" name="blog_banner_file" >
                                                  <label class="custom-file-label">Choose Blog Banner file...</label>
                                                  <p class="text-danger error_blog_banner_file">
                                                    @error('blog_banner_file')
                                                    {{ $message }}
                                                    @enderror
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="description" id="summernote" rows="10"></textarea>
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
<script>
//  Photo Setting
function readURL(input) 
{
  if (input.files && input.files[0]) 
  {
    var reader = new FileReader();
    reader.onload = function (e) 
    {
      $('#blog_banner').attr('src', e.target.result);
      $('#blog_banner').attr('style', 'height:300px !important');
    };
    reader.readAsDataURL(input.files[0]);
  }
}    
// END Photo Setting
</script>
@endsection
