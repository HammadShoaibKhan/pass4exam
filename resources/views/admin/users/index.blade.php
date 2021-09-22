@extends('layouts.admin.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                        <a href="javascript:;" class="btn btn-block btn-info btn-md change-user-status" data-route="{{ route('admin.users.change-status') }}"><i class="fa fa-exchange-alt"></i>&nbsp;&nbsp; Change Status</a>
                    </div>
                    <div class="col-2">
                        <a href="javascript:;" class="btn btn-block btn-danger btn-md delete-selected-users" data-route="{{ route('admin.users.delete') }}"><i class="fa fa-trash-alt"></i>&nbsp;&nbsp; Delete Selected</a>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary btn-md"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add&nbspUser</a>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body" id="bind-users">
                                <table id="datatable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox" class="select-all-checkbox"></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $key => $user)
                                        <tr>
                                            <td><input type="checkbox" class="checkboxes" data-id="{{ $user->id }}"></td>
                                            <td>{{ $user->name ?? '' }}</td>
                                            <td>{{ $user->email ?? '' }}</td>
                                            <td>
                                                @if ($user->type == 1)
                                                    Admin
                                                @endif
                                                @if ($user->type == 2)
                                                    Customer
                                                @endif

                                            </td>
                                            <td>
                                                @if ($user->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Disabled</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:;" data-id="{{ $user->id }}" data-route="{{ route('admin.user.delete') }}" class="btn btn-sm btn-danger del-user"><i class="fas fa-trash-alt"></i></a>
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
