@extends('layouts.admin.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Vendors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            </div>
            <div class="col-2">
              <a href="javascript:;" class="btn btn-block btn-info btn-md change-vendor-status" data-route="{{ route('admin.vendors.change-status') }}"><i class="fa fa-exchange-alt"></i>&nbsp;&nbsp; Change Status</a>
            </div>
            <div class="col-2">
              <a href="javascript:;" class="btn btn-block btn-danger btn-md delete-selected-vendors" data-route="{{ route('admin.vendors.delete') }}"><i class="fa fa-trash-alt"></i>&nbsp;&nbsp; Delete Selected</a>
            </div>
            <div class="col-2">
                <a href="{{ route('admin.vendor.create') }}" class="btn btn-block btn-primary btn-md"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Vendor</a>
            </div>
        </div>
        <br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body" id="bind-vendors">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox" class="select-all-checkbox"></th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse($vendors as $key => $vendor)
                      <tr>
                        <td><input type="checkbox" class="checkboxes" data-id="{{ $vendor->id }}"></td>
                        <td>{{ $vendor->title ?? '' }}</td>
                        <td>
                          @if ($vendor->status == 1)
                            <span class="badge badge-success">Active</span>
                          @endif
                          @if ($vendor->status == 0)
                            <span class="badge badge-danger">Disabled</span>
                          @endif

                        </td>
                        <td>
                            <a href="{{ route('admin.vendor.edit', $vendor->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <a href="javascript:;" data-id="{{ $vendor->id }}" data-route="{{ route('admin.vendor.delete') }}" class="btn btn-sm btn-danger del-vendor"><i class="fas fa-trash-alt"></i></a>
                        </td>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
