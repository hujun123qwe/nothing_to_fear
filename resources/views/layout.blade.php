<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8"/>
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>啄木鸟农业 - 植保信息平台 BETA</title>
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="assets/icon.css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.useso.com/css?family=Roboto:300,400,500,700"/>
	<link rel="stylesheet" href="http://libs.useso.com/js/font-awesome/4.2.0/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<script>
	   	window.Laravel = <?php echo json_encode([
	        'csrfToken' => csrf_token(),
	    ]); ?>
    </script>
</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="{{ url('/') }}">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.jpg" class="img-rounded" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    啄木鸟农业 PloverUAV
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
	    		<li>
					<a href="#" target="_blank">
						<i class="material-icons">account_circle</i> 欢 迎 {{ Auth::user()->name }}
					</a>
	    		</li>
				<li>
					<a href="#" target="_blank">
						<i class="material-icons">dashboard</i> Components
					</a>
				</li>
				<li>
					<a href="#" target="_blank">
						<i class="material-icons">unarchive</i> Upgrade to PRO
					</a>
				</li>
				<li>
					<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						<i class="material-icons">exit_to_app</i> 退 出
					</a>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
				</li>
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/bg2.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>啄木鸟•农业</h1>
						<h3>植保信息平台</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
		@yield('content')
	</div>
    <footer class="footer">
	    <div class="container">
            <nav class="pull-left">
				<ul>
					<li>
						<a href="http://www.ploveruav.com">
							啄木鸟官网
						</a>
					</li>
					<li>
						<a href="http://weixin.ploveruav.com/about.html">
						   关于我们
						</a>
					</li>
					<li>
						<a href="http://weixin.ploveruav.com/contact.html">
							联系我们
						</a>
					</li>
					<li>
						<a href="{{ url('/') }}">
						   啄木鸟团队
						</a>
					</li>
				</ul>
            </nav>
	        <div class="copyright pull-right">
	            &copy; 2017, made with <i class="material-icons">favorite</i> by PloverUAV for a better job.
	        </div>
	    </div>
	</footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
	@yield('js')
</html>
