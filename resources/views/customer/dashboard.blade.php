@include('layouts.frontend.includes.head_files')

<!--Navbar Start -->
<div class="container-fluid no-padding member" style="background: #22ad95;">
    <div class="container">
        <nav class="navbar navbar-expand-md cstm-bg-blue">
            <a class="navbar-brand" href="#" style="color: #fff">MEMBER AREA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="fa fa-bars" style=" color: #fff"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item r1">
                        <a class="nav-link" href="#"><i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item r2 dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Hammad Khan</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:;">Profile</a>
                            <a class="dropdown-item" onclick="$('#logout_form').submit()" href="javascript:;">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item r3">
                        <a class="nav-link" href="#">
                            <div class="picture" style="top: 0px; left: -40px;width: 35px;
    height: 35px;
    padding: 10px 0 0;
    color: #000;
    font-weight: 700;
    font-size: 15px;">
                                <span>HD</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

    <!--Main Body-->
<div class="container-fluid no-padding" style="background: #fff !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-right: 0 !important;">
                <div class="lt-sidebar">
                    <div class="sdr-profile">
                        <div class="picture">
                            <span>HD</span>
                        </div>
                        <div class="info">
                            <div class="name">{{ Auth()->user()->name ?? '' }}</div>
                            <div class="email">{{ Auth()->user()->email ?? '' }}</div>
                        </div>
                    </div>
                    <div class="navbar">
                        <ul>
                            <li>
                                <a href="javascript:;" class="active" style="border-bottom: 1px solid rgba(112,112,112,.2);
    border-top: 1px solid rgba(112,112,112,.2);"><i class="fa fa-home"></i> &nbsp;&nbsp;&nbsp;Dashboard</a>
                            </li>
                        </ul>
                        <h6>My Products</h6><br><br>
                        <ul>
                            <li>
                                <a href="javascript:;"><i class="fa fa-file-pdf"></i> &nbsp;&nbsp;&nbsp;PDF
                                <label style="background: #d2691e">0</label>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="fa fa-desktop"></i> &nbsp;&nbsp;&nbsp;Desktop Practice Test
                                <label style="background: #062f4f">0</label>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="fa fa-globe-africa"></i> &nbsp;&nbsp;&nbsp;Web-Based Practice Test
                                <label style="background: #8abe28">0</label>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="fa fa-box"></i> &nbsp;&nbsp;&nbsp;Bundle Packs
                                <label style="background: #febd69">0</label>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="fa fa-history"></i> &nbsp;&nbsp;&nbsp;Order History
                                </a>
                            </li>

                            <hr>
                        </ul>
                        <h6>Customer Profile</h6><br><br>
                        <ul>
                            <li>
                                <a href="javascript:;"><i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp;Edit your profile</a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="fa fa-lock"></i> &nbsp;&nbsp;&nbsp;Change Password</a>
                            </li>
                        </ul>

                        <a type="button" class="btn btn-lg btn-primary sign_out">Sign Out</a>
                    </div>
                </div>

            </div>
            <div class="col-md-9" style="padding-left: 0 !important;" >
                <div class="rt-box">
                    <div class="col-md-4">
                        <div class="general-box">
                            <span class="badge badge-secondary mehron"></span>
                            <img src="{{asset('frontend/assets/site/image/order-history.png')}}">
                            <div class="heading">Order History</div>
                            <a href="javascript:;">SEE ALL</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="general-box">
                            <span class="badge badge-secondary mehron"></span>
                            <img src="{{asset('frontend/assets/site/image/reorder_item.png')}}">
                            <div class="heading">Re-Order</div>
                            <a href="javascript:;">SEE ALL</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="general-box">
                            <span class="badge badge-secondary mehron"></span>
                            <img src="{{asset('frontend/assets/site/image/profile_iconf.png')}}">
                            <div class="heading">Customer Profile</div>
                            <a href="javascript:;">UPDATE</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="general-box">
                            <span class="badge badge-secondary mehron"></span>
                            <img src="{{asset('frontend/assets/site/image/change_password_p.png')}}">
                            <div class="heading">Change Password</div>
                            <a href="javascript:;">UPDATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<form id="logout_form" method="POST" action="{{ route('logout') }}">
    {{ csrf_field() }}
</form>



<!--Navbar End-->
@include('layouts.frontend.includes.footer_files')
