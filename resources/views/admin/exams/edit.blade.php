@extends('layouts.admin.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Exam</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.exams') }}">Exams</a></li>
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
                              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">General</a>
                          </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Case&nbspStudies</a>
                            </li>
                        </ul>
                      </div>
                      <div class="card-body">

                      @include('layouts.admin.includes.messages')
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane active show fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="card card-primary cstm-border">
                                <div class="card-header">
                                  <h3 class="card-title">Update Exam</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <form action="{{ route('admin.exam.update', $exam->id) }}" method="POST" id="edit-exam-form">
                                    {{ csrf_field() }}
                                    <div class="row">

                                      <input type="hidden" id="exam-name-exist" value="{{ route('admin.exam.name-exists') }}">
                                      <input type="hidden" id="exam-code-exist" value="{{ route('admin.exam.code-exists') }}">

                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <label>Vendor</label>
                                              <select name="vendor_id" class="form-control select-vendor" data-route="{{ route('admin.vendor.certifications') }}">
                                                  <option value="">Select Vendor......</option>
                                                  @forelse ($vendors as $vendor)
                                                    @if ($vendor->certifications->count() > 0)
                                                        <option value="{{ $vendor->id }}" {{ $exam->vendor_id == $vendor->id ? 'selected' : '' }}>{{ $vendor->title }}</option>
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
                                                @forelse ($certifications as $certification)
                                                    <option value="{{ $certification->id }}" {{ $certification->id == $exam->certification_id ? 'selected' : '' }}>{{ $certification->title ?? '' }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            <p class="text-danger">
                                              @error('certification_id')
                                              {{ $message }}
                                              @enderror
                                              </p>
                                        </div>
                                      </div>


                                      <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ $exam->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $exam->status == 0 ? 'selected' : '' }}>Disabled</option>
                                            </select>
                                        </div>
                                      </div>

                                      <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" class="form-control" id="title" name="title" placeholder="Name" value="{{ $exam->title ?? '' }}">
                                            <p class="text-danger">
                                            @error('title')
                                            {{ $message }}
                                            @enderror
                                            </p>
                                        </div>
                                      </div>

                                      <div class="col-sm-4">
                                          <!-- text input -->
                                          <div class="form-group">
                                            <label>Exam&nbspCode</label>
                                            <input type="text" value="{{ $exam->exam_code ?? '' }}" class="form-control" id="exam_code" name="exam_code" placeholder="Exam Code">
                                              <p class="text-danger">
                                              @error('exam_code')
                                              {{ $message }}
                                              @enderror
                                              </p>
                                          </div>
                                      </div>

                                      </div>
                                      <div class="row">

                                        <div class="col-sm-12">
                                          <!-- text input -->
                                          <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" id="summernote" rows="10">{{ $exam->description ?? '' }}</textarea>
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

                                <div class="card card-primary cstm-border">
                                    <div class="card-header">
                                        <h3 class="card-title">Pricing</h3>
                                    </div>

                                    <div class="card-body">
                                        <form action="{{route('admin.exam.pricing')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" value="{{$exam->id}}" name="exam_id">
                                            <div style="background-color: #e0f5e0;" class="col-12">
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
                                                            <label>Orignal Price</label>
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
                                                            <input type="number" min="1" value="{{ $exam->getPricing()->bundle->orignal ?? 1 }}" name="bundle_price" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="number" min="1" value="{{ $exam->getPricing()->bundle->discounted ?? 1 }}" name="discounted_bundle_price" class="form-control">
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
                                                            <input type="number" min="1" value="{{ $exam->getPricing()->bundle->orignal_price_2 ?? 1 }}" name="bundle_price_2" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="number" min="1" value="{{ $exam->getPricing()->bundle->discounted_price_2 ?? 1  }}" name="discounted_bundle_price_2" class="form-control">
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
                                                            <input type="number" min="1" value="{{ $exam->getPricing()->bundle->orignal_price_3 ?? 1 }}" name="bundle_price_3" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="number" min="1" value="{{ $exam->getPricing()->bundle->discounted_price_3 ?? 1 }}" name="discounted_bundle_price_3" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Web&nbspPrice</label>
                                                        <input type="number" min="1" value="{{ $exam->getPricing()->web->orignal ?? 1 }}" name="web_price" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pdf&nbspFile&nbspPrice</label>
                                                        <input type="number" min="1" value="{{ $exam->getPricing()->pdf->orignal ?? 1 }}" name="pdf_price" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Desktop&nbspFile&nbspPrice</label>
                                                        <input type="number" min="1" value="{{ $exam->getPricing()->desktop->orignal ?? 1 }}" name="desktop_price" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Discount Prices --}}
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label><span style="color:red;">Discounted</span> Web&nbspPrice</label>
                                                        <input type="number" min="1" value="{{ $exam->getPricing()->web->discounted ?? 1 }}" name="discounted_web_price" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label><span style="color:red;">Discounted</span> Pdf&nbspFile&nbspPrice</label>
                                                        <input type="number" min="1" value="{{ $exam->getPricing()->pdf->discounted ?? 1 }}" name="discounted_pdf_price" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label><span style="color:red;">Discounted</span> DesktopFilePrice</label>
                                                        <input type="number" min="1" value="{{ $exam->getPricing()->desktop->discounted ?? 1 }}" name="discounted_desktop_price" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 offset-10">
                                                    <button type="submit" class="btn btn-md btn-block btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                  </div>
                              </div>

                              <!--Demo File-->
                              <div class="card card-primary cstm-border">
                                <div class="card-header">
                                  <h3 class="card-title">Demo File</h3>
                                </div>
                                @if(empty(getMediaFile('exams', 'demo_file', $exam->id)))
                                <form id="demo_file_form" action="{{ route('admin.exam.demo-file') }}" enctype="multipart/form-data" method="POST">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="exam_id" value="{{ $exam->id }}"><br>
                                  <div class="row p-4">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <input type="file" name="demo_file">
                                        <p class="text-danger error_demo_file">
                                          @error('demo_file')
                                          {{ $message }}
                                          @enderror
                                        </p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <input type="submit" value="Upload File">
                                    </div>
                                  </div>
                                </form>
                                @else
                                <table class="table table-stripped">
                                  <thead>
                                    <tr>
                                      <th>File</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><a href="{{ asset('storage/demo_files/' . getMediaFile('exams', 'demo_file', $exam->id)) }}" target="_blank">Demo&nbspFile</a></td>
                                      <td><a class="btn btn-sm btn-danger del-exam-file"><i class="fa fa-trash-alt"></i></a></td>
                                      <form class="delete_file_form" action="{{ route('admin.exam.delete-file', $exam->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="file_type" value="demo_file">
                                      </form>
                                    </tr>
                                  </tbody>

                                </table>
                                @endif
                              </div>

                              <!--PDF File-->
                              <div class="card card-primary cstm-border">
                                  <div class="card-header">
                                      <h3 class="card-title">PDF File</h3>
                                  </div>
                                  @if(empty(getMediaFile('exams', 'pdf_file', $exam->id)))
                                      <form id="pdf_file_form" action="{{ route('admin.exam.pdf-file') }}" enctype="multipart/form-data" method="POST">
                                          {{ csrf_field() }}
                                          <input type="hidden" name="exam_id" value="{{ $exam->id }}"><br>
                                          <div class="row p-4">
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <input type="file" name="pdf_file">
                                                      <p class="text-danger error_pdf_file">
                                                          @error('pdf_file')
                                                          {{ $message }}
                                                          @enderror
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <input type="submit" value="Upload File">
                                              </div>
                                          </div>
                                      </form>
                                  @else
                                      <table class="table table-stripped">
                                          <thead>
                                          <tr>
                                              <th>File</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                              <td><a href="{{ asset('storage/pdf_files/' . getMediaFile('exams', 'pdf_file', $exam->id)) }}" target="_blank">Pdf&nbspFile</a></td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <form id="pdf_file_form" action="{{ route('admin.exam.pdf-file') }}" enctype="multipart/form-data" method="POST">
                                                      {{ csrf_field() }}
                                                      <input type="hidden" name="exam_id" value="{{ $exam->id }}"><br>
                                                      <div class="row p-4">
                                                          <div class="col-md-4">
                                                              <div class="form-group">
                                                                  <input type="file" name="pdf_file">
                                                                  <p class="text-danger error_pdf_file">
                                                                      @error('pdf_file')
                                                                      {{ $message }}
                                                                      @enderror
                                                                  </p>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                              <input type="submit" value="Update Pdf File">
                                                          </div>
                                                      </div>
                                                  </form>
                                              </td>
                                          </tr>
                                          </tbody>

                                      </table>
                                  @endif
                              </div>

                              <!--Desktop File-->
                              <div class="card card-primary cstm-border">
                                  <div class="card-header">
                                      <h3 class="card-title">Desktop File</h3>
                                  </div>
                                  @if(empty(getMediaFile('exams', 'desktop_file', $exam->id)))
                                      <form id="desktop_file_form" action="{{ route('admin.exam.desktop-file') }}" enctype="multipart/form-data" method="POST">
                                          {{ csrf_field() }}
                                          <input type="hidden" name="exam_id" value="{{ $exam->id }}"><br>
                                          <div class="row p-4">
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <input type="file" name="desktop_file">
                                                      <p class="text-danger error_desktop_file">
                                                          @error('desktop_file')
                                                          {{ $message }}
                                                          @enderror
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <input type="submit" value="Upload File">
                                              </div>
                                          </div>
                                      </form>
                                  @else
                                      <table class="table table-stripped">
                                          <thead>
                                          <tr>
                                              <th>File</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                              <td><a href="{{ asset('storage/desktop_files/' . getMediaFile('exams', 'desktop_file', $exam->id)) }}" target="_blank">Desktop&nbspFile</a></td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <form id="desktop_file_form" action="{{ route('admin.exam.desktop-file') }}" enctype="multipart/form-data" method="POST">
                                                      {{ csrf_field() }}
                                                      <input type="hidden" name="exam_id" value="{{ $exam->id }}"><br>
                                                      <div class="row p-4">
                                                          <div class="col-md-4">
                                                              <div class="form-group">
                                                                  <input type="file" name="desktop_file">
                                                                  <p class="text-danger error_desktop_file">
                                                                      @error('desktop_file')
                                                                      {{ $message }}
                                                                      @enderror
                                                                  </p>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                              <input type="submit" value="Update Desktop File">
                                                          </div>
                                                      </div>
                                                  </form>
                                              </td>
                                          </tr>
                                          </tbody>

                                      </table>
                                  @endif
                              </div>

                          </div>

                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-2 offset-10">
                                                <a href="{{ route('admin.case-study.create', $exam->id) }}" class="btn btn-block btn-primary btn-md"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add&nbspCase&nbspStudy</a>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <!-- /.card-header -->
                                                    <div class="card-body" id="bind-exams">
                                                        <table id="datatable" class="table table-bordered table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @forelse($exam->caseStudies as $key => $caseStudy)
                                                                <tr>
                                                                    <td>{{ $key + 1 }}</td>
                                                                    <td><a href="{{ route('admin.case-study.questions', $caseStudy->id) }}" target="_blank">{{ $caseStudy->name }}</a></td>
                                                                </tr>
                                                            @empty
                                                            @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </section>
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
