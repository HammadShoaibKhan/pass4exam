@extends('layouts.frontend.master')
@section('content')

<section  class="home_banner_top ptb-70">

      <div class="home_banner_content">
        <strong>BE A CERTIFIED PROFESSIONAL WITH US</strong>
        <h1>Certification Exam <br>
        Preparation Material </h1>
               <form class="demo-from" id="demos_form" name="demos_form" action="javascript:;" method="post">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
               <div class="row">
                   <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <div style="" >
            <div id="demo_vendor_idLabel" style="display:none;">Search</div>


        			<select style="height: 40px;
    border-radius: 5px;
    border: 2px solid #efefef;
    padding-left: 10px;
    width: 100%;
    font-size: 13px;
    font-weight: 400;margin-bottom: 10px;" class="option1" name="demo_vendor_id" onchange="ajaxLoadVendorExams2(this.value);">
                     <option value="">Select Vendor</option>
                     <option>Microsoft</option>
                     <option>SAP</option>
                     <option>Cisco</option>
                      </select>

        						<input type="hidden" name="demo_product_type" value="1"  />
        						<input type="hidden" name="page_title" value="Home"  />
        </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                       <div style="">

                                    <div id="demo_exam_idLabel" style="display:none;">Search</div>
                                    <select style="height: 40px;
    border-radius: 5px;
    border: 2px solid #efefef;
    padding-left: 10px;
    width: 100%;
    font-size: 13px;
    font-weight: 400; margin-bottom: 10px;" class="option1" aria-labelledBy="demo_exam_idLabel" id="demo_exam_id" name="demo_exam_id">
            						  <option value="">Select Exam</option>
            						</select>

         </div>
                   </div>
                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       <div id="home_banner_mail" style="">
                            <div class="form-group">


                                    <input type="email" id="demo_email" name="demo_email" placeholder="Enter your E-mail..." required="">

                          </div>
                        </div>
                   </div>
               </div>
            </div>

        </div>

        <div style="">
          <!--<a href="#" class="btn"></i>DOWNLOAD DEMO</a>-->
          <button type="submit" class="btn btn-default btnDemo" >DOWNLOAD DEMO</button>
        </div>
        </form>
    </div>

 </section>









    	 <main id="main" role="main">
    		<div class="container-fluid">
    			<style>
    #commentwriteareahome{

            background: rgb(224 239 236);
    color: #429482;
    padding: 50px 0px;
        margin-bottom: 0px;
    }

     #commentwriteareahome .topArea .row .col-lg-12{

         padding-left: 30px;

     }
     .new_testimonials_bg_heading{

         margin-bottom: -53px;
    margin-left: -4px;
    font-size: 98px;
    color: rgba(34, 173, 149, 7%);
    font-weight: 500;
font-family: Roboto;
line-height: 1.2;
    margin-top: 0;
display: block;
margin-inline-start: 0px;
    margin-inline-end: 0px;
     }

     @media(max-width: 767px){
         .new_testimonials_bg_heading{
             margin-bottom: -30px;
    font-size: 42px;
         }
     }

     @media(max-width: 425px){


     }

     @media(max-width: 991px){

          .right_image_security_section{

         display: none;
       }
       .popular_certification_home .overview-image .image{

           display: none;
       }
     }
</style>


 <!--------------------------------------------------------- Popular Certifications --------------------------------------------------------->

<section class="popular_certification_home pt-5 bg-f7fafd">
  <div class="container-fluid p-0">
    <div class="overview-box">
      <div class="overview-image">
        <div class="image">
          <img  width="561" height="657"  src="{{asset('frontend/assets/site/img/image_2.webp')}}" alt="image">

        </div>
      </div>

      <div class="overview-content">
        <div class="content left-content">
          <div style=" margin-bottom: 55px; margin-top: -7%;">

            <span class="light_heading">POPULAR</span> <h2>Popular Vendors</h2> <p>Certs Idea is a trusted brand for IT students to get a comprehensive range of practice questions to prepare for all in-demand certifications. At Certs Idea, we offer you accurate preparation material for exams conducted by Microsoft, Cisco, Oracle, CompTIA, and many other popular vendors. Certs Idea guarantees that you will not need anything else after preparing from our actual practice questions. Save your time and download the free demo to get a fair idea about Certs Idea practice questions.</p>

          </div>


          <div style=" margin-top: -4%;">

            <div class="topnav1_home">
                 <ul class="nav nav-tabs">
                                          <li class="nav-item" ><a class="nav-link active" data-toggle="pill" href="#hot_4">Microsoft</a></li>
                                                      <li class="nav-item" ><a class="nav-link " data-toggle="pill" href="#hot_11">SAP</a></li>
                                                      <li class="nav-item" ><a class="nav-link " data-toggle="pill" href="#hot_3">Oracle</a></li>
                                                      <li class="nav-item" ><a class="nav-link " data-toggle="pill" href="#hot_1">Cisco</a></li>

              </ul>

            </div>

              <div class="tab-content">



                <!--<div id="popularsertification_tab" class="container tab-pane active"><br>-->
                <div id="hot_4" class="tab-pane  active">

                 <div class="row" style="margin-top: 5%;">


                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/az-700.html" class="white">AZ-700</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 59
<!--<span style="padding-left: 10px;">  Updated : 03-Aug-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 03-Aug-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/az-140.html" class="white">AZ-140</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 53
<!--<span style="padding-left: 10px;">  Updated : 26-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 26-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/pl-600.html" class="white">PL-600</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 47
<!--<span style="padding-left: 10px;">  Updated : 31-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 31-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/ai-102.html" class="white">AI-102</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 80
<!--<span style="padding-left: 10px;">  Updated : 25-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 25-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/mb-920.html" class="white">MB-920</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 45
<!--<span style="padding-left: 10px;">  Updated : 24-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 24-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/dp-203.html" class="white">DP-203</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 116
<!--<span style="padding-left: 10px;">  Updated : 27-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 27-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/mb-910.html" class="white">MB-910</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 75
<!--<span style="padding-left: 10px;">  Updated : 03-Aug-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 03-Aug-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="microsoft/sc-200.html" class="white">SC-200</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 75
<!--<span style="padding-left: 10px;">  Updated : 27-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 27-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

            </div>
                </div>



                <!--<div id="popularsertification_tab" class="container tab-pane active"><br>-->
                <div id="hot_11" class="tab-pane ">

                 <div class="row" style="margin-top: 5%;">


                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-thr84-2105.html" class="white">C_THR84_2105</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 106
<!--<span style="padding-left: 10px;">  Updated : 29-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 29-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-thr92-2105.html" class="white">C_THR92_2105</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 80
<!--<span style="padding-left: 10px;">  Updated : 28-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 28-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-thr89-2105.html" class="white">C_THR89_2105</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 129
<!--<span style="padding-left: 10px;">  Updated : 28-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 28-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-thr87-2105.html" class="white">C_THR87_2105</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 162
<!--<span style="padding-left: 10px;">  Updated : 28-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 28-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-thr97-2105.html" class="white">C_THR97_2105</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 96
<!--<span style="padding-left: 10px;">  Updated : 28-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 28-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-ts422-2020.html" class="white">C_TS422_2020</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 80
<!--<span style="padding-left: 10px;">  Updated : 28-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 28-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-hrhpc-2105.html" class="white">C_HRHPC_2105</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 107
<!--<span style="padding-left: 10px;">  Updated : 03-Aug-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 03-Aug-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="sap/c-smpadm-30.html" class="white">C_SMPADM_30</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 80
<!--<span style="padding-left: 10px;">  Updated : 24-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 24-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

            </div>
                </div>



                <!--<div id="popularsertification_tab" class="container tab-pane active"><br>-->
                <div id="hot_3" class="tab-pane ">

                 <div class="row" style="margin-top: 5%;">


                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-1067-21.html" class="white">1Z0-1067-21</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 55
<!--<span style="padding-left: 10px;">  Updated : 28-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 28-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-819.html" class="white">1Z0-819</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 214
<!--<span style="padding-left: 10px;">  Updated : 26-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 26-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-997-20.html" class="white">1Z0-997-20</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 137
<!--<span style="padding-left: 10px;">  Updated : 30-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 30-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-908.html" class="white">1Z0-908</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 85
<!--<span style="padding-left: 10px;">  Updated : 29-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 29-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-920.html" class="white">1Z0-920</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 70
<!--<span style="padding-left: 10px;">  Updated : 25-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 25-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-083.html" class="white">1Z0-083</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 163
<!--<span style="padding-left: 10px;">  Updated : 31-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 31-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-082.html" class="white">1Z0-082</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 96
<!--<span style="padding-left: 10px;">  Updated : 04-Aug-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 04-Aug-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="oracle/1z0-750.html" class="white">1Z0-750</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 75
<!--<span style="padding-left: 10px;">  Updated : 29-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 29-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

            </div>
                </div>



                <!--<div id="popularsertification_tab" class="container tab-pane active"><br>-->
                <div id="hot_1" class="tab-pane ">

                 <div class="row" style="margin-top: 5%;">


                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/700-755-sbto.html" class="white">700-755</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 50
<!--<span style="padding-left: 10px;">  Updated : 28-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 28-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/500-220-ecms.html" class="white">500-220</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 57
<!--<span style="padding-left: 10px;">  Updated : 26-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 26-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/300-630-dcacia.html" class="white">300-630</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 76
<!--<span style="padding-left: 10px;">  Updated : 31-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 31-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/300-825-clcnf.html" class="white">300-825</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 60
<!--<span style="padding-left: 10px;">  Updated : 31-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 31-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/300-215-cbrfir.html" class="white">300-215</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 59
<!--<span style="padding-left: 10px;">  Updated : 30-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 30-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/350-201-cbrcor.html" class="white">350-201</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 139
<!--<span style="padding-left: 10px;">  Updated : 25-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 25-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/500-450-ucceis.html" class="white">500-450</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 70
<!--<span style="padding-left: 10px;">  Updated : 26-Jul-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 26-Jul-2021                  </span>

                    </div>
                   </div>
            </div>

                  <div class="col-lg-6 col-md-4  col-sm-6  mb-3">
                <div class="card" style="background-color: rgba(34,173,149,1); border-radius: 2px; border:0px solid;">
                  <div class="card-body hvr-curl-bottom-right" style="color: white; min-height: 100px;padding: 18px; min-height: 98px; border:0px solid;">
                      <strong style="font-size: 100%; font-weight: bold;display: block;margin-bottom: 8px;"><a style="
    font-size: 14px;
    font-weight: 600;
    font-family: 'Poppins';
    color: #fff;
" href="cisco/500-440-ucced.html" class="white">500-440</a></strong>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
    display: block;
    margin-bottom: 8px;

"> Total Questions : 86
<!--<span style="padding-left: 10px;">  Updated : 06-Aug-2021 </span>-->
</h4>
</b></span>
                        <span style="
    font-size: 13px;
    font-weight: 500;
    font-family: 'Poppins';
        margin-bottom: 0px;
         display: block;

">
                      Updated : 06-Aug-2021                  </span>

                    </div>
                   </div>
            </div>

            </div>
                </div>



              </div>


          </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--------------------------------------------------------- World-class learning --------------------------------------------------------->
<section class="pic-list">
  <div id="security_section" class="container-fluid" style="background-color: #429482;">
    <div class="overview-box">
      <div class="overview-content">
        <div class="content left-content" style="padding-bottom: 0px; padding-right: 20px;">

                             <div id="world-class-learning"> <h2>World-class learning for anyone, everywhere</h2> </div> <div id="world-class-learning2"> <p>Certs Idea offers comprehensive preparation material that guarantees your first attempt success in the leading IT certification exams. We ensure that you will get state-of-the-art and new practice questions from Certs Idea. It is our objective to help you prepare well for the most expected questions so that you can attempt these difficult questions of your desired IT certification exam on the first try. Certs Idea has paved the way&nbsp;for multiple candidates towards success. You can also get IT career benefits like a job promotion or boost a new career by preparing for your dream certification from Certs Idea.</p> </div> <div class="row" style="margin-left: 20px; margin-bottom: 15%;margin-top: 8%;"> <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> <div style="color: white; margin-left: 5%; text-align: center; "><img alt="image" height="54" src="{{asset('frontend/assets/site/img/image_user.png')}}" width="75" /> <b class="bold_offer">24/7 Customer<br /> Support</b></div> </div> <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> <div style="color: white; margin-left: 5%; text-align: center;"><img alt="image" height="54" src="{{asset('frontend/assets/site/img/image_ero.png')}}
                             " width="52" /> <b class="bold_offer">Free 3 Months<br /> Updates</b></div> </div> <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> <div style="color: white; margin-left: 5%; text-align: center;"><img alt="image" height="59" src="{{asset('frontend/assets/site/img/image_tic.png')}}" width="51" /> <b class="bold_offer">Security and<br /> Privacy</b></div> </div> </div>

        </div>
      </div>
      <div class="overview-image">
        <div class="right_image_security_section" style="text-align:center;">
          <img class="hvr-grow-rotate" width="500" height="331" src="{{asset('frontend/assets/site/img/image_10.webp')}}" alt="image" >
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>

<!--------------------------------------------------------- Popular Exams --------------------------------------------------------->

  <section class="home_popular_exam_section pt-5 pb-5 bg-f7fafd" style="">
    <div class="home_popular_exam_section_inner" style="">

                   <span>POPULAR</span> <h3>Popular Exams</h3> <p>Thousands of candidates have successfully prepared from Certs Idea high-quality preparation material. Our practice questions are enough for your success because of our experts&rsquo; continuous efforts to keep our preparation material updated and relevant. Get instant access to recently updated practice material and walk out on exam day as a successful candidate.</p>



     </div>
     <div class="container">




       <div class="row" style="margin-bottom: 3%;">


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="microsoft/md-101.html">MD-101</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-07-29 09:21:50</h3>-->


                                             <span>29, Jul 2021</span>
                                             <br>
                                             <p> 233 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="adobe/ad0-e202.html">AD0-E202</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-08-01 04:05:01</h3>-->


                                             <span>01, Aug 2021</span>
                                             <br>
                                             <p> 69 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="amazon/saa-c02.html">SAA-C02</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-07-31 10:43:53</h3>-->


                                             <span>31, Jul 2021</span>
                                             <br>
                                             <p> 166 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="mulesoft/mcd-level-1.html">MCD-Level-1</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-08-01 18:33:29</h3>-->


                                             <span>01, Aug 2021</span>
                                             <br>
                                             <p> 99 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="ibm/c1000-100.html">C1000-100</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-07-24 04:10:13</h3>-->


                                             <span>24, Jul 2021</span>
                                             <br>
                                             <p> 122 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="avaya/71300x.html">71300X</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-07-25 05:22:31</h3>-->


                                             <span>25, Jul 2021</span>
                                             <br>
                                             <p> 64 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="axis/anve.html">ANVE</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-08-01 23:51:52</h3>-->


                                             <span>01, Aug 2021</span>
                                             <br>
                                             <p> 145 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


                                       <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                       <div id="popular_exam_cards" class="card">
                                         <div class="card-body hvr-rectangle-out" style="display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgb(0 0 0 / 0%);
    position: inherit !important;
    background: #fff !important;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    ">
                                           <div id="popular_exam_cards_body_content">
                                             <strong ><a href="nahq/cphq.html">CPHQ</a></strong>

                                             <!--https://www.certsidea.com/n-a/-->

                                             <br>

                                             <!---->
                                             <!--<h3>2021-08-01 09:18:11</h3>-->


                                             <span>01, Aug 2021</span>
                                             <br>
                                             <p> 201 Total Questions </p>
                                           </div>
                                          </div>
                                         </div>
                                       </div>


         </div>
     </div>
   </div>
 </section>


 <!--------------------------------------------------------- DIFFERENT --------------------------------------------------------->


<section class="different_home_section pt-5 pb-5 bg-f7fafd" style=" ">

   <div class="different_home_section_inner_top" style=""><span>OUR STRENGTH</span> <h3>How Does Certs Idea Serve You?</h3> <p>Our preparation material is the most reliable solution to quickly prepare for your dream IT certification exams. We are certain that our preparation material will guide you to get certified on the first try. Here is how we serve you to prepare successfully:</p> </div> <div class="different_home_section_inner_bottom" style=""> <div class="row"> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="pdf" height="80" src="{{asset('frontend/assets/site/img/image_pdf.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">Free Demo of Preparation Material</p> <p class="content">Try a free demo of our PDF and practice exam software before the purchase to get a closer look at practice questions and answers.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="updates" height="58" src="{{asset('frontend/assets/site/img/image_ero1.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">Up to 3 Months of Free Updates</p> <p class="content">Certs Idea updates its preparation material according to changes in the exam syllabus. We provide up to 3 months of free updates so that you get practice questions of today and not yesterday.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Success" height="74" src="{{asset('frontend/assets/site/img/image_sun.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">Get Certified in First Attempt</p> <p class="content">We have a long list of satisfied customers from multiple countries. It does not matter which exam you are attempting. Our practice questions will certainly assist you to get passing marks on the first attempt.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Com" height="66" src="{{asset('frontend/assets/site/img/image_com.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">PDF Questions and Practice Test</p> <p class="content">We strive to make certain that preparation material for every certification exam is authentic. Certs Idea offers PDF questions, web-based and desktop practice tests that are consistently updated.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Customer" height="70" src="{{asset('frontend/assets/site/img/image_user1.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">24/7 Customer Support</p> <p class="content">Certs Idea has a dedicated support team to answer your queries 24/7. Contact us if you face the technical problems, login issues, payment and download issues. We will entertain you as soon as possible.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Guaranteed" height="62" src="{{asset('frontend/assets/site/img/image_guran.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">100% Guaranteed Customer Satisfaction</p> <p class="content">Certs Idea offers accurate practice questions at an affordable price. Thousands of customers have met their learning needs by using our products. We ensure that upon using our exam products, you are satisfied.</p> </div> </div> </div> </div> </div>



</section>




  <!--------------------------------------------------------- Recent Updates exams --------------------------------------------------------->

  <section class="recent_update_exam_home pt-5 pb-5 bg-f7fafd">
    <div class="recent_update_exam_top_home">

         <span>RECENTS</span> <h3>Recent Updated Exams</h3>
    </div>
    <div class="recent_update_exam_bottom_home container">
      <div class="row">
                   <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="microsoft/az-204.html">AZ-204</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Developing Solutions for Microsoft Azure Exam</strong>
                    <p>246 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>05</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="cisco/300-410-enarsi.html">300-410</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Implementing Cisco Enterprise Advanced Routing and Services</strong>
                    <p>216 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>04</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="salesforce/adm-201.html">ADM-201</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Administration Essentials for New Admins</strong>
                    <p>360 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>04</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="amazon/ans-c00.html">ANS-C00</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">AWS Advanced Networking Specialty</strong>
                    <p>153 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>04</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="cisco/300-715-sise.html">300-715</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Implementing and Configuring Cisco Identity Services Engine</strong>
                    <p>152 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>04</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="servicenow/csa.html">CSA</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">ServiceNow Certified System Administrator</strong>
                    <p>147 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>03</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="cisco/350-801-clcor.html">350-801</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Implementing and Operating Cisco Collaboration Core Technologies</strong>
                    <p>240 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>03</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="apics/cscp.html">CSCP</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">APICS Certified Supply Chain Professional</strong>
                    <p>360 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>03</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

                <div class="recent_update_exam_bottom_card_home col-lg-4 col-md-12 col-sm-12 mb-4">
          <div class="card " style="">
            <div class="card-body hvr-sweep-to-right">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="border-col">
                  <div style="text-align: center;">
                    <b><a href="microsoft/dp-300.html">DP-300</a></b>
                    <strong style="font-weight: 500;font-size: 13px;font-family: Roboto;display: block;margin-bottom: 8px;">Administering Relational Databases on Microsoft Azure</strong>
                    <p>176 Total Questions </p>
                  </div>
                </div>
                <div class="date_section col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  <div style="text-align: center;     padding-top: 10px;">
                    <strong>03</strong>
                    <b >August</b>

                    <p
                      style="">
                      <b>2021</b></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>



      </div>


    </div>
    </div>
  </section>

<!--------------------------------------------------------- Recent Updates exams END --------------------------------------------------------->


      <section class="exam_vendor_testimonials pt-5 pb-5" style=" ">
            <div class="section-title">
              <span class="new_testimonials_bg_heading">TESTIMONIALS</span>
              <h4 class="home_testimonials"> Certification Exam Testimonials</h4>
            </div>

    <div id="sample_page_2_new_testimonials" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 mb-4" >
     <div id="parant_comment" class="container mt-3">


  <div class="media p-3">

                		<div class="initalname">
    		    M    		</div>


            <div class="media-body">
              <div class="home_test_name">Marcella	    				    				        <!--<img src="{{asset('frontend/https://flagcdn.com/w80/dz.png" alt="flag"  class="dicls">-->

    		    <span><i>Aug 7, 2021</i></span></div>
                <div class="rating">
    				        				</div>
    				<p>Some people are stuck in between certificates and are not able to clear in spite of studying the course several number of times. The thing they are missing is practice. With such a wonderful resource of premium questions available online, i took no second chance and enrolled. Successfully cleared 33820X Certification Exam with good results.</p>

    </div>
  </div>


  <div class="media p-3">

                		<div class="initalname">
    		    T    		</div>


            <div class="media-body">
              <div class="home_test_name">Tyler
    		    <span><i>Aug 5, 2021</i></span></div>
                <div class="rating">
    				        				        <span class="glyphicon glyphicon-star"></span>
    					    <span class="glyphicon glyphicon-star"></span>
    					    <span class="glyphicon glyphicon-star"></span>
    					    <span class="glyphicon glyphicon-star"></span>
    				        <span class="glyphicon glyphicon-star half"></span>
    				        				</div>
    				<p>Cisco 350-501 premium questions helped me clear all the doubts and confusion related to the exam. The updated material made sure that I would get success on the first attempt. I highly recommend certsidea if you do not want to waste your time and money</p>

    </div>
  </div>


  <div class="media p-3">

                		<div class="initalname">
    		    T    		</div>


            <div class="media-body">
              <div class="home_test_name">Timothy
    		    <span><i>Aug 3, 2021</i></span></div>
                <div class="rating">
    				        				</div>
    				<p>I did not know how to go about practicing for CISSP certificate exam. So i opted for ISC2 Certified Information Systems Security Professional mock tests on certsidea. They come with the option where i can track the progress i made on an everyday basis. I could also compare my performance through the history given. The progress thus becomes streamlined and i am quite happy with the things that are going about.</p>

    </div>
  </div>


  <div class="media p-3">

                		<div class="initalname">
    		    K    		</div>


            <div class="media-body">
              <div class="home_test_name">Kenney
    		    <span><i>Aug 1, 2021</i></span></div>
                <div class="rating">
    				        				</div>
    				<p>It is a new day today. My score in Certified Jenkins Engineer certification exam is all thanks to paid online simulated tests on certsidea. Thank you everyone associated to certsidea. It is the best!</p>

    </div>
  </div>


  <div class="media p-3">

                		<div class="initalname">
    		    J    		</div>


            <div class="media-body">
              <div class="home_test_name">Joshua
    		    <span><i>Jul 30, 2021</i></span></div>
                <div class="rating">
    				        				</div>
    				<p>Thank God! I am happy that I could practice on certsidea mock tests for C_MDG_1909 certification exam before giving the actual exam. It helped to get rid of my fears and to get a score of 85% in the actual exam.</p>

    </div>
  </div>

</div>
</div>



    </section>


    <!-- comment area end -->
<div id="commentwriteareahome" class="commentwritearea" style="display: none;">
    <div class="container">
        <div class="topArea">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="h4" > Leave Your Comment</div>
                </div>
            </div>
        </div>
        <div class="mainformarea">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="form-messages" style="background:none;">

											</div>
    				<div class="text-center">
    					<div class="alert alert-success" style="display:none"></div>
    					<div class="alert alert-danger" style="display:none"></div>
    				</div>
					<!--<form method="post" name="contactusForm" id="contactusForm" action="https://www.certsidea.com/contact">-->
					<div name="contactusForm" id="contactusForm">
					    <div class="inputArea">
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" class="NameSearch form-control" id="full_name" name="full_name" value="" placeholder="Full Name" required="required">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="NameSearch form-control" id="email" name="email" value="" placeholder="example@email.com" required="required">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label>Subject</label>
									<input type="text" class="NameSearch form-control" id="subject" name="subject" value="" placeholder="Subject" required="required">
									<span class="help-block"></span>
								</div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Message</label>
									<textarea class="LgSearch form-control" id="message" name="message" rows="8" placeholder="Message" required="required"></textarea>
									<span class="help-block"></span>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<button class="btn btn-success" id="submitcontactdata">submit</button>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

</div>
</main>




@endsection
