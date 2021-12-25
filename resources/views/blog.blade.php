@extends('layouts.frontend.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            {{-- <!-------------Breadcrumb--------------------------------------------> --}}
            <div class="container-fluid p-0 content">
                <section id="BreadCrumb">
                    <div class="bred">
                        <div class="container-fluid">
                            <div id="navbar">
                                <ol class="BreadCrumbList">
                                    <li>
                                        <a href="{{ route('home') }}">Home </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right "> </i>
                                    </li>
                                    <li>
                                        <a href="{{ route('blogs') }}">Blogs </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right "> </i>
                                    </li>
                                    <li>
                                        {{ $title ?? ''  }}</a>
                                    </li>
                                </ol>
                            </div>
                            <div class="right-bar breadcumbBar">
                                <p>&nbsp; </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- END <!-------------Breadcrumb----------------------------------------> --}}
        </section>
        <!-- Main content -->
        <section class="content">
            {{-- <!------------- Blogs List --------------------------------------------> --}}
            <section class="exam_vendor_testimonials pb-5" style=" ">
                <div id="sample_page_2_new_testimonials" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                    <div id="parant_comment" class="container">
                        <div class="media p-3">
                            <div class="media-body">
                                <div class="row p-2">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="">
                                        <!-- Image Box -->
                                            <img class="img-fluid rounded" id="blog_banner"
                                                src="{{ asset('storage/blog_banner_files/' . getMediaFile('blogs','blog_banner_file', $blog->id)) }}"
                                                style="width:100%; height: 350px;" 
                                            >
                                        <!-- END Image Box -->
                                    </div>
                                </div>

                                <h1 class="p-2 mt-2">{{ strtoupper($blog->title) ?? '' }}</h1>
                                                          
                                <p class="pl-4" style="color: #22ad95;font-size: 16px;font-weight: 400;">
                                    <?php echo ($blog->description) ?? ''?>
                                </p>
                                <div class="rating">
                                    <span style="float: right;font-size: 14px; color:#22ad95;"><i>Published:</i> <i style="color: #da0606;" >{{date('M d, Y', strtotime($blog->created_at))}}</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END <!------------- Blogs List ----------------------------------------> --}}
        </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
