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
                    <a href="{{ route('user.dashboard') }}" class="active" style="border-bottom: 1px solid rgba(112,112,112,.2);
    border-top: 1px solid rgba(112,112,112,.2);"><i class="fa fa-home"></i> &nbsp;&nbsp;&nbsp;Dashboard</a>
                </li>
            </ul>
            <h6>My Products</h6><br><br>
            <ul>
                <li>
                    <a href="{{ route('user.exam.pdf') }}"><i class="fa fa-file-pdf"></i> &nbsp;&nbsp;&nbsp;PDF
                        <label style="background: #d2691e">0</label>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="javascript:;"><i class="fa fa-desktop"></i> &nbsp;&nbsp;&nbsp;Desktop Practice Test--}}
{{--                        <label style="background: #062f4f">0</label>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li>
                    <a href="{{ route('user.exam.web-based') }}"><i class="fa fa-globe-africa"></i> &nbsp;&nbsp;&nbsp;Web-Based Practice Test
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
                    <a href="{{ route('user.profile') }}"><i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp;Edit your profile</a>
                </li>
                <li>
                    <a href="javascript:;"><i class="fa fa-lock"></i> &nbsp;&nbsp;&nbsp;Change Password</a>
                </li>
            </ul>

            <a type="button" class="btn btn-lg btn-primary sign_out" onclick="$('#logout_form').submit()">Sign Out</a>
        </div>
    </div>

</div>
