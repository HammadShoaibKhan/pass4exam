
    <div class="popup-bg" style="display: none;"></div>
    <div id="wrapper">

        <style>
            .topDiscountBar {
                width: 100%;
                /*background: #041963;*/
                background-color: #22ad95;
                padding: 10px;
                text-align: center;
                color: #fff;
                font: 400 18px/22px 'Open Sans', sans-serif;
                position:relative;
                z-index:99999999;
            }
            .topDiscountBar div {
                margin-bottom: 0px;
                margin-top: 0px;
                font-size: inherit;
                line-height: 30px;
            }

            #coupontimeRem {
                font-weight: bold;
                margin: 0px 5px;
            }

            #couponCodeBx {
                /*background: #0785cb;*/
                /*color: #041963;*/
                background: #404040;
                color: #ffffff;
                padding: 5px 10px;
            }

            .closeBtn {
                float: right;
                font-size: 22px;
                cursor: pointer;
                position: absolute;
                right: 100px;
                top: 10px;
            }

            @media only screen and (max-width: 1050px) {
                .closeBtn {
                    float: none !important;
                    font-size: 22px;
                    cursor: pointer;
                    position: relative !important;
                    right: 0px;
                    top: 5px;
                }
            }

            section.bg.clearfix {
                /*margin-top: 122px;*/
            }

        </style>


        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
            {{-- <a class="navbar-brand" href="/">
                <img class="cartLogo" src="" alt=""></a> --}}
            <a class="navbar-brand" href="/" style="background: #ccc; width: 145px; height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" style="margin:auto;">
                    <form style=" padding-right: 20px;" method="post" action="{{ route('exam.search') }}">
                        {{ csrf_field() }}
                        <div class="boxContainer">
                            <table class="elementsContainer">
                                <tr>
                                    <td>
                                        <input type="search" required="required" name="search_exam" value="" placeholder="Search Here..." class=search>
                                    </td>
                                    <td style=" text-align: right;">
                                        <button aria-label="Search" style="border: 0px; background-color: transparent;
                                            color: #22ad95;" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <!--<a><i class="fa fa-search"></i></a>-->
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>

                    @forelse (navbarVendors() as $vendor)
                    <div class="nav-item dropdown">
                        <a href="{{ route('vendor', $vendor->slug) }}" class="nav-link hvr-underline-from-center">{{ $vendor->title ?? '' }}</a>
                    </div>
                @empty

                @endforelse

                    <div class="nav-item dropdown">
                        <a href="{{ route('discount_deals') }}" class="nav-link hvr-underline-from-center" data-toggle="">Discount Deals <img id="DiscountDeals_img" style="
                            position: relative;
                            width: 30px;
                            right: 4px;
                            top: -10px;"
                            src="{{asset('frontend/assets/site/image/newGIF.gif')}}" >
                        </a>
                    </div>
                </div>
                <div class="navbar-nav">
                    <a style="position: relative;bottom: -8px;" id="navbar_cart" href="{{route('cart_view')}}">
                        <span class="badge" style="
                            right: 25px;
                            position: absolute;
                            top: -13px;
                            border-radius: 50%;
                            color: #fff;
                            background-color: #22ad95;
                            font-size: 16px;">

                            {{getCartTotalCount()}}
                        </span>
                        <img src="{{asset('frontend/assets/site/img/cart.png')}}" alt="">
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    @if (auth()->check())
                        <a id="nav_login_btn" class="btn" style="border-radius: 0px; padding: 12px 5px;font-size: 12px;    margin-top: 2px;" href="{{route('user.dashboard')}}">
                            <i style="font-size: 16px;" class="fa fa-user"></i> My Dashboard
                        </a>
                        <a id="nav_login_btn" class="btn" style="margin-left: 2px; border-radius: 0px; padding: 12px 5px;font-size: 12px;margin-top: 2px;" rel="nofollow" href="javascript:;" onclick="$('#logout').submit()">
                            <i style="font-size: 16px;" class="fa fa-user"></i> Sign Out
                        </a>
                        <form action="{{route('logout')}}" method="post" id="logout">{{csrf_field()}}</form>
                    @else
                        <a id="nav_login_btn" rel="nofollow" href="{{ route('login') }}" class="btn"style="border-radius: 0px;">
                            <i class="fa fa-user"></i> LOGIN / REGISTER
                        </a>
                    @endif
                </div>
            </div>
        </nav>
        <input type="hidden" class="is-logged-in" value="0">
	    	 <!--------------------------------------------------------- banner --------------------------------------------------------->

<style>
    .home_banner_top{
        /* background-image: url( '{{asset("frontend/assets/site/img/homebanner.webp")}}');   */
        background: #ccc;

    }
    @media(max-width: 425px){
    .home_banner_top{
        background-image: none;
        background-color: #429482;
    }

    /*#home_banner_top{*/

    /*    display: none;*/
    /*}*/
    }
</style>
