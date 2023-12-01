<!DOCTYPE html>
<html lang="en" class="no-js">
  
<!-- Mirrored from wahabali.com/work/advisor/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Mar 2021 19:18:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <base #href="" />

	<!-- Basic Page Needs
     ================================================== -->
	 <meta charset="utf-8">
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">

	 
	 <!-- Mobile Specific Metas
     ================================================== -->
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
     <meta name="format-detection" content="telephone=no">
	 
     
	 
     <!-- Favicons
     ================================================== -->
     <link rel="icon" type="image/png" href="{{asset('template')}}/images/favicon.png">
     
	 
     <!-- Fonts
     ================================================== -->
     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
     
    <!-- CSS
     ================================================== -->
	
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('template')}}/css/bootstrap.css">

	<!-- advisor -->
	<link rel="stylesheet" href="{{asset('template')}}/css/advisor.css">

	<!-- plugins -->
	<link rel="stylesheet" href="{{asset('template')}}/css/plugins.css">	

	<!-- advisor color -->
	<link rel="stylesheet" id="color" href="{{asset('template')}}/css/color-default.css">

	<!-- hero slider -->
	<link rel="stylesheet" href="{{asset('template')}}/css/hero-slider.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('template')}}/css/responsive.css">

    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- HEADER SCRIPTS
    
    ================================================== -->
	<script src="{{asset('template')}}/js/modernizr.js"></script>
	
	
</head>
    <body class="fixed-header">
	    	
			
			
			<!-- LOADER -->
			<div id="loader" class="loader">
				<div class="spinner">
				  <div class="double-bounce1"></div>
				  <div class="double-bounce2"></div>
				</div>
			</div>
			
			
            
            <!-- HERDER -->
			@auth
             @include('admin-layout.header')
            @endauth

			@guest
			@include('template-layouts.header')
            @endguest

			 @yield('content')
			
      		
			@include('template-layouts.footer')
			
			
			
            
		<!-- FOOTER SCRIPTS
		================================================== -->
		<script src="{{asset('template')}}/js/jquery-2.2.0.js"></script>
		<script src="{{asset('template')}}/js/smooth-scroll.js"></script>
		<script src="{{asset('template')}}/js/bootstrap.min.js"></script>
		<script src="{{asset('template')}}/js/counter.js"></script>
		<script src="{{asset('template')}}/js/common.js"></script>
		<script src="{{asset('template')}}/js/scripts.js"></script>
		<script src="{{asset('template')}}/js/hero-slider.js"></script>
		
		
		<!-- DEMO -->
		<script src="{{asset('template')}}/demo-files/js/jquery.cookie.js"></script>
		<script src="{{asset('template')}}/demo-files/js/switcher.js"></script>
		
		
    </body>

<!-- Mirrored from wahabali.com/work/advisor/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Mar 2021 19:19:13 GMT -->
</html>