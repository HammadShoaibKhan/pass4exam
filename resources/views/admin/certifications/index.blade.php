@extends('layouts.admin.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Certifications</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Certifications</li>
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
              <a href="javascript:;" class="btn btn-block btn-info btn-md change-certification-status" data-route="{{ route('admin.certifications.change-status') }}"><i class="fa fa-exchange-alt"></i>&nbsp;&nbsp; Change Status</a>
            </div>
            <div class="col-2">
              <a href="javascript:;" class="btn btn-block btn-danger btn-md delete-selected-certifications" data-route="{{ route('admin.certifications.delete') }}"><i class="fa fa-trash-alt"></i>&nbsp;&nbsp; Delete Selected</a>
            </div>
            <div class="col-2">
                <a href="{{ route('admin.certification.create') }}" class="btn btn-block btn-primary btn-md"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Certification</a>
            </div>
        </div>
        <br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body" id="bind-certifications">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox" class="select-all-checkbox"></th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse($certifications as $key => $certification)
                      <tr>
                        <td><input type="checkbox" class="checkboxes" data-id="{{ $certification->id }}"></td>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $certification->title ?? '' }}</td>
                        <td>
                          @if ($certification->status == 1)
                            <span class="badge badge-success">Active</span>
                          @endif
                          @if ($certification->status == 0)
                            <span class="badge badge-danger">Disabled</span>
                          @endif
                          
                        </td>
                        <td> 
                            <a href="{{ route('admin.certifications.edit', $certification->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <a href="javascript:;" data-id="{{ $certification->id }}" data-route="{{ route('admin.certification.delete') }}" class="btn btn-sm btn-danger del-certification"><i class="fas fa-trash-alt"></i></a>
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