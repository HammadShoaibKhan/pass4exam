@include('layouts.frontend.includes.head_files')

<!--Navbar Start -->
@include('customer.partials.navbar')

    <!--Main Body-->
<div class="container-fluid no-padding" style="background: #fff !important;">
    <div class="container">
        <div class="row">
            @include('customer.partials.sidebar')
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


<!--Navbar End-->
@include('layouts.frontend.includes.footer_files')
