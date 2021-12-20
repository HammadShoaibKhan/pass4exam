@extends('layouts.admin.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.vendors') }}">Vendors</a></li>
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
                        </ul>
                      </div>
                      <div class="card-body">
                          @include('layouts.admin.includes.messages')
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                          <div class="tab-pane active show fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Update Vendor</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <form action="{{ route('admin.vendor.update', $vendor->id) }}" method="POST" id="edit-vendor-form">
                                      {{ csrf_field() }}
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" class="form-control" name="title" placeholder="Name" value="{{ $vendor->title ?? '' }}">
                                        </div>
                                      </div>

                                      <div class="col-sm-6">
                                          <div class="form-group">
                                              <label>Status</label>
                                              <select name="status" class="form-control">
                                                  <option value="1" {{ $vendor->status == 1 ? 'selected' : '' }}>Active</option>
                                                  <option value="0" {{ $vendor->status == 0 ? 'selected' : '' }}>Disabled</option>
                                              </select>
                                          </div>
                                      </div>

                                    </div>
                                    <div style="display: none" class="row">

                                      <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="description" rows="10" id="summernote">{{ $vendor->description ?? '' }}</textarea>
                                        </div>
                                      </div>
                                    </div>

                                      <div class="row">

                                          <div class="col-sm-3">
                                              <!-- text input -->
                                              <div class="form-group">
                                                  <input {{ $vendor->top_navbar_vendor == 1 ? 'checked' : '' }} type="checkbox" id="top_navbar_vendor" name="top_navbar_vendor" value="1">&nbsp;&nbsp;<label style="font-weight: normal" for="top_navbar_vendor">Show&nbspvendor&nbspin&nbsptop&nbspnavbar</label>
                                              </div>
                                          </div>
                                          <div class="col-sm-3">
                                              <!-- text input -->
                                              <div class="form-group">
                                                  <input {{ $vendor->popular_tab_vendor == 1 ? 'checked' : '' }} type="checkbox" id="popular_tab_vendor" name="popular_tab_vendor" value="1">&nbsp;&nbsp;<label for="popular_tab_vendor" style="font-weight: normal">Show&nbspvendor&nbspin&nbsppopular&nbsptabs</label>
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
                                      <form action="{{route('admin.vendor.pricing')}}" method="POST">
                                          {{csrf_field()}}
                                          <input type="hidden" value="{{$vendor->id}}" name="vendor_id">
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
                                                      <input type="number" min="1" value="{{ $vendor->getPricing()->bundle->orignal ?? 1 }}" name="bundle_price" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <input type="number" min="1" value="{{ $vendor->getPricing()->bundle->discounted ?? 1 }}" name="discounted_bundle_price" class="form-control">
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
                                                      <input type="number" min="1" value="{{ $vendor->getPricing()->bundle->orignal_price_2 ?? 1 }}" name="bundle_price_2" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <input type="number" min="1" value="{{ $vendor->getPricing()->bundle->discounted_price_2 ?? 1  }}" name="discounted_bundle_price_2" class="form-control">
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
                                                      <input type="number" min="1" value="{{ $vendor->getPricing()->bundle->orignal_price_3 ?? 1 }}" name="bundle_price_3" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <input type="number" min="1" value="{{ $vendor->getPricing()->bundle->discounted_price_3 ?? 1 }}" name="discounted_bundle_price_3" class="form-control">
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
