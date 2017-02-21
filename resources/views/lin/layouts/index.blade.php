<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{ $title or 'Drop-st' }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="oshaman" />
<meta name="description" content="{{ (isset($meta_desc)) ? $meta_desc : ''}}">
<meta name="keywords" content="{{ (isset($keywords)) ? $keywords : ''}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- css -->
<link href="{{ asset(config('settings.theme')) }}/css/bootstrap.min.css" rel="stylesheet" />
<link href="{{ asset(config('settings.theme')) }}/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="{{ asset(config('settings.theme')) }}/css/flexslider.css" rel="stylesheet" />
<link href="{{ asset(config('settings.theme')) }}/css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Welcome</p>
        <p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	@yield('header')
	<!-- end header -->
	@yield('content')
				
	@yield('footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset(config('settings.theme')) }}/js/jquery.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/jquery.easing.1.3.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/bootstrap.min.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/jquery.fancybox.pack.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/jquery.fancybox-media.js"></script>  
<script src="{{ asset(config('settings.theme')) }}/js/jquery.flexslider.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="{{ asset(config('settings.theme')) }}/js/modernizr.custom.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/jquery.isotope.min.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/animate.js"></script>
<script src="{{ asset(config('settings.theme')) }}/js/custom.js"></script>
</body>
</html>