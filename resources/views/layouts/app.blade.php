<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
		<meta name="description" content="BeautyJolly : Beauty Spa Salon" />
	<meta property="og:title" content="BeautyJolly : Beauty Spa Salon" />
	<meta property="og:description" content="BeautyJolly : Beauty Spa Salon" />
	<meta property="og:image" content="BeautyJolly : Beauty Spa Salon" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ secure_asset('app_assets/image/favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ secure_asset('app_assets/image/favicon.css') }}" />
	
	<!-- PAGE TITLE HERE -->
	<title>BeautyJolly : Beauty Spa Salon </title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	

	<link rel="stylesheet" type="text/css" href="{{ secure_asset('app_assets/css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('app_assets/css/style.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('app_assets/css/templete.min.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ secure_asset('app_assets/css/skin/skin-1.css') }}">
    <!-- Styles -->
    @yield('styles')
    <!-- Styles END -->
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">

    <!-- header -->
    @yield('header')
    <!-- header END -->
   
    <!-- Content -->
    @yield('content')

    
    
	<!-- Footer -->
     @yield('footer')
    <!-- Footer END-->

    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
	
</div>


<!-- Scripts -->
@yield('scripts')
<!-- Scripts END-->

</body>

</html>