@extends('layouts.frontend.master')
@section('content')
    <?php
        $c = 0;
        // key must be equal to Replaceable Codes
        // Replaceable values can be seen in helper file ==> getReplaceables()
        $replacers = array(
            '{{EXAM-CODE}}'         =>  $exam->exam_code,
            '{{EXAM-TITLE}}'        =>  $exam->title,
            '{{VENDOR-TITLE}}'      =>  $exam->vendor->title,
            '{{CERTIFICATE-TITLE}}' =>  $exam->certification->title,
        );
    ?>
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
                                        <a href="{{ route('vendor', $exam->vendor->slug) }}">vendor</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right "></i>
                                    </li>
                                    <li>{{$exam->exam_code}}</li>
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

            {{-- <!-------------Exam Detailed Info--------------------------------------------> --}}
            <section class="sample_page_2">
                <div class="container-fluid">
                    <div class="row">
                        <div id="sample_page_2_top_heading" class="col-sm-12 mb-4">
                            <h1> {{$exam->vendor->title}} {{$exam->exam_code}} Exam Syllabus</h1>
                        </div>

                        {{-- <!-------------LEFT SIDE PORTION 75% Area--------------------------------------------> --}}
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 mb-4">
                            <div class="row">
                                {{-- <!------------- Left Promo Card--------------------------------------------> --}}
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 mb-4">
                                    {{-- @TODO --}}
                                    <div class="card sample_page_card hvr-grow-shadow">
                                        <div class="card-header" >
                                            <!--<a href=""></a>-->
                                            <strong style="cursor: auto; color: #fff;font-size: 18px;font-family: 'Roboto';text-align: center;font-weight: 600;">
                                                What is Included in the {{$exam->vendor->title}} {{$exam->exam_code}} Exam?
                                            </strong>
                                        </div>
                                        <div class="card-body text-center">
                                            <p>
                                                {{$exam->certification->title}} Fundamentals
                                            </p>
                                            <span>
                                                <!--{{$exam->exam_code}} Certification Practice Exam-->
                                                Total Questions: {{ $exam->getTotalQuestions() ?? 0 }}
                                            </span>
                                        </div>
                                        <div class="card-footer">
                                            <span style="font-size: 12px;font-weight: 700;color: #ffffff;font-family: 'Roboto';text-align: center;">
                                                Last Updated : {{ $exam->getUpdatedAt() ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- END <!------------- Left Promo Card----------------------------------------> --}}

                                {{-- <!------------- Exam Description--------------------------------------------> --}}
                                <div id="sample_page_2_top_content" class="col-xl-9 col-lg-9 col-md-8 col-sm-7 mb-4">
                                    <h2>
                                        <strong>{{$exam->vendor->title}} {{$exam->exam_code}} Exam</strong>
                                    </h2>
                                    <p>
                                        @isset($pageContent[$c]->placeholder_name)
                                            @if ($pageContent[$c]->placeholder_name == 'exam-info-exam-desc-1')
                                                {{ getReplacedValues($pageContent[$c++]->placeholder_value,$replacers) }}
                                            @endif
                                        @endisset
                                    </p>
                                </div>
                                {{-- END <!------------- Exam Description----------------------------------------> --}}

                                {{-- <!------------- Free Test Trigger--------------------------------------------> --}}
                                <div class="tryonlineBtn col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 m-auto text-center" >
                                    <div>
                                        {{-- <form method="post" action="javascript:;" id="demos_form" name="demos_form" target="_blank"> --}}
                                            {{-- <input type="hidden" name="exam_code" value="{{$exam->exam_code}}"> --}}
                                            {{-- <input type="hidden" name="demo" value="1"> --}}
                                            {{-- <input type="hidden" name="site" value="Certsidea"> --}}
                                            {{-- <input type="hidden" name="siteurl" value="../../index.html"> --}}
                                            {{-- <button class="demoLoginUserBtn btn demo"  type="submit" style="text-transform: none;"> --}}

                                        @if(($exam->getTotalQuestions() >= 5))
                                                <a href="{{ route('exam_demo', [$exam->vendor->slug,$exam->slug]) }}" target="_blank" class="btn mt-3" style="text-transform: none;">
                                                    Take a Free Self-Assessment Quiz
                                                </a>
                                        @endif

                                            {{-- </button> --}}
                                        {{-- </form> --}}
                                    </div>
                                </div>
                                {{-- END <!------------- Free Test Trigger----------------------------------------> --}}

                                {{-- <!------------- Premium Description--------------------------------------------> --}}
                                
                                {{-- END <!------------- Premium Description----------------------------------------> --}}

                                {{-- <!------------- Premium Check List--------------------------------------------> --}}
                               
                                {{-- END <!------------- Premium Check List----------------------------------------> --}}

                                {{-- <!-------------Feature Banner--------------------------------------------> --}}
                                
                                {{-- END <!-------------Feature Banner----------------------------------------> --}}

                                {{-- <!-------------Feature List--------------------------------------------> --}}
                                
                                {{-- END <!-------------Feature List----------------------------------------> --}}

                                {{-- <!-------------Frequent Links--------------------------------------------> --}}
                                <div id="sample_page_note_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <div class="terms">
                                        <p class="taxonomy">
                                            <a class="vocab-term" href="{{ route('certificate_syllabus', [$exam->vendor->slug, $exam->exam_code]) }}">{{$exam->certification->title}}</a>
                                            | <a  class="vocab-term" href="javascript:;">{{$exam->certification->title}} Administrators</a>
                                            | <a  class="vocab-term" href="javascript:;">Microsoft Business User</a>
                                            | <a  class="vocab-term" href="javascript:;">Microsoft Technology Manager</a>
                                            | <a class="vocab-term" href="javascript:;">Microsoft Beginner</a> |
                                            <a class="vocab-term" href="javascript:;">{{$exam->exam_code}} Exam Topics</a>
                                            | <a class="vocab-term" href="javascript:;">{{$exam->exam_code}} Questions Answers</a>
                                            | <a class="vocab-term" href="javascript:;">{{$exam->exam_code}} Real Questions</a>
                                            | <a class="vocab-term" href="javascript:;">{{$exam->certification->title}} Fundamentals Course Details</a>
                                        </p>

                                    </div>
                                </div>
                                {{-- END <!-------------Frequent Links----------------------------------------> --}}

                            </div>
                        </div>
                        {{-- END <!-------------LEFT SIDE PORTION 75% Area ----------------------------------------> --}}

                        {{-- <!-------------Right Side Promo Cards--------------------------------------------> --}}
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4 sample_page_2_right_bar">
                            <div class="sample_page_2_right_bar_testimonials">
                                <div class="card" style="margin-bottom: 6px;border-radius: 5px;">
                                    <div class="card-header" style="background-color: #22ad95; border-radius: 5px 5px 0px 0px;" >
                                        <!--<a href=""></a>-->
                                        <h4 style="font-size: 20px;">Free {{$exam->exam_code}} Questions</h4>
                                    </div>
                                    {{-- @TODO --}}
                                    <div class="card-body">
                                        <a style="color: #22ad95;" href="javascript:;">
                                            Free {{$exam->vendor->title}} {{$exam->exam_code}} Exam  Questions
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- 2nd Card --}}
                            <div class="sample_page_2_right_bar_testimonials">
                                <div class="card" style="margin-bottom: 6px;border-radius: 5px;">
                                    <div class="card-header" style="background-color: #22ad95; border-radius: 5px 5px 0px 0px;" >
                                        <h4 style="font-size: 20px; cursor: auto; "> {{$exam->exam_code}} Exam Syllabus</h4>
                                    </div>
                                    <div class="card-body">
                                        <a style="color: #22ad95;" href="javascript:;">
                                            {{$exam->vendor->title}} {{$exam->exam_code}} Exam Syllabus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END <!-------------Right Side Promo Cards----------------------------------------> --}}
                    </div>
                </div>
            </section>
            {{-- END <!-------------Exam Detailed Info--------------------------------------------> --}}
        </section>
        <!-- /.content -->
-----------------------------------------------------------------------------------------------------
        <!-- Main content -->
        <section class="content">

            {{-- <!-------------Exam Detailed Info--------------------------------------------> --}}
            <section class="sample_page_2">
                <div class="container-fluid">
                    <section class="sample_page">
                        <div class="container-fluid">
                            <div class="row">   
                                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 mb-4"> 
                                    <div class="row">
                            
                            <div id="sample_syllabus_page_table_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                                
                                <h3>
                                    VENDOR-TITLE EXAM-CODE Exam Overview :
                                </h3>
                                
<table class="table table-bordered">
    <tbody>
        <tr>
            <td>Exam Name</td>
            <td>EXAM-TITLE</td>
        </tr>
        <tr>
            <td>Exam Code</td>
            <td>EXAM-CODE</td>
        </tr>
        <tr>
            <td>Actual Exam Duration</td>
            <td>150 minutes</td>
        </tr>
        <tr>
            <td>Expected no. of Questions in Actual Exam</td>
            <td>60</td>
        </tr>
        <tr>
            <td>Exam Registration Price</td>
            <td>$165</td>
        </tr>
        <tr>
            <td>Official Information</td>
            <td><a style="color: #429482;" rel="noreferrer" href="https://www.microsoft.com/en-us/learning/exam-az-400.aspx">https://www.microsoft.com/en-us/learning/exam-az-400.aspx</a></td>
        </tr>
        <tr>
            <td>See Expected Questions</td>
            <td><a style="color: #429482;" href="https://www.study4exam.com/microsoft/free-az-400-questions">Microsoft AZ-400</a> Expected Questions in Actual Exam</td>
        </tr>
        <tr>
            <td>Take Self-Assessment</td>
            <td> Use <a style="color: #429482;" href="https://www.study4exam.com/microsoft/info/az-400"> Microsoft AZ-400 Practice Test </a> to Assess your preparation - Save Time and Reduce Chances of Failure</td>
        </tr>
    </tbody>
</table>
                            </div>
                                <div id="sample_syllabus_page_table_2_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                                
                                <h3>
                                    Microsoft AZ-400 Exam Topics :
                                </h3>
                                
                                <table class="table table-bordered">
                                    
                                     <thead>
                                      <tr>
                                        <th style="width:20%;">Section</th>
                                        <th style="width:15%;">Weight</th>
                                        <th>Objectives</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                                          <tr>
                                        <td> 				Develop an Instrumentation Strategy  </td>
                                        <td> 				5-10%  </td>
                                        <td> 				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design and implement logging</strong></span></span> <div> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">assess and Configure a log framework</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a log aggregation and storage strategy (e.g. Azure storage)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a log aggregation and query strategy using Azure Monitor</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">manage access control to logs (workspace-centric/resource-centric)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate crash analytics (App Center Crashes, Crashlytics)</span></span></li> </ul> <div> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design and implement telemetry</strong></span></span> <div> <ul> <li> 									<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design and implement distributed tracing</span></span></li> <li> 									<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">inspect application performance indicators</span></span></li> <li> 									<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">inspect infrastructure performance indicators</span></span></li> <li> 									<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">define and measure key metrics (CPU, memory, disk, network)</span></span></li> <li> 									<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement alerts on key metrics (email, SMS, webhooks, Teams/Slack)</span></span></li> <li> 									<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate user analytics (e.g. Application Insights funnels, Visual Studio App Center, TestFlight, Google Analytics)</span></span></li> </ul> <div> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Integrate logging and monitoring solutions</strong></span></span> <ul> <li> 										<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">configure and integrate container monitoring (Azure Monitor, Prometheus, etc.)</span></span></li> <li> 										<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">configure and integrate with monitoring tools (Azure Monitor Application Insights, Dynatrace, New Relic, Naggios, Zabbix)</span></span></li> <li> 										<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">create feedback loop from platform monitoring tools (e.g. Azure Diagnostics extension, Log Analytics agent, Azure Platform Logs, Event Grid)</span></span></li> <li> 										<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">manage Access control to the monitoring platform</span></span></li> </ul> </div> </div> </div> </div> </td>
                                      </tr>
                                                          <tr>
                                        <td> 				Develop a Site Reliability Engineering (SRE) strategy  </td>
                                        <td> 				5-10%  </td>
                                        <td> 				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Develop an actionable alerting strategy</strong></span></span> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">identify and recommend metrics on which to base alerts</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement alerts using appropriate metrics</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement alerts based on appropriate log messages</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement alerts based on application health checks</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">analyze combinations of metrics</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">develop communication mechanism to notify users of degraded systems</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement alerts for self-healing activities (e.g. scaling, failovers)</span></span></li> </ul> <div> 					<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design a failure prediction strategy</strong></span></span> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">analyze behavior of system with regards to load and failure conditions</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">calculate when a system will fail under various conditions</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">measure baseline metrics for system</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">Leverage Application Insights Smart Detection and Dynamic thresholds in Azure Monitor</span></span></li> </ul> <div> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design and implement a health check</strong></span></span> <ul> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">analyze system dependencies to determine which dependency should be included in health check</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">calculate healthy response timeouts based on SLO for the service</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design approach for partial health situations</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design approach for piecemeal recovery (e.g. to improve recovery time objective strategies)</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate health check with compute environment</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement different types of health checks (container liveness, startup, shutdown)</span></span></li> </ul> </div> </div> </td>
                                      </tr>
                                                          <tr>
                                        <td> 				Develop a security and compliance plan  </td>
                                        <td> 				10-15%  </td>
                                        <td> 				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design an authentication and authorization strategy</strong></span></span> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design an access solution (Azure AD Privileged Identity Management (PIM), Azure AD Conditional Access, MFA, Azure AD B2B, etc.)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement Service Principals and Managed Identity</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">configure service connections</span></span></li> </ul> <div> 					<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design a sensitive information management strategy</strong></span></span></div> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">evaluate and configure vault solution (Azure Key Vault, Hashicorp Vault)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">manage security certificates</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a secrets storage and retrieval strategy (KeyVault secrets, GitHub secrets, Azure Pipelines secrets)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">formulate a plan for deploying secret files as part of a release</span></span></li> </ul> <div> 					<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Develop security and compliance</strong></span></span></div> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">automate dependencies scanning for security (container scanning, OWASP)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">automate dependencies scanning for compliance (licenses: MIT, GPL)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">assess and report risks</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a source code compliance solution (e.g. GitHub Code scanning, GitHub Secret&nbsp;scanning, pipeline-based scans, Git hooks, SonarQube, Dependabot,&nbsp;etc.)</span></span></li> </ul> <p><span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design governance enforcement mechanisms</strong></span></span></p> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement Azure policies to enforce organizational requirements</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement container scanning (e.g. static scanning, malware, crypto mining)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design and implement Azure Container Registry Tasks</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design break-the-glass strategy for responding to security incidents</span></span></li> </ul> </td>
                                      </tr>
                                                          <tr>
                                        <td> 				Manage source control  </td>
                                        <td> 				10-15%  </td>
                                        <td> 				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Develop a modern source control strategy</strong></span></span> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate/migrate disparate source control systems (e.g. GitHub, Azure Repos)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design authentication strategies</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design approach for managing large binary files (e.g. Git LFS)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design approach for cross repository sharing (e.g. Git sub-modules, packages)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement workflow hooks</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design approach for efficient code reviews (e.g. GitHub code review assignments, schedule reminders, Pull Analytics)</span></span></li> </ul> <p>				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Plan and implement branching strategies for the source code</strong></span></span></p> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">define Pull Requests (PR) guidelines to enforce work item correlation</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement branch merging restrictions (e.g. branch policies, branch protections, manual, etc.)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">define branch strategy (e.g. trunk based, feature branch, release branch, GitHub flow)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design and implement a PR workflow (code reviews, approvals)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">enforce static code analysis for code-quality consistency on PR</span></span></li> </ul> <div> 					<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Configure repositories</strong></span></span> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">configure permissions in the source control repository</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">organize the repository with git-tags</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">plan for handling oversized repositories</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">plan for content recovery in all repository states</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">purge data from source control</span></span></li> </ul> <p><span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Integrate source control with tools</strong></span></span></p> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate GitHub with DevOps pipelines</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate GitHub with identity management solutions (Azure AD)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design for GitOps</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design for ChatOps</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate source control artifacts for human consumption (e.g. Git changelog)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate GitHub Codespaces</span></span></li> </ul> </div> </td>
                                      </tr>
                                                          <tr>
                                        <td> 				Facilitate communication and collaboration  </td>
                                        <td> 				10-15%  </td>
                                        <td> 				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Communicate deployment and release information with business stakeholders</strong></span></span> <div> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">create dashboards combining boards, pipelines (custom dashboards on Azure DevOps)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a cost management communication strategy</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate release pipeline with work item tracking (e.g. AZ DevOps, Jira)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate GitHub as repository with Azure Boards</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">communicate user analytics</span></span></li> </ul> <p>					<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Generate DevOps process documentation</strong></span></span></p> <div> <ul> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design onboarding process for new employees</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">assess and document external dependencies (e.g. integrations, packages)</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">assess and document artifacts (version, release notes)</span></span></li> </ul> <p><span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Automate communication with team members</strong></span></span></p> <ul> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate monitoring tools with communication platforms (e.g. Teams, Slack, dashboards)</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">notify stakeholders about key metrics, alerts, severity using communication and project management platforms (e.g. Email, SMS, Slack, Teams, ServiceNow, etc.)</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate build and release with communication platforms (e.g. build fails, release fails)</span></span></li> <li> 								<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate GitHub pull request approvals via mobile apps</span></span></li> </ul> </div> </div> </td>
                                      </tr>
                                                          <tr>
                                        <td> 				Define and implement continuous integration  </td>
                                        <td> 				20-25%  </td>
                                        <td> 				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design build automation</strong></span></span> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate the build pipeline with external tools (e.g., Dependency and security scanning, Code coverage)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement quality gates (e.g. code coverage, internationalization, peer review)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a testing strategy (e.g. integration, load, fuzz, API, chaos)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate multiple tools (e.g. GitHub Actions, Azure Pipeline, Jenkins)</span></span></li> </ul> <p>				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design a package management strategy</strong></span></span></p> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">recommend package management tools (e.g. GitHub Packages, Azure Artifacts, Azure Automation Runbooks Gallery, Nuget, Jfrog, Artifactory)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design an Azure Artifacts implementation including linked feeds</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design versioning strategy for code assets (e.g. SemVer, date based)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">plan for assessing and updating and reporting package dependencies (GitHub Automated Security Updates, NuKeeper, GreenKeeper)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a versioning strategy for packages (e.g. SemVer, date based)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a versioning strategy for deployment artifacts</span></span></li> </ul> <div> 					<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design an application infrastructure management strategy</strong></span></span> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">assess a configuration management mechanism for application infrastructure</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">define and enforce desired state configuration for environments</span></span></li> </ul> </div> <p><span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Implement a build strategy</strong></span></span></p> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design and implement build agent infrastructure (include cost, tool selection, licenses, maintainability)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">develop and implement build trigger rules</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">develop build pipelines</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design build orchestration (products that are composed of multiple builds)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate configuration into build process</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">develop complex build scenarios (e.g. containerized agents, hybrid, GPU)</span></span></li> </ul> <p><span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Maintain build strategy</strong></span></span></p> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">monitor pipeline health (failure rate, duration, flaky tests)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">optimize build (cost, time, performance, reliability)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">analyze CI load to determine build agent configuration and capacity</span></span></li> </ul> <p><span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Design a process for standardizing builds across organization</strong></span></span></p> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">manage self-hosted build agents (VM templates, containerization, etc.)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">create reuseable build subsystems (YAML templates, Task Groups, Variable Groups, etc.)</span></span></li> </ul> </td>
                                      </tr>
                                                          <tr>
                                        <td> 				Define and implement a continuous delivery and release management strategy  </td>
                                        <td> 				10-15%  </td>
                                        <td> 				<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Develop deployment scripts and templates</strong></span></span> <ul> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">recommend a deployment solution (e.g. GitHub Actions, Azure Pipelines, Jenkins, CircleCI, etc.)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design and implement Infrastructure as code (ARM, Terraform, PowerShell, CLI)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">develop application deployment process (container, binary, scripts)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">develop database deployment process (migrations, data movement, ETL)</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">integrate configuration management as part of the release process</span></span></li> <li> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">develop complex deployments (IoT, Azure IoT Edge, mobile, App Center, DR, multi-region, CDN, sovereign cloud, Azure Stack, etc.)</span></span></li> </ul> <div> 					<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Implement an orchestration automation solution</strong></span></span> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">combine release targets depending on release deliverable (e.g., Infrastructure, code,&nbsp;assets, etc.)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design the release pipeline to ensure reliable order of dependency deployments</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">organize shared release configurations and process (YAML templates, variable groups, Azure App Configuration)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design and implement release gates and approval processes</span></span></li> </ul> <div> 						<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>- Plan the deployment environment strategy</strong></span></span></div> <ul> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a release strategy (blue/green, canary, ring)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">implement the release strategy (using deployment slots, load balancer configurations, Azure Traffic Manager, feature toggle, etc.)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">select the appropriate desired state solution for a deployment environment (PowerShell DSC, Chef, Puppet, etc.)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">plan for minimizing downtime during deployments (VIP Swap, Load balancer, rolling deployments, etc.)</span></span></li> <li> 							<span style="font-size:14px;"><span style="font-family:verdana,geneva,sans-serif;">design a hotfix path plan for responding to high priority code fixes</span></span></li> </ul> </div> </td>
                                      </tr>
                                                        </tbody>
                                </table>
                            </div>
                                                    
                            <div id="sample_syllabus_page_inner_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                                
                                <div style="text-align: justify;">
                                    <h3><strong>Updates in the Microsoft AZ-400 Exam Syllabus:</strong></h3> 
                                        <p>Microsoft<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);"> </span>AZ-400<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);">
                                            exam questions and practice test are the best ways to get fully prepared. Study4exam&#39;s trusted preparation material consists of both practice questions and practice test. To pass the actual&nbsp;</span>
                                            Azure DevOps Engineer Expert<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);"> </span>AZ-400&nbsp;<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);">exam on the first attempt, you need to put in hard work on these&nbsp;</span>
                                            Microsoft<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);">&nbsp;</span>AZ-400<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);"> questions&nbsp;that&nbsp;provide updated information about the entire exam syllabus. Besides studying actual questions, you should take the&nbsp;</span>
                                        Microsoft<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);">&nbsp;</span>AZ-400<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);"> practice test&nbsp;for self-assessment and actual exam simulation. Revise actual exam questions and remove your mistakes with the </span>
                                        Designing and Implementing Microsoft DevOps Solutions&nbsp;AZ-400<span style="color: rgb(54, 54, 54); font-family: Roboto; font-size: 15px; text-align: justify; background-color: rgb(252, 252, 252);"> exam practice test. Online and windows-based formats of the </span>
                                        AZ-400 exam practice test are available for self-assessment.</p> <p>&nbsp;
                                        </p>                 
                                </div>
                            </div>
                                
                            <div id="sample_page_note_content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
                                
                                <div class="terms">
                                    <p class="taxonomy">
                                        <a class="vocab-term" href="https://www.study4exam.com/microsoft/microsoft-azure-devops">Microsoft Azure DevOps</a> | <a class="vocab-term" href="https://www.study4exam.com/microsoft/devops">Microsoft DevOps</a> | <a class="vocab-term" href="https://www.study4exam.com/microsoft/microsoft-azure-kubernetes-service">Microsoft Azure Kubernetes Service</a> | <a class="vocab-term" href="https://www.study4exam.com/microsoft/microsoft-azure">Microsoft Azure</a> | <a class="vocab-term" href="https://www.study4exam.com/microsoft/devops-engineer">Microsoft DevOps Engineer</a> |                             <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-exam-topics">AZ-400 Exam Topics</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-questions-answers">AZ-400 Questions Answers</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-test-prep">AZ-400 Test Prep</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/designing-and-implementing-microsoft-devops-solutions-questions-pdf">Designing And Implementing Microsoft DevOps Solutions Questions PDF</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-online-exam">AZ-400 Online Exam</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-practice-test">AZ-400 Practice Test</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-pdf">AZ-400 PDF</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-test-questions">AZ-400 Test Questions</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-study-material">AZ-400 Study Material</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-exam-preparation">AZ-400 Exam Preparation</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-valid-dumps">AZ-400 Valid Dumps</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-real-questions">AZ-400 Real Questions</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/az-400-azure-devops-practice-test">AZ-400 Azure DevOps Practice Test</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/azure-devops-az-400-dumps">Azure DevOps AZ-400 Dumps</a>
                                                                    
                                                                    | <a class="vocab-term" href="https://www.study4exam.com/microsoft/azure-devops-engineer-expert-course-details">Azure DevOps Engineer Expert Course Details</a>
                                                                    
                                                                </p> 
                                    
                                </div>
                            </div> 
                                    </div>
                        
                        </div> 
                        
                        
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4 sample_page_right_bar">
                            
                            <div class="sample_page_right_bar_testimonials">
                                <div class="">
                                <div class="card" style="
                    /* padding-bottom: 2px; */
                    margin-bottom: 6px;
                    border-radius: 5px;
                ">
                                                    <div class="card-header" style="background-color: #22ad95; border-radius: 5px 5px 0px 0px;" >
                                                        <!--<a href=""></a>-->
                                                        <h4 style="font-size: 20px; cursor: auto; text-decoration: none;">AZ-400 Exam Details</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <a style="color: #22ad95;" href="https://www.study4exam.com/microsoft/info/az-400">
                                                            
                                                           
                                                            
                                                            Microsoft AZ-400 Exam Details
                                                        </a>
                
                                                    </div> 
                                                    
                                   </div>
                            </div>
                            </div>
                                        <div class="sample_page_right_bar_testimonials">
                                <div class="">
                                <div class="card" style="
                    /* padding-bottom: 2px; */
                    margin-bottom: 6px;
                    border-radius: 5px;
                ">
                                                    <div class="card-header" style="background-color: #22ad95; border-radius: 5px 5px 0px 0px;" >
                                                        <!--<a href=""></a>-->
                                                        <h4 style="font-size: 20px; cursor: auto; text-decoration: none;" >Free AZ-400 Questions</h4>
                                                    </div>
                                                    <div class="card-body">
                        <a style="color: #22ad95;" href="https://www.study4exam.com/microsoft/free-az-400-questions">Free Microsoft AZ-400 Exam Questions</a>
                                                    </div> 
                                                    
                                   </div>
                            </div>
                            </div>
                                        
                            <!--<div class="sample_page_right_bar_testimonials">-->
                            <!--    <h3>-->
                            <!--        <a href="#">Related Exams</a>-->
                            <!--    </h3>-->
                            <!--</div>-->
                            
                            
                            <!--<div class="sample_page_right_bar_blog">-->
                            <!--    <div class="sample_page_right_bar_blog_heading">-->
                            <!--        <h3>-->
                            <!--            HOT EXAMS-->
                            <!--        </h3>-->
                            <!--    </div>-->
                                
                            <!--    <div class="sample_page_right_bar_blog_links">-->
                            <!--        <ul>-->
                            <!--            <li><a href="https://www.study4exam.com/cisco/350-401-encor" class="btun margin-right"><span>350-401 </span></a></li><li><a href="https://www.study4exam.com/microsoft/dp-100" class="btun margin-right"><span>DP-100 </span></a></li><li><a href="https://www.study4exam.com/avaya/37820x" class="btun margin-right"><span>37820X </span></a></li><li><a href="https://www.study4exam.com/oracle/1z0-343" class="btun margin-right"><span>1Z0-343 </span></a></li><li><a href="https://www.study4exam.com/cisco/300-610-dcid" class="btun margin-right"><span>300-610 </span></a></li><li><a href="https://www.study4exam.com/cisco/350-801-clcor" class="btun margin-right"><span>350-801 </span></a></li><li><a href="https://www.study4exam.com/oracle/1z0-1072-20" class="btun margin-right"><span>1Z0-1072-20 </span></a></li><li><a href="https://www.study4exam.com/adobe/ad0-e201" class="btun margin-right"><span>AD0-E201 </span></a></li><li><a href="https://www.study4exam.com/cisco/010-151-dctech" class="btun margin-right"><span>010-151 </span></a></li><li><a href="https://www.study4exam.com/uipath/uipath-ardv1" class="btun margin-right"><span>UiPath-ARDv1 </span></a></li><li><a href="https://www.study4exam.com/huawei/h13-621-hcip-storage-ccsn" class="btun margin-right"><span>H13-621 </span></a></li><li><a href="https://www.study4exam.com/huawei/h12-425" class="btun margin-right"><span>H12-425 </span></a></li>-->
                            <!--        </ul>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            
                        </div>
                        
                              
                                       
                          </div>
                          
                      </div>
                      
                      
                     
                      
                     
                      
                      
                  </section>
                    <!-- end 5 -->
                    
                <div class="popup" id="popup1">
                        <div class="remove"><img src="https://www.study4exam.com/assets/site/image/demo.png" alt=""></div>
                        <div class="col-lg-12">
                            <div class="salogan pdfpopDemo" style="display: none">
                                <span class="q-a">Questions and Answers Demo</span>
                            </div>
                            <div class="salogan PTpopDemo" style="display: none">
                                <span class="q-a">Desktop Practice Exam Demo</span>
                            </div>
                            <div class="salogan onlinepopDemo" style="display: none">
                                <span class="q-a">Web-Based Practice Exam Demo</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span class="q-a">Our Features</span>
                            <div class="pakage border-right">
                                <ul class="tick-list"> <li>50000+ Customers feedbacks involved in Products</li> <li>Customize your exam based on your objectives</li> <li>User-Friendly interface</li> <li>Exam&nbsp;History and Progress reports</li> <li>Self-Assessment Features</li> <li>Various Learning Modes</li> </ul>             </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="pdfpopDemo" style="display: none">
                                <form id="demos_form" name="demos_form" action="https://www.study4exam.com/demos/downloads/" method="post">  
                                    <div class="pakage" style="margin-top:21px">
                                        <input type="hidden" class="search-textbx" name="demo_vendor_id" value="4">
                                        <input type="hidden" class="search-textbx" name="demo_exam_id" value="AZ-400">
                                        <input type="hidden" name="demo_product_type" value="1"  />
                                        <input type="hidden" name="page_title" value="AZ-400 Page"  />
                                        <input style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" type="text" class="search-textbx" name="demo_username" placeholder="Enter Your Name">
                                        <input required="required" style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" name="demo_email" type="text" class="search-textbx" placeholder="Enter Your Email id">
                                        <button style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" type="submit" class="btn" id="btn-demo3">DOWNLOAD DEMO</button>
                                    </div>
                                </form>
                            </div>
                            <div class="PTpopDemo" style="display: none">
                                <form id="demos_form" name="demos_form" action="https://www.study4exam.com/demos/downloads/" method="post">  
                                    <div class="pakage" style="margin-top:21px">
                                        <input type="hidden" class="search-textbx" name="demo_vendor_id" value="4">
                                        <input type="hidden" class="search-textbx" name="demo_exam_id" value="AZ-400">
                                        <input type="hidden" name="demo_product_type" value="2"  />
                                        <input type="hidden" name="page_title" value="AZ-400 Page"  />
                                        <input style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" type="text" class="search-textbx" name="demo_username" placeholder="Enter Your Name">
                                        <input required="required" style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" name="demo_email" type="text" class="search-textbx" placeholder="Enter Your Email id">
                                        <button style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" type="submit" class="btn" id="btn-demo4">DOWNLOAD DEMO</button>
                                    </div>
                                </form>
                            </div>
                            <div class="onlinepopDemo" style="display: none">
                                <form name="demos_form" id="onlinedemosubmit"  action="https://www.study4exam.com/opt_demo/online.php" method="post" target="_blank">  
                                <div class="pakage" style="margin-top:21px">
                                    <input type="hidden" class="search-textbx" name="demo_vendor_id" value="4">
                                    <input type="hidden" class="search-textbx" name="demo_exam_id" value="AZ-400">
                                    <input type="hidden" name="demo_product_type" value="3"  />
                                    <input type="hidden" name="page_title" value="AZ-400 Page"  />
                                    <input type="hidden" name="exam_code" value="AZ-400">
                                    <input type="hidden" name="demo" value="1">
                                    <input type="hidden" name="site" value="Study4Exam">
                                    <input type="hidden" name="siteurl" value="https://www.study4exam.com/">
                                    <input style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" type="text" class="search-textbx" name="demo_username" placeholder="Enter Your Name">
                                    <input required="required" style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;" name="demo_email" type="text" class="search-textbx" placeholder="Enter Your Email id">
                                    <button id="btn-demo5" style="height: 45px; width:100%; margin-bottom:5px; padding-left: 10px;"  class="btn btn-warning btnclickeddemo">START DEMO</button>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>    
                    
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.pdffile').click(function() {
                            if($('#pdf_exam').is(':checked')) { 
                                $(".pdf_form").show();
                                $(".soft_form").hide();
                                $(".bundle_form").hide();
                                $(".pdfdemo").show();
                                $(".softdemo").hide();
                                $(".ptImg").hide();
                                $(".pdfImg").show();
                                $(".bundlImg").hide();
                            } 
                            else if($('#soft_exam').is(':checked')) { 
                                $(".soft_form").show();
                                $(".pdf_form").hide();
                                $(".bundle_form").hide();
                                $(".pdfdemo").hide();
                                $(".softdemo").show();
                                $(".ptImg").show();
                                $(".pdfImg").hide();
                                $(".bundlImg").hide();
                            } 
                            else {
                                $(".bundle_form").show();
                                $(".soft_form").hide();
                                $(".pdf_form").hide();
                                $(".pdfdemo").show();
                                $(".softdemo").show();
                                $(".ptImg").hide();
                                $(".pdfImg").hide();
                                $(".bundlImg").show();
                            }
                        }); 
                        
                   });
                </script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $(".pop_pdfDemo").click(function(){
                            $(".pdfpopDemo").show();
                            $(".PTpopDemo").hide();
                        });
                        $(".pop_softDemo").click(function(){
                            $(".pdfpopDemo").hide();
                            $(".PTpopDemo").show();
                        });
                   });
                </script>
                
                <script>
                    
                    $(document).ready(function(){
                           
                        $(".pop_pdfDemo").click(function(){
                            $(".pdfpopDemo").show();
                            $(".PTpopDemo").hide();
                            $(".onlinepopDemo").hide();
                            $("#popup1").show();
                            $(".remove").show();
                            $(".popup-bg").show();
                        });
                        $(".pop_softDemo").click(function(){
                            $(".pdfpopDemo").hide();
                            $(".onlinepopDemo").hide();
                            $(".PTpopDemo").show();
                            $("#popup1").show();
                            $(".remove").show();
                            $(".popup-bg").show();
                        });
                        $(".pop_onloneDemo").click(function(){
                            $(".pdfpopDemo").hide();
                            $(".onlinepopDemo").show();
                            $(".PTpopDemo").hide();
                            $("#popup1").show();
                            $(".remove").show();
                            $(".popup-bg").show();
                        });
                        
                        $(".remove").click(function(){
                            $(".popup-bg").hide();
                            $("#popup1").hide();
                            $("#popup2").hide();
                            $("#popup3").hide();
                            $("#popup5").hide();
                            $(".popup").hide();
                            
                        })
                   });
                </script>
                <script>
                function changeprices(){
                    var qty =   $("#cart_qty_online").val();
                    var qtys =   $("#cart_qty_online").val();
                    var sub =   $("#subscriptions").val();   
                    var prices = $("#ipprice").val();
                    console.log(prices);
                    var result;
                    var baseprice = 98;
                    var subscription_price_3_inc=$('#subscription_price_3_incs').val();
                    var subscription_price_6_inc=$('#subscription_price_6_incs').val();
                    var subscription_price_12_inc=$('#subscription_price_12_incs').val();
                    qty = qty - 3;
                    result = qty * prices ;
                    // console.log(result);
                    result = baseprice + result;
                    // console.log(result);
                    result = result + parseInt($('#subscription_price_'+sub+'_inc').val());
                    // console.log(result);
                    $("#cartqry").val(qtys);
                    $("#cartsub").val(sub);
                    $("#lbl_prices").html("");
                    $("#lbl_prices").html(result);
                }
                </script>
                <script>
                        $(".btnclickeddemo").click(function(){
                            //alert("i am clicked");
                           demo_vendor_id = $("#demo_vendor_id").val(); 
                           demo_exam_id = $("#demo_exam_id").val(); 
                           demo_product_type = $("#demo_product_type").val(); 
                           page_title = $("#page_title").val(); 
                           demo_username = $("#demo_username").val(); 
                           demo_email = $("#demo_emails").val(); 
                           g_recaptcha_response = $("#captcha").val(); 
                        //   alert(BASE_URL);
                            
                                $.post(BASE_URL + 'demos/downloads/',{
                                  demo_vendor_id:demo_vendor_id,
                                  demo_exam_id: demo_exam_id,
                                  demo_product_type:demo_product_type,
                                  page_title: page_title, //parameters
                                  demo_username: demo_username, //parameters
                                  demo_email: demo_email, //parameters
                                  g_recaptcha_response: g_recaptcha_response, //parameters
                                }, function(resp){
                                  resp = $.parseJSON(resp); //data decoded
                                    //   alert(resp.msgText);
                                  if(resp.msgStatus == "Success"){
                                    //   alert(resp.msgText); 
                                    //   return;
                                    // alert(resp.msgText); 
                                    $("#pop_onlineDemo").hide();
                                    $("#onlinedemosubmit").submit();
                                  }else{
                                    alert("something went wrong");
                                  }
                                })
                             
                        });
                </script>
                        </div>
                    </main>
                    <footer class="footer" style="">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-8 col-sm-12 col-md-12">
                          <div class="single-footer-widget">
                            <!--<strong>ABOUT US</strong>-->
                            <!--<br>-->
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-md-4">
                                    <ul class="list">
                                      <li><a href="https://www.study4exam.com/">Home</a></li>
                                      <li><a href="https://www.study4exam.com/about-us">About us</a></li>
                                      <li><a href="https://www.study4exam.com/mega-packs">Mega Packs</a></li>
                                     <li><a href="https://www.study4exam.com/vendors">Discount Deals</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-md-4 footer_left_border">
                                    <ul class="list">
                                     <li><a href="https://www.study4exam.com/terms-and-conditions">Terms And Conditions</a></li>
                                     <li><a href="https://www.study4exam.com/guarantee">Guarantee</a></li>
                                     <li><a href="https://www.study4exam.com/disclaimer">Disclaimer</a></li>
                                     <li><a rel="noopener" target="_blank" href="https://www.couponchief.com/study4exam">Get Latest Promotions</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-md-4 footer_left_border">
                                    <ul class="footer-contact-info">
                                      <li><a href="https://www.study4exam.com/faqs">FAQ's</a></li>
                                      <li><a href="https://www.study4exam.com/contact">Contact Us</a></li>
                                      <li style="color: #fff;"> <span style="color: #fff; font-size: 11px;padding-right: 10px;"><i style="font-size: 18px;" class="fa fa-envelope" aria-hidden="true"></i> </span> <a
                                          style="color: #fff;     opacity: 1;font-weight: 800;" href="mailto:sales@study4exam.com">sales@study4exam.com</a></li>
                                      <li style="color: #fff;"><span style="color: #fff; font-size: 11px;padding-right: 10px;"><i style="font-size: 18px;" class="fa fa-envelope" aria-hidden="true"></i> </span> <a
                                          style="color: #fff;     opacity: 1;font-weight: 800;" href="mailto:support@study4exam.com">support@study4exam.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                
                        <div class="col-lg-4 col-sm-12 col-md-12 footer_left_border">
                          <div class="single-footer-widget single-footer-widget-payment">
                            <div class="logo" style="margin-top: 0px;">
                              <!--<strong>PAYMENT METHODS</strong>-->
                              <p style="margin-top: 0px; color: rgba(255,255,255,1);opacity: 0.8;font-size: 14px;font-weight: 500;">Study4exam uses SSL 256-bit encryption to ensure safe shopping and secure transaction.</p>
                            </div>
                             <img width="299" height="89" src="https://www.study4exam.com/assets/site/img/new_patment_method.webp" alt="image">
                
                
                
                          </div>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <!-- End Footer Area -->
                  <div class="go-top"><i class="fas fa-arrow-up"></i></div></div>
                <!-- analytics -->
                
                    
                
                <link media="all" rel="stylesheet" type="text/css" href="https://www.study4exam.com/assets/site/css/main.css" />
                        <link rel="stylesheet" href="https://www.study4exam.com/assets/site/css/responsive.css">
                        
                <!--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>-->
                <link rel="stylesheet" href="https://www.study4exam.com/assets/site/css/magnific-popup.min.css">
                
                
                  <!--<script type="text/javascript" src="https://www.study4exam.com/assets/site/js/jquery.main.js"></script>-->
                  
                  <link rel="stylesheet" href="https://www.study4exam.com/assets/site/css/forum.css">
                
                  
                <script type="text/javascript" src="https://www.study4exam.com/assets/site/js/bootstrap-new.min.js"></script>
                <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
                
                  <script src="https://www.study4exam.com/assets/site/js/jquery.magnific-popup.min.js"></script>
                  <script src="https://www.study4exam.com/assets/admin/js/jquery.magnific-popup.js"></script>
                  <link rel="stylesheet" href="https://www.study4exam.com/assets/site/css/font-awesome-new.css">
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap">
                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg==" crossorigin="anonymous" />
                
                <script>
                function updateBundlePriceExam(){var e=$("#subscription").val(),r=$("#subscription_plan").val(),a=$("#price").val();$("#checkout_price").val(),$("#subscription_price_3_inc").val(),$("#subscription_price_6_inc").val(),$("#subscription_price_12_inc").val(),$("#individual_pcs").val(),$("#individual_price_inc").val(),$("#corporate_pcs").val(),$("#corporate_price_inc").val(),$("#trainer_pcs").val(),$("#trainer_price_inc").val();a=parseInt(a)+parseInt($("#subscription_price_"+e+"_inc").val()),a=parseInt(a)+parseInt($("#"+r+"_price_inc").val()),$("#checkout_price").val(a),$("#lbl_price").html(a);var t=30*e;$("#free_update").html(t+" days"),$("#plan_type").html($("#"+r+"_pcs").val()+" PC's")}    
                </script>
                
                
                <!-- Report Comment Modal -->
                    <div class="modal fade" id="report-comment-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-sm modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Report Comment</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                        Is the comment made by <span class="comment-report-modal-username font-italic">USERNAME</span> spam or abusive?
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" id="modal-btn-yes">Yes</button>
                                    <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End report comment modal -->
                    <!-- Login Required Comment Modal -->
                    <div class="modal" id="login-required-comment-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-sm modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Commenting</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    In order to participate in the comments you need to be logged-in. <br />
                                    You can <a href="https://www.study4exam.com/register">sign-up</a> or
                                    <a href="https://www.study4exam.com/login">login</a>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="modal-btn-no-2" data-dismiss="modal">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Login Required comment modal -->
                    <div id="edit-comment-template" class="d-none">
                        <textarea class="comment-edit" style="width:100%"></textarea>
                        <br />
                        <div class="original-comment d-none"></div>
                        <a href="#" class="btn-primary btn btn-sm comment-edit-save mr-2">Save</a>
                        <a href="#" class="btn-warning btn btn-sm comment-edit-cancel">Cancel</a>
                    </div>
                </div>
            </section>
            {{-- END <!-------------Exam Detailed Info--------------------------------------------> --}}
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    @endsection
