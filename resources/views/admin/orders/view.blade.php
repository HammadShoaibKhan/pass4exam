@extends('layouts.admin.master')
@section('content')
<?php
    $user_detail = json_decode($order->user_detail);
    $order_detail = json_decode($order->order_detail);
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Order View</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.orders')}}">Orders</a></li>
                            <li class="breadcrumb-item active">View Order</li>
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
                            <div class="card-body" id="bind-orders">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Name
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext">
                                                @empty(!$order->user_id)
                                                    {{ $user_detail->name ?? 'User is Not Registered Yet' }}                                                    
                                                @endempty
                                            </p>
                                        </div>
                                        <div class="" style="margin-left: 14%">
                                            <p class="form-control-plaintext">
                                                @empty(!$order->created_at)
                                                  <b>  {{ $order->created_at ?? '' }}</b>                                                    
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
                                                {{ $order->user_email ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            User Detail
                                        </label>
                                        <div class="col-sm-5">
                                            {{-- <div class="row form-control-plaintext">
                                                <label class="col-sm-3">Name</label>
                                                <span>
                                                    {{ $user_detail->name ?? '' }}
                                                </span>
                                            </div>                                            --}}
                                            <div class="row form-control-plaintext">
                                                <label class="col-sm-3">Address</label>
                                                <span>
                                                    {{ $user_detail->address ?? '' }}
                                                </span>
                                            </div>                                           
                                            <div class="row form-control-plaintext">
                                                <label class="col-sm-3">Country</label>
                                                <span>
                                                    {{ $user_detail->country ?? '' }}
                                                </span>
                                            </div>                                           
                                            <div class="row form-control-plaintext">
                                                <label class="col-sm-3">State</label>
                                                <span>
                                                    {{ $user_detail->state ?? '' }}
                                                </span>
                                            </div>                                           
                                            <div class="row form-control-plaintext">
                                                <label class="col-sm-3">City</label>
                                                <span>
                                                    {{ $user_detail->city ?? '' }}
                                                </span>
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Order Detail
                                        </label>
                                        <div class="col-sm-5">
                                            @forelse ($order_detail as $order_d)  
                                                {{-- @empty(!$order_d->bundleType)
                                                    <div class="row form-control-plaintext">
                                                        <label class="col-sm-6">Bundle Type</label>
                                                        <span>
                                                            {{ $order_d->bundleType ?? '' }}
                                                        </span>
                                                    </div>    
                                                @endempty --}}
                                                @empty(!$order_d->bundleTitle)
                                                    <div class="row form-control-plaintext">
                                                        <label class="col-sm-6">Bundle Title</label>
                                                        <span>
                                                            {{ $order_d->bundleTitle ?? '' }}
                                                        </span>
                                                    </div>              
                                                @endempty 
                                                @empty(!$order_d->vendor_id)
                                                    <div class="row form-control-plaintext">
                                                        <label class="col-sm-6">Vendor</label>
                                                        <span>
                                                            {{ getVendorName($order_d->vendor_id) ?? '' }}
                                                        </span>
                                                    </div> 
                                                @endempty 
                                                @empty(!$order_d->certification_id)
                                                    <div class="row form-control-plaintext">
                                                        <label class="col-sm-6">Certification</label>
                                                        <span>
                                                            {{ getCertificateName($order_d->certification_id) ?? '' }}
                                                        </span>
                                                    </div> 
                                                @endempty                                  
                                                @empty(!$order_d->exam_code)
                                                    <div class="row form-control-plaintext">
                                                        <label class="col-sm-6">Exam Code</label>
                                                        <span>
                                                            {{ $order_d->exam_code ?? '' }}
                                                        </span>
                                                    </div> 
                                                @endempty  
                                                <div class="row form-control-plaintext">
                                                    <label class="col-sm-6">Price</label>
                                                    <span>
                                                        {{ $order_d->orignalprice ?? 0 }}
                                                    </span>
                                                </div>                                           
                                                <div class="row form-control-plaintext">
                                                    <label class="col-sm-6">Discount</label>
                                                    <span>
                                                        {{ ($order_d->orignalprice-$order_d->discountedprice) ?? 0 }}
                                                    </span>
                                                </div>                                           
                                                <div class="row form-control-plaintext">
                                                    <label class="col-sm-6">Total Payable</label>
                                                    <span>
                                                        {{ ($order_d->discountedprice) ?? 0 }}
                                                    </span>
                                                </div>
                                                <hr>
                                            @empty
                                            
                                            @endforelse                                               
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Total Discount
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext" >
                                                {{ $order->total_discount ?? 0 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Total Paid
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext"> 
                                                {{ $order->total_bill  ?? 0 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Amount Paid
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext">  
                                                @if ($order->paid == 1)
                                                    <span class="badge badge-success">YES</span>
                                                @else
                                                    <span class="badge badge-danger">NO</span>
                                                @endif 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 form-control-plaintext">
                                            Status
                                        </label>
                                        <div class="col-sm-5">
                                            <p class="form-control-plaintext">  
                                                @if ($order->status == 1)
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
