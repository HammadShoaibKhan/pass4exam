@extends('layouts.frontend.master')
@section('content')

<div class="popup-bg" style="display: none;"></div>
<div id="wrapper">



<input type="hidden" class="is-logged-in" value="0">
		 <main id="main" role="main">
                 <div class="container-fluid p-0 content">
        						<section id="BreadCrumb">
	<div class="bred">
		<div class="container">
			<div id="navbar">
				<ol class="BreadCrumbList"><li><a href="index.html">Home </a><i class="fa fa-chevron-right "></i></li><li class="active">Register</li></ol>			</div>
			<div class="right-bar breadcumbBar">
				<p>&nbsp; </p>
			</div>
		</div>
    </div>
</section>
<style>
    .loginFirst #form-message .alert-danger{
        background: #ffd200!important;
        display: inline-block;
        padding-top: 5px;
        padding-bottom: 5px;
        margin-bottom: 11px;
        width: 100%;
    }
    .login-register-form .form-block {
        padding: 26px 30px 42px;
        margin: 0 0px 26px 10px;
        -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.4);
        -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.4);
        box-shadow: 0 0 9px 0 rgba(0,0,0,.4);
    }
    .login-register-form .register-form {
        padding: 0px 6.5% 0 0;
    }
    .login-register-form .register-form span {
            float: left;
    width: 78%;
    margin-top: 16px;
    padding-left: 10px;
    font-family: 'Roboto';
    color: #363636;

    }
    .login-register-form .register-form .btn {
        margin: 12px 0 0;
        width: 100px;
        padding: 15px;
        float: left;
    }
    .input-holder.mainloginpageholder {
        width: 100% !important;
    }

    .input-holder.mainloginpageholder h4 {
        font-size: 18px;
    }


    .input-holder.mainloginpageholder p a b {
        float: none;
    }

    .input-holder.mainloginpageholder p a i {
        font-size: 17px;
    }
    .login-register-form{
        overflow:none;
    }
    .input-holder.mainloginpageholder p {
        margin-bottom: 9px;
    color: #363636;
    font-family: 'Roboto';
    font-weight: 400;



    }
</style>
			<div class="login-register-form">
				<h1>LOGIN / REGISTER</h1>
				<div class="col">
                    @if(session('error'))
                        <div id="form-messages"><span class="alert alert-danger">{{ session('error') }}</span></div>
                    @endif
                    <form method="post" class="login-form" action="{{ route('user.login') }}">
                        {{ csrf_field() }}
						<div class="form-block">

							<strong class="login-heading">LOGIN</strong>
							<div class="row">
    							<div class="loginFirst">
                                   <div class="input-holder" style="width: 100%;" >
    									<label>Email Address</label>
    									<input type="email" required="required" value="" name="email" id="loginEmail">
    								</div>

                                    <div class="input-holder" style="width: 100%; float: left">
    									<button class="btn SingBtn" id="loginFirstBtn" data-route="{{route('user.email.verify')}}" type="button">Next</button>
    								</div>
                                </div>
                                <div class="loginSecond" style="display:none;">
                                    <div class="input-holder" style="width: 100%;" >
    									<label>Password</label>
    									<input type="password" required="required" value="" name="password" id="loginPassword">
    								</div>

                                    <div class="input-holder" style="width: 100%; float: left">
            							<button class="btn SingBtn"  style="float: left; margin-right: 15px;" type="submit">Login</button>
    									<button class="btn SingBtn" type="button" onclick="return loginBackStep();" style="margin-left: 15px;">Back</button>
    								</div>
                                </div>
                            </div>
							<div class="row radio-row">
								<div class="input-holder mainloginpageholder">
                                    <h4>Forgot Your Password? <a rel="nofollow" href="login/forgot_password.html">Visit Forgot Password Page</a></h4>
                                        <p>If you encounter any problems with accessing your account or signing in, please contact customer support : <a href="contact.html" target="_blank"><b>Contact now</b>&nbsp;<i class="fa fa-envelope"></i></a> <br/>

            							</p>
								</div>
							</div>

						</div>
					</form>
				</div>
				<div class="col">
                    <form method="post" name="userRegisterForm" class="register-form" id="userRegisterForm" action="{{ route('register') }}">
                        {{ csrf_field() }}
					    <div class="form-block">
    						<strong class="title">register account now</strong>
    						<div class="input-holder form-group">
    							<label>Email Address</label>
    							<input type="email" class="full-name-txtbx rmail" required="required" value="" name="email" id="email">
    						</div>
    						<div class="input-holder form-group">
    							<label>Full Name</label>
    							<input type="text" required="required" value="" name="name" id="name">
    						</div>
    						<div class="input-holder form-group">
    							<button class="btn" type="submit">register</button><span>You will get instructions to set your password in your email. Kindly check your SPAM/Junk folder also.</span>
    						</div>
    					</div>
					</form>
				</div>
			</div>

		</div>
	</main>

    <script>

        $(document).on('click', '#loginFirstBtn', function (e) {
            e.preventDefault();
            var url = $(this).attr('data-route');
            var loginEmail = $('#loginEmail').val();
            if (loginEmail) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        email: loginEmail
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $('#loginFirstBtn').before(function() {
                            // return getLoadingImg();
                        });
                    },
                    success: function(response) {
                        console.log(response);

                        if (response == 'exists-active') {
                            $('.loginFirst').hide();
                            $('.loginSecond').show();
                        } else if (response == 'exists-disabled') {
                            $('#form-message').remove();
                            var msgHTML = '<div id="form-message"><span class="alert alert-danger">Your account is disabled.</span></div>';
                            $('.loginFirst').prepend(msgHTML);
                        } else {
                            $('#form-message').remove();
                            var msgHTML = '<div id="form-message"><span class="alert alert-danger">You have not registered with us, Please get register with us before Login!</span></div>';
                            $('.loginFirst').prepend(msgHTML);
                        }
                    },
                    error: function() {
                        console.log('something went wrong please try again');
                    }
                })
            }
        });

        function loginBackStep(){

            $('.loginSecond').hide();
            $('.loginFirst').show();
        }

        $(document).on('click', '#loginEmail', function(){
            $(".alert-danger, #form-messages").hide();
        })


    </script>






@endsection
