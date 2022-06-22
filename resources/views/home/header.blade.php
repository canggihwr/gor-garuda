<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Coeus</title>
	<meta name="description"  content="Creative Template" />
	<meta name="author" content="IG Design">
	<meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
	<meta property="og:title" content="Creative Template" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Professional Creative Template" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
	<meta name="twitter:domain" content="http://ivang-design.com/" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Professional Creative Template" />
	<meta name="twitter:image" content="http://ivang-design.com/" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>	
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/colors/color.css') }}"/>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">
	
	
</head>
<body>	

	<div class="loader">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
			<rect x="0" y="0" width="4" height="10" fill="#333">
				<animateTransform attributeType="xml"
				attributeName="transform" type="translate"
				values="0 0; 0 20; 0 0"
				begin="0" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="10" y="0" width="4" height="10" fill="#333">
				<animateTransform attributeType="xml"
				attributeName="transform" type="translate"
				values="0 0; 0 20; 0 0"
				begin="0.2s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="20" y="0" width="4" height="10" fill="#333">
				<animateTransform attributeType="xml"
				attributeName="transform" type="translate"
				values="0 0; 0 20; 0 0"
				begin="0.4s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>	
	</div>
						

	
	<!-- Nav and Logo
	================================================== -->
	
	<div id="menu-wrap" class="menu-back cbp-af-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light mx-lg-0">
						<a class="navbar-brand" href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
								<span class="menu-icon__line menu-icon__line-left"></span>
								<span class="menu-icon__line"></span>
								<span class="menu-icon__line menu-icon__line-right"></span>
							</span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="#buy" data-ps2id-offset="120">Buy Tokens</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#concept">Concept</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#roadmap">Roadmap</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#team">Team</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#faq">FAQ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact">Contact</a>
								</li>
								<li class="nav-item">
									<a class="nav-link no-line" href="#">Variants</a>
									<ul class="background-white sub-shadow">
										<li><a href="index.html" class="active-subnav">From developers</a></li>
										<li><a href="index-11.html">Countdown gradient</a></li>
										<li><a href="index-2.html">Crowdsale</a></li>
										<li><a href="index-9.html">Azure blockchain - animated</a></li>
										<li><a href="index-3.html">From developers - dark</a></li>
										<li><a href="index-4.html">Crowdsale - dark</a></li>
										<li><a href="index-5.html">From developers - animated</a></li>
										<li><a href="index-10.html">Countdown gradient anime</a></li>
										<li><a href="index-6.html">Crowdsale - animated</a></li>
										<li><a href="index-7.html">From developers - anime dark</a></li>
										<li><a href="index-8.html">Crowdsale - animated dark</a></li>
									</ul>
								</li>
								<li class="nav-item mt-2">
									<a class="btn btn-primary js-tilt" href="#app" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Login</span></a>
								</li>
							</ul>
                            <ul>
                                <li class="nav-item">
                                    <a class="shadow-hover curent-shadow" href="/" >Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="shadow-hover" href="about.html">Info & Jadwal Lapangan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="shadow-hover" href="blog.html">Cara Penyewaan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="shadow-hover" href="contact.html">Fasilitas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="shadow-hover" href="#">Login</span></a>
                                    <ul>
                                        <li>
                                            <a class="curent-multi-page" href="/login">Login</a>
                                        </li>
                                        <li><a href="/daftar">Daftar</a></li>
                                    </ul>
                                </li>
                            </ul>
						</div>
					</nav>				
				</div>
			</div>
		</div>
	</div>
