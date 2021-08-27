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
            <div class="col-10">
            </div>
            <div class="col-2">
                <a href="{{ route('admin.vendor.create') }}" class="btn btn-block btn-primary btn-md">Add Vendor</a>
            </div>
        </div>
        <br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse($vendors as $key => $vendor)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $vendor->title ?? '' }}</td>
                        <td>
                          @if ($vendor->status == 1)
                            Active
                          @endif
                          @if ($vendor->status == 0)
                            Disabled
                          @endif
                          
                        </td>
                        <td> 
                            <a href="{{ route('admin.vendors.edit', $vendor->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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