<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="" >
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="" >
	<meta property="og:image" content="assets/img/logor.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Page Title -->
	<title>Rezime : User Dashboard</title>
	
	<!-- Favicon icon -->
	<link rel="shortcut icon" type="image/png" href="{{env('APP_URL')}}/assets/img/logor.png">
	
	<!-- All StyleSheet -->
	<link href="{{env('APP_URL')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{env('APP_URL')}}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	
	<!-- Global CSS -->
    <link href="{{env('APP_URL')}}/css/style.css" rel="stylesheet">
	
</head>
<body>

<div id="app">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/" class="brand-logo">
				<img src="{{env('APP_URL')}}/assets/img/rezmi.png" alt="Logo" class="img-fluid" style="max-width: 200px; margin: 0 auto;">

            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <main class="py-4">
            @include('layouts.header')
            @include('layouts.sidebar')
            @yield('content')
        </main>
    </div>
<!-- jQuery Frameworks
    ============================================= -->
    <script src="{{env('APP_URL')}}/assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/equal-height.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.appear.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.easing.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/modernizr.custom.13711.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/count-to.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/wow.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.backgroundMove.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/bootsnav.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/main.js"></script>


    <!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{env('APP_URL')}}/vendor/global/global.min.js"></script>
<script src="{{env('APP_URL')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Dashboard 1 -->
<script src="{{env('APP_URL')}}/js/dashboard/dashboard-1.js"></script>

<script src="{{env('APP_URL')}}/vendor/owl-carousel/owl.carousel.js"></script>

<script src="{{env('APP_URL')}}/js/custom.min.js"></script>
<script src="{{env('APP_URL')}}/js/dlabnav-init.js"></script>
</body>
</html>