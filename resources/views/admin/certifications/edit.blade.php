@extends('layouts.admin.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Certification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.certifications') }}">Certifications</a></li>
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
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">General</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">

                      @include('layouts.admin.includes.messages')
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                          <div class="tab-pane active show fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Update Certification</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <form action="{{ route('admin.certification.update', $certification->id) }}" method="POST" id="edit-certification-form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" class="form-control" id="title" name="title" placeholder="Name" value="{{ $certification->title ?? '' }}">
                                            <p class="text-danger">
                                            @error('title')
                                            {{ $message }}
                                            @enderror
                                            </p>
                                        </div>
                                      </div>
                                      <input type="hidden" id="cert-name-exist" value="{{ route('admin.certification.name-exists') }}">

                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <label>Vednors</label>
                                              <select name="vender_id" class="form-control">
                                                  <option value="">Select Vendor......</option>
                                                  @forelse ($vendors as $vendor)
                                                      <option value="{{ $vendor->id }}" {{ $certification->vender_id == $vendor->id ? 'selected' : '' }}>{{ $vendor->title }}</option>
                                                  @empty
                                                  @endforelse
                                              </select>
                                              <p class="text-danger">
                                                @error('vender_id')
                                                {{ $message }}
                                                @enderror
                                                </p>
                                          </div>
                                      </div>

                                      <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ $certification->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $certification->status == 0 ? 'selected' : '' }}>Disabled</option>
                                            </select>
                                        </div>
                                    </div>

                                    </div>

                                    <div class="row" style="display: none">

                                      <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="description" id="summernote" rows="10">{{ $certification->description }}</textarea>
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
