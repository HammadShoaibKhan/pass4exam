@extends('layouts.admin.master')
@section('content')
<?php
    $user_detail = '';
    $testimonial_detail ='';
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Testimonial View</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.testimonials')}}">Testimonials</a></li>
                            <li class="breadcrumb-item active">View Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                
                <br>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body" id="bind-testimonials">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Name
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext">
                                                {{ $testimonial->name ?? '' }}                                                    
                                            </p>
                                        </div>
                                        <div class="" style="margin-left: 14%">
                                            <p class="form-control-plaintext" style="padding: 5px;">
                                                @empty(!$testimonial->created_at)
                                                  <b style="font-size: 20px;color:green;">  <?php echo date_format($testimonial->created_at,'d-M-Y --  H:i') ?></b>                                                    
                                                @endempty
                                            </p>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Email
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext" >
                                                {{ $testimonial->email ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Subject
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext" >
                                                {{ $testimonial->subject ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Message
                                        </label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext"> 
                                                {{ $testimonial->message  ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Approved
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext">  
                                                @if ($testimonial->approved == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Disabled</span>
                                                @endif 
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
