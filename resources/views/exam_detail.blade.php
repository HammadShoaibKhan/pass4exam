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
                                      <a href="{{ route('home') }}"><i class="fa fa-chevron-right ">{{vender}}</i></a>
                                      <i class="fa fa-chevron-right ">{{Exam-Code}}</i>
                                  </li>
                                  <li>Vendors</li>
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
          {{-- <div class="container-fluid"> --}}
          {{-- <!-------------BundlePack--------------------------------------------> --}}
          
          {{-- END <!-------------BundlePack----------------------------------------> --}}
          
          {{-- <!-------------Features vendor--------------------------------------------> --}}
          
          {{-- END <!-------------Features vendor----------------------------------------> --}}

          {{-- <!-------------Certification vendor--------------------------------------------> --}}  
                  
          {{-- END <!-------------Certification vendor----------------------------------------> --}}


          {{-- <!------------- Vendor Testimonials --------------------------------------------> --}}  
       
          {{-- END <!------------- Vendor Testimonials ----------------------------------------> --}}

          {{-- <!------------- Comments Area --------------------------------------------> --}}  
         
          {{-- END <!------------- Comments Area ----------------------------------------> --}}

          {{-- <!-------------DiscountDeals--------------------------------------------> --}}
          
          {{-- END <!-------------DiscountDeals----------------------------------------> --}}
                    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

    @endsection
