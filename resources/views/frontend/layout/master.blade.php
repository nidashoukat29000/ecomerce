<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2024 19:10:39 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home two || Hurst</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@include('frontend.layout.partials.style')
	
	</head>
	<body>	
		<!-- WRAPPER START -->
		<div class="wrapper bg-dark-white">

			<!-- HEADER-AREA START -->
		    @include('frontend.layout.header')
			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->
              @include('frontend.layout.mobilemenu') 
			
			<!-- Mobile-menu end -->
			<!-- SLIDER-AREA START  -->
			@includeWhen(request()->is('/'), 'frontend.layout.slider')
			<!-- SLIDER-AREA END -->
			 @yield('content')
			<!-- FOOTER START -->
		    @include('frontend.layout.footer')
			<!-- FOOTER END -->
			<!-- QUICKVIEW PRODUCT -->
			@include('frontend.layout.quickview')
			<!-- END QUICKVIEW PRODUCT -->	
			
		</div>
		<!-- WRAPPER END -->

		<!-- all js here -->
		@include('frontend.layout.partials.script')
	</body>

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2024 19:10:43 GMT -->
</html>
