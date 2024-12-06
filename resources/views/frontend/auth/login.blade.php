@extends('frontend.layout.master')
@section('content')
    <!-- HEADING-BANNER START -->
    <div class="heading-banner-area overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-banner">
                        <div class="heading-banner-title">
                            <h2>Registration</h2>
                        </div>
                        <div class="breadcumbs pb-15">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADING-BANNER END -->
    <!-- CHECKOUT-AREA START -->
    <div class="login-area  pt-80 pb-80">
        <div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="customer-login text-left">
						<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
						<p class="text-gray">If you have an account with us, Please login!</p>
						<form id="login">
							@csrf
							<input type="text" placeholder="Email here..." name="email">
							<input type="password" placeholder="Password" name="password">
							<p><a href="#" class="text-gray">Forget your password?</a></p>
							<button type="submit" data-text="login" class="button-one submit-button mt-15"
								onclick="addFormData(event,'post','{{ url('login') }}','{{ url('/') }}','login')">login</button>
						</form>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="customer-login text-left">
						<h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
						<p class="text-gray">If you have an account with us, Please login!</p>
						<form id='register'>
							@csrf
							<input type="text" placeholder="Your name here..." name="name">
							<input type="text" placeholder="Email address here..." name="email">
							<input type="password" placeholder="Password" name="password">
							<input type="password" placeholder="Confirm password" name="password_confirmation">

						<p class="mb-0">
							<input type="checkbox" id="newsletter" name="newsletter" checked="">
							<label for="newsletter"><span>Sign up for our newsletter!</span></label>
						</p>
						<button type="submit" data-text="register" class="button-one submit-button mt-15"
							onclick="addFormData(event,'post','{{ url('register') }}','{{ url('/') }}','register')"
							>register</button>
						</form>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- CHECKOUT-AREA END -->
@endsection
