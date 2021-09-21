@extends('layouts.admin.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Exams</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Exams</li>
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
              <a href="javascript:;" class="btn btn-block btn-info btn-md change-exam-status" data-route="{{ route('admin.exam.change-status') }}"><i class="fa fa-exchange-alt"></i>&nbsp;&nbsp; Change Status</a>
            </div>
            <div class="col-2">
              <a href="javascript:;" class="btn btn-block btn-danger btn-md delete-selected-exams" data-route="{{ route('admin.exams.delete') }}"><i class="fa fa-trash-alt"></i>&nbsp;&nbsp; Delete Selected</a>
            </div>
            <div class="col-2">
                <a href="{{ route('admin.exam.create') }}" class="btn btn-block btn-primary btn-md"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Exam</a>
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
                    <th><input type="checkbox" class="select-all-checkbox"></th>
                    <th>#</th>
                    <th>Exam&nbspCode</th>
                    <th>Name</th>
                    <th>Vendor</th>
                    <th>Certification</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse($exams as $key => $exam)
                      <tr>
                        <td><input type="checkbox" class="checkboxes" data-id="{{ $exam->id }}"></td>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $exam->exam_code ?? '' }}</td>
                        <td>{{ $exam->title ?? '' }}</td>
                        <td>{{ $exam->vendor->title ?? '' }}</td>
                        <td>{{ $exam->certification->title ?? '' }}</td>
                        <td>
                          @if ($exam->status == 1)
                            <span class="badge badge-success">Active</span>
                          @endif
                          @if ($exam->status == 0)
                            <span class="badge badge-danger">Disabled</span>
                          @endif

                        </td>
                        <td>
                            <a href="{{ route('admin.exam.edit', $exam->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <a href="javascript:;" data-id="{{ $exam->id }}" data-route="{{ route('admin.exam.delete') }}" class="btn btn-sm btn-danger del-exam"><i class="fas fa-trash-alt"></i></a>
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
