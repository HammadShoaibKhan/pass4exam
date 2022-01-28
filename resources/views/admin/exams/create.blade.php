@extends('layouts.admin.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Exam</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.exams') }}">Exams</a></li>
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
                                  <h3 class="card-title">Create Exam</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <form action="{{ route('admin.exam.create') }}" method="POST" id="add-exam-form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" class="form-control" id="title" name="title" placeholder="Name">
                                            <p class="text-danger">
                                            @error('title')
                                            {{ $message }}
                                            @enderror
                                            </p>
                                        </div>
                                      </div>
                                      <input type="hidden" id="exam-name-exist" value="{{ route('admin.exam.name-exists') }}">
                                      <input type="hidden" id="exam-code-exist" value="{{ route('admin.exam.code-exists') }}">

                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <label>Vendor</label>
                                              <select name="vendor_id" class="form-control select-vendor" data-route="{{ route('admin.vendor.certifications') }}">
                                                  <option value="">Select Vendor......</option>
                                                  @forelse ($vendors as $vendor)
                                                    @if ($vendor->certifications->count() > 0)
                                                        <option value="{{ $vendor->id }}">{{ $vendor->title }}</option>
                                                    @endif
                                                  @empty
                                                  @endforelse
                                              </select>
                                              <p class="text-danger">
                                                @error('vendor_id')
                                                {{ $message }}
                                                @enderror
                                                </p>
                                          </div>
                                      </div>

                                      <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Certification</label>
                                            <select name="certification_id" class="form-control certifications_dropdown">
                                                <option value="">Select Certification......</option>
                                            </select>
                                            <p class="text-danger">
                                              @error('certification_id')
                                              {{ $message }}
                                              @enderror
                                              </p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Exam&nbspCode</label>
                                          <input type="text" class="form-control" id="exam_code" name="exam_code" placeholder="Exam Code">
                                            <p class="text-danger">
                                            @error('exam_code')
                                            {{ $message }}
                                            @enderror
                                            </p>
                                        </div>
                                    </div>

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

                                    <div class="row" style="display: none">

                                      <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="description" id="summernote" rows="10"></textarea>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="card card-primary cstm-border">
                                      <div class="card-header">
                                          <h3 class="card-title">Pricing</h3>
                                      </div>
  
                                      <div class="card-body">
                                        <div class="col-12">
                                                  <div class="row">
                                                      <h5 class="p-2"><b>Bundle&nbspPricing</b></h5>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <label>Period</label>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <label>Original Price</label>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <label>Discounted Price</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="text" readonly value="{{'3 Months Updates'}}" name="bundle_update_1" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="number" min="1" value="{{ "" ?? 1 }}" name="bundle_price" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="number" min="1" value="{{ "" ?? 1 }}" name="discounted_bundle_price" class="form-control">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="text" readonly value="{{'6 Months Updates'}}" name="bundle_update_2" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="number" min="1" value="{{ 1 }}" name="bundle_price_2" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="number" min="1" value="{{ 1 }}" name="discounted_bundle_price_2" class="form-control">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="text" readonly value="{{'12 Months Updates'}}" name="bundle_update_3" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="number" min="1" value="{{ 1 }}" name="bundle_price_3" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <input type="number" min="1" value="{{ 1 }}" name="discounted_bundle_price_3" class="form-control">
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><br>
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
