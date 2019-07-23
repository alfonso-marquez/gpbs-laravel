<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laravel Test Website</title>
<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	@if(Request::is('/'))
	@include('inc.navbar')
	@endif

	@yield('content')

	@include('inc.sidebar')

<!-- Footer -->
<footer>
<div id="footer" class="container">
<div style="overflow-x: hidden !important" class="row">
<div class="col-md-6 mt-md-0 mt-3" style="text-align: left;">
<p><i class="fa fa-phone" aria-hidden="true" style="padding-right: 10px; color: #1E2857"></i> +63 2 631 4400</p>

<p> <i class="fa fa-map-marker" aria-hidden="true" style="padding-right: 10px; color: #1E2857"></i>704 7th Floor BTTC Center </p>
<p> <i class="fa fa-map-marker" aria-hidden="true" style="padding-right: 10px; color: #1E2857"></i> #288 Ortigas Ave., Greenhills, San Juan City</p>
<!--             <ul class="list-inline quicklinks">
<li class="list-inline-item">
<a href="#">Privacy Policy</a>
</li>
<li class="list-inline-item">
<a href="#">Terms of Use</a>
</li>
</ul> -->
</div>
<!-- <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" class="col-md-6 mt-md-0 mt-3">
<ul class="list-inline social-buttons" style="float: right;">
<li class="list-inline-item">
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="https://www.linkedin.com/company/gpbsinc/about/">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</div> -->
</div>
<div class="footer-copyright text-center">
<span class="copyright">Copyright &copy; Global Precast Building Solutions, Inc. 2019</span>
</div>
</div>
</footer>

</body>
</html>