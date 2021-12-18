@extends('layouts.frontend.master')
@section('content')

    <div class="container-fluid p-0 content">
        <ol vocab="https://schema.org/" typeof="BreadcrumbList" style="display: none;"><li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="index.html"><span property="name">Home</span></a><meta property="position" content="1"></li><li property="itemListElement" typeof="ListItem"><span property="name">Vendors</span><meta property="position" content="2"></li></ol><section id="BreadCrumb">
            <div class="bred">
                <div class="container">
                    <div id="navbar">
                        <ol class="BreadCrumbList"><li><a href="/">Home </a><i class="fa fa-chevron-right "></i></li><li>Vendors</li></ol>			</div>
                    <div class="right-bar breadcumbBar">
                        <p>&nbsp; </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-details">
            <div class="container p-0">


                <div class="heading-blcok">
                    <h1>Latest Discount Deals for All Vendor Exams </h1>
                    <!--()-->
                    <form role="form" id="listing_form" name="listing_form" method="post" action="https://www.study4exam.com/vendors">
                        <select class="form-control sort_by_vendor" name="sort_by" data-route="{{ route('discount_deals') }}">
                            <option value=''>All Vendors</option>
                            <option value="A" >A</option><option value="B" >B</option><option value="C" >C</option><option value="D" >D</option><option value="E" >E</option><option value="F" >F</option><option value="G" >G</option><option value="H" >H</option><option value="I" >I</option><option value="J" >J</option><option value="K" >K</option><option value="L" >L</option><option value="M" >M</option><option value="N" >N</option><option value="O" >O</option><option value="P" >P</option><option value="Q" >Q</option><option value="R" >R</option><option value="S" >S</option><option value="T" >T</option><option value="U" >U</option><option value="V" >V</option><option value="W" >W</option><option value="X" >X</option><option value="Y" >Y</option><option value="Z" >Z</option>							</select>
                    </form>
                </div>
            </div>

            <!-- new container -->
            <div class="container pt-1">
                @forelse($vendors as $vendor)
                    <div class="row vendor_list_row">
                    <div class="col-lg-1 col-md-4 col-sm-12 pt-3 m-auto">


                        <img src="{{ asset('frontend/assets/site/images/online-test.png') }}" alt="{{ $vendor->title }}"  style="max-width: 70px;">


                    </div>

                    <div class="col-lg-3 col-md-8 col-sm-12 pt-4 m-auto">
                        <h3 style="color: #404040;">{{ $vendor->title ?? '' }}
                        </h3>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 pt-3 m-auto">
                        <div class="">
                            <p style="color: #404040;">
                                Available Exam : <span>{{ $vendor->exams->where('status', 1)->count() }}</span>
                            </p>

                        </div>
                        @php
                            $pricing = is_null(json_decode($vendor->pricing, true)) ? 0 : json_decode($vendor->pricing, true);
                            if ($pricing != 0) {
                                $pricing = $pricing['bundle']['discounted'];
                            }
                        @endphp
                        <div class="d-lg-inline-block">
                            <p style="color: #404040;">
                                Package Price :   <span> ${{ $pricing }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 pt-3 m-auto">

                        <div>
                            <p style="margin-bottom: 0px; color: #404040;"><i style="font-size: 16px;color: #22ad95;" class="fa fa-check"></i>   Web-Based Practice Test</p>

                            <p style="margin-bottom: 0px; color: #404040;"><i style="font-size: 16px;color: #22ad95;" class="fa fa-check"></i> Questions & Answers (PDF)</p>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12 m-auto">

                        <div style="padding-top: 20px;">
                            <a href="{{ route('vendor', $vendor->slug) }}" class="btn btn-primary" style="font-size: 14px;">SEE DETAILS</a>
                        </div>
                    </div>
                </div>
                @empty
                    <p style="text-align: center; margin-top: 10px">No Data Found</p>
                @endforelse
            </div>

        </section>
    </div>


@endsection
