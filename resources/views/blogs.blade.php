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
            <section class="exam_vendor_testimonials pt-5 pb-5" style=" ">
                <div id="sample_page_2_new_testimonials" class="col-xl-8 col-lg-8 col-md-7 col-sm-8 mt-3 mb-3">
                    <div id="parant_comment" class="container mt-3">
                        @forelse ($blogs as $blog)
                            <div class="media p-3">
                                <div class="media-body">
                                    <h3 class="p-2">{{ strtoupper($blog->title) ?? '' }}</h3>                          
                                    <p class="pl-4" style="color: #22ad95;font-size: 16px;font-weight: 400;">
                                        <?php echo (Str::substr(strip_tags($blog->description),0,300)) ?? ''?>
                                        ...<a href="{{ route('blog_view',$blog->slug)}}" class=""> Read more</a>
                                    </p>
                                    <div class="rating">
                                        <span style="float: right;font-size: 14px; color:#22ad95;"><i>Published:</i> <i style="color: #da0606;" >{{date('M d, Y', strtotime($blog->created_at))}}</i></span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            
                        @endforelse  
                    </div>
                </div>
            </section>
            {{-- END <!------------- Blogs List ----------------------------------------> --}}
        </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
