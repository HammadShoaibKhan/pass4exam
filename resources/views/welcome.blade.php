@extends('layouts.frontend.master')
@section('content')

<section  class="home_banner_top ptb-70">
    
      <div class="home_banner_content">
        <strong>BE A CERTIFIED PROFESSIONAL WITH US</strong>
        <h1>Certification Exam <br>
        Preparation Material </h1>
               <form class="demo-from" id="demos_form" name="demos_form" action="https://www.study4exam.com/demos/downloads/" method="post"> 
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
                        <option value="208">AAFM</option><option value="79">Acams</option><option value="37">ACFE</option><option value="35">ACI</option><option value="188">Acquia</option><option value="12">ACSM</option><option value="14">Adobe</option><option value="38">AGA</option><option value="44">AHIMA</option><option value="36">AHIP</option><option value="39">AHLEI</option><option value="41">AICPA</option><option value="42">AIIM</option><option value="175">AIWMI</option><option value="170">Alfresco</option><option value="184">Alibaba</option><option value="43">AMA</option><option value="64">Amazon</option><option value="93">American Bankers Association</option><option value="155">American College</option><option value="166">American Planning Association</option><option value="50">Android</option><option value="143">APBM</option><option value="95">APC</option><option value="144">API</option><option value="83">APICS</option><option value="159">Apple</option><option value="53">Arcitura Education</option><option value="153">Arista</option><option value="65">ASIS</option><option value="82">ASQ</option><option value="92">ASTQB</option><option value="191">Atlassian</option><option value="67">Autodesk</option><option value="18">Avaya</option><option value="204">Aviatrix</option><option value="63">Axis</option><option value="62">BACB</option><option value="52">BCS</option><option value="107">BICSI</option><option value="178">Blockchain</option><option value="167">Blue Prism</option><option value="199">Business Architecture Guild</option><option value="89">C++ Institute</option><option value="80">Certiport</option><option value="197">CertNexus</option><option value="81">CFA Institute</option><option value="7">CheckPoint</option><option value="200">CIMA</option><option value="157">CIPS</option><option value="1">Cisco</option><option value="8">Citrix</option><option value="46">CIW</option><option value="216">CloudBees</option><option value="86">Cloudera</option><option value="13">CompTIA</option><option value="207">Copado</option><option value="195">CSA</option><option value="60">CWNP</option><option value="171">CyberArk</option><option value="212">Dama</option><option value="163">Dell EMC</option><option value="66">DMI</option><option value="165">Docker</option><option value="9">Eccouncil</option><option value="97">ECDL</option><option value="96">Esri</option><option value="19">Exin</option><option value="99">Extreme Networks</option><option value="47">F5 Networks</option><option value="180">Facebook Blueprint</option><option value="100">FileMaker</option><option value="161">Finra</option><option value="33">Fortinet</option><option value="51">GAQM</option><option value="59">Genesys</option><option value="91">GFOA</option><option value="49">Google</option><option value="101">H3C</option><option value="202">HashiCorp</option><option value="88">HFMA</option><option value="104">HIPAA</option><option value="172">Hitachi Vantara</option><option value="103">Hortonworks</option><option value="2">HP</option><option value="56">HRCI</option><option value="102">Huawei</option><option value="190">IAPP</option><option value="105">IASSC</option><option value="5">IBM</option><option value="146">IBQH</option><option value="150">ICDL</option><option value="160">ICMA</option><option value="147">IFoA</option><option value="151">IFPUG</option><option value="106">IIA</option><option value="85">IIBA</option><option value="123">IISFA</option><option value="115">IMANET</option><option value="133">Informatica</option><option value="136">IQN</option><option value="113">Isaca</option><option value="31">ISC2</option><option value="118">ISM</option><option value="30">ISQI</option><option value="75">ISTQB</option><option value="215">JumpCloud</option><option value="6">Juniper</option><option value="125">Liferay</option><option value="124">Linux Foundation</option><option value="145">Logical Operations</option><option value="152">LPI</option><option value="196">LSAC</option><option value="126">LSAT</option><option value="127">Magento</option><option value="194">Marketo</option><option value="16">McAfee</option><option value="164">Micro Focus</option><option value="4">Microsoft</option><option value="189">MikroTik</option><option value="213">MongoDB</option><option value="187">MuleSoft</option><option value="221">NABP</option><option value="76">NACVA</option><option value="117">NAHQ</option><option value="116">NCMA</option><option value="162">NetApp</option><option value="114">NI</option><option value="26">Nokia</option><option value="186">Nutanix</option><option value="214">Okta</option><option value="110">OMG</option><option value="3">Oracle</option><option value="70">Palo Alto Networks</option><option value="130">PayPal</option><option value="69">Pegasystems</option><option value="111">PeopleCert</option><option value="34">PMI</option><option value="112">Polycom</option><option value="132">PostgreSQL</option><option value="134">PRINCE2</option><option value="73">PRMIA</option><option value="135">PTCB</option><option value="217">Pulse Secure</option><option value="173">Python Institute</option><option value="176">Qlik</option><option value="121">RedHat</option><option value="119">RES</option><option value="25">Riverbed</option><option value="32">RSA</option><option value="29">Salesforce</option><option value="11">SAP</option><option value="205">SAS</option><option value="68">SCP</option><option value="179">Scrum</option><option value="192">ScrumStudy</option><option value="140">SDI</option><option value="193">ServiceNow</option><option value="220">Slack</option><option value="138">SNIA</option><option value="211">Snowflake</option><option value="142">SOFE</option><option value="78">Software Certifications</option><option value="183">Splunk</option><option value="219">SUSE</option><option value="23">Symantec</option><option value="203">Tableau</option><option value="169">TeraData</option><option value="84">The Open Group</option><option value="55">Tibco</option><option value="108">Trend</option><option value="109">TruSecure</option><option value="206">UiPath</option><option value="149">USMLE</option><option value="21">VEEAM</option><option value="17">Veritas</option><option value="218">Vlocity</option><option value="10">VMware</option><option value="120">WatchGuard</option><option value="77">Worldatwork</option><option value="198">WSO2</option><option value="122">XML</option><option value="74">Zend</option> 
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

            <span class="light_heading">POPULAR</span> <h2>Popular Vendors</h2> <p>Study4exam is a trusted brand for IT students to get a comprehensive range of practice questions to prepare for all in-demand certifications. At Study4exam, we offer you accurate preparation material for exams conducted by Microsoft, Cisco, Oracle, CompTIA, and many other popular vendors. Study4exam guarantees that you will not need anything else after preparing from our actual practice questions. Save your time and download the free demo to get a fair idea about Study4exam practice questions.</p>  
           
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

                             <div id="world-class-learning"> <h2>World-class learning for anyone, everywhere</h2> </div> <div id="world-class-learning2"> <p>Study4exam offers comprehensive preparation material that guarantees your first attempt success in the leading IT certification exams. We ensure that you will get state-of-the-art and new practice questions from Study4exam. It is our objective to help you prepare well for the most expected questions so that you can attempt these difficult questions of your desired IT certification exam on the first try. Study4exam has paved the way&nbsp;for multiple candidates towards success. You can also get IT career benefits like a job promotion or boost a new career by preparing for your dream certification from Study4exam.</p> </div> <div class="row" style="margin-left: 20px; margin-bottom: 15%;margin-top: 8%;"> <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> <div style="color: white; margin-left: 5%; text-align: center; "><img alt="image" height="54" src="{{asset('frontend/assets/site/img/image_user.png')}}" width="75" /> <b class="bold_offer">24/7 Customer<br /> Support</b></div> </div> <div class="col-md-4 col-sm-4 col-xs-12 pb-3"> <div style="color: white; margin-left: 5%; text-align: center;"><img alt="image" height="54" src="{{asset('frontend/assets/site/img/image_ero.png')}}
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
       
                   <span>POPULAR</span> <h3>Popular Exams</h3> <p>Thousands of candidates have successfully prepared from Study4exam high-quality preparation material. Our practice questions are enough for your success because of our experts&rsquo; continuous efforts to keep our preparation material updated and relevant. Get instant access to recently updated practice material and walk out on exam day as a successful candidate.</p>  

      
       
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
                                             
                                             <!--https://www.study4exam.com/n-a/-->
                                             
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
    
   <div class="different_home_section_inner_top" style=""><span>OUR STRENGTH</span> <h3>How Does Study4exam Serve You?</h3> <p>Our preparation material is the most reliable solution to quickly prepare for your dream IT certification exams. We are certain that our preparation material will guide you to get certified on the first try. Here is how we serve you to prepare successfully:</p> </div> <div class="different_home_section_inner_bottom" style=""> <div class="row"> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="pdf" height="80" src="{{asset('frontend/assets/site/img/image_pdf.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">Free Demo of Preparation Material</p> <p class="content">Try a free demo of our PDF and practice exam software before the purchase to get a closer look at practice questions and answers.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="updates" height="58" src="{{asset('frontend/assets/site/img/image_ero1.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">Up to 3 Months of Free Updates</p> <p class="content">Study4exam updates its preparation material according to changes in the exam syllabus. We provide up to 3 months of free updates so that you get practice questions of today and not yesterday.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Success" height="74" src="{{asset('frontend/assets/site/img/image_sun.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">Get Certified in First Attempt</p> <p class="content">We have a long list of satisfied customers from multiple countries. It does not matter which exam you are attempting. Our practice questions will certainly assist you to get passing marks on the first attempt.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Com" height="66" src="{{asset('frontend/assets/site/img/image_com.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">PDF Questions and Practice Test</p> <p class="content">We strive to make certain that preparation material for every certification exam is authentic. Study4exam offers PDF questions, web-based and desktop practice tests that are consistently updated.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Customer" height="70" src="{{asset('frontend/assets/site/img/image_user1.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">24/7 Customer Support</p> <p class="content">Study4exam has a dedicated support team to answer your queries 24/7. Contact us if you face the technical problems, login issues, payment and download issues. We will entertain you as soon as possible.</p> </div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 pb-4 different_home_section_inner_bottom_col"> <div class="row"> <div class="col-xs-2"><strong><img alt="Guaranteed" height="62" src="{{asset('frontend/assets/site/img/image_guran.png')}}" width="70" /></strong></div> <div class="col-lg-10"> <p class="heading">100% Guaranteed Customer Satisfaction</p> <p class="content">Study4exam offers accurate practice questions at an affordable price. Thousands of customers have met their learning needs by using our products. We ensure that upon using our exam products, you are satisfied.</p> </div> </div> </div> </div> </div>   
                       

 
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
    				<p>Cisco 350-501 premium questions helped me clear all the doubts and confusion related to the exam. The updated material made sure that I would get success on the first attempt. I highly recommend study4exam if you do not want to waste your time and money</p>
                              
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
    				<p>I did not know how to go about practicing for CISSP certificate exam. So i opted for ISC2 Certified Information Systems Security Professional mock tests on study4exam. They come with the option where i can track the progress i made on an everyday basis. I could also compare my performance through the history given. The progress thus becomes streamlined and i am quite happy with the things that are going about.</p>
                              
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
    				<p>It is a new day today. My score in Certified Jenkins Engineer certification exam is all thanks to paid online simulated tests on study4exam. Thank you everyone associated to study4exam. It is the best!</p>
                              
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
    				<p>Thank God! I am happy that I could practice on study4exam mock tests for C_MDG_1909 certification exam before giving the actual exam. It helped to get rid of my fears and to get a score of 85% in the actual exam.</p>
                              
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
					<!--<form method="post" name="contactusForm" id="contactusForm" action="https://www.study4exam.com/contact">-->
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