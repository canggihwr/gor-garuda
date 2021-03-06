@include('home.header')	
	
	<!-- Primary Page Layout
	================================================== -->

	<div class="section full-height height-auto-lg hide-over background-light-blue">
		<div class="hero-center-wrap relative-on-lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-center text-lg-left parallax-fade-top align-self-center z-bigger">
						<h2>Real tech from real developers.</h2>
						<p class="mt-3 mb-4 pb-3 font-weight-normal">We’ve built companies from the ground up, served hundreds of millions of users and completed multiple exits.</p>
						<a class="btn btn-primary ml-lg-0 js-tilt" href="#" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Whitepaper</span></a>
						<a class="btn btn-primary js-tilt" href="#app" data-gal="m_PageScroll2id" data-ps2id-offset="68" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Download App</span></a>
					</div>
					<div class="col-lg-6 mt-5 mt-lg-0">
						<div class="img-wrap header-img">
							<img src="{{ asset('img/home-il.svg') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ocean">
			<div class="wave"></div>
			<div class="wave"></div>
		</div>
		<div id="particles-js" class="min-height"></div>
	</div>

	<div class="section z-bigger">
		<div class="section padding-bottom-big" id="buy">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mt-4">
						<a class="btn btn-primary js-tilt" href="#" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Buy Tokens 35% Off</span></a>
					</div>
					<div class="col-md-12 mt-5">
						<p class="text-center">payment methods</p>
					</div>
					<div class="col-md-12 mt-1">
						<ul class="payment-methods">
							<li><img src="{{ asset('img/bitcoin.png') }}" alt=""><p>bitcoin</p></li>
							<li><img src="{{ asset('img/etherium.png') }}" alt=""><p>ethereum</p></li>
							<li><img src="{{ asset('img/litecoin.png') }}" alt=""><p>litecoin</p></li>
							<li><img src="{{ asset('img/usd.png') }}" alt=""><p>US Dollars</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section padding-top-big">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="table-sale background-grey">
							<p class="text-center"><span>50% Off</span></p>
							<div class="table-line mt-4 mb-4"></div>
							<h4 class="text-center">1 coe</h4>
							<p class="text-center">0.5 US dollars</p>
							<div class="table-line mt-4 mb-4"></div>
							<p class="text-center">Sold Out 2M Tokens</p>
							<p class="text-center">March 20 - 31</p>
							<a class="btn disabled mt-5" href="#" role="button"><span>Sold Out</span></a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mt-4 mt-sm-0">
						<div class="table-sale background-color table-shadow">
							<h4 class="text-center">now</h4>
							<div class="table-line mt-4 mb-4"></div>
							<h4 class="text-center">1 coe</h4>
							<p class="text-center">0.65 US dollars</p>
							<div class="table-line mt-4 mb-4"></div>
							<p class="text-center">Available 8M Tokens</p>
							<p class="text-center">April 1 - 15</p>
							<a class="btn btn-primary table-ver mt-5 js-tilt" href="#" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Buy 35% Off</span></a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mt-4 mt-xl-0">
						<div class="table-sale background-grey future-price">
							<p class="text-center"><span>25% Off</span></p>
							<div class="table-line mt-4 mb-4"></div>
							<h4 class="text-center">1 coe</h4>
							<p class="text-center">0.75 US dollars</p>
							<div class="table-line mt-4 mb-4"></div>
							<p class="text-center">Available 6M Tokens</p>
							<p class="text-center">April 16 - 25</p>
							<a class="btn disabled mt-5 background-white" href="#" role="button"><span>25 days</span></a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mt-4 mt-xl-0">
						<div class="table-sale background-grey future-price">
							<p class="text-center"><span>10% Off</span></p>
							<div class="table-line mt-4 mb-4"></div>
							<h4 class="text-center">1 coe</h4>
							<p class="text-center">0.9 US dollars</p>
							<div class="table-line mt-4 mb-4"></div>
							<p class="text-center">Available 4M Tokens</p>
							<p class="text-center">April 26 - May 10</p>
							<a class="btn disabled mt-5 background-white" href="#" role="button"><span>40 days</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="container padding-top-big">
				<div class="row">
					<div class="col-12 col-lg-6 offset-lg-3">
						<div class="countdown background-dark-blue-1 big-shadow-down">
							<p class="mb-4 mb-lg-5"><span>35% discount</span> croudsale ends in:</p>
							<div class="section">
								<ul>
									<li class="background-dark-blue"><span id="days"></span>days</li>
									<li class="background-dark-blue"><span id="hours"></span>hours</li>
									<li class="background-dark-blue"><span id="minutes"></span>minutes</li>
									<li class="background-dark-blue"><span id="seconds"></span>seconds</li>
								</ul>
							</div>
							<p class="mt-4 mb-0"><small>Available at 0.65$</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<div class="section padding-top-big padding-bottom-big background-dark-blue-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-wrap text-center">
							<h5 class="color-light">overall output over 60 months:</h5>
						</div>
					</div>
					<div class="col-md-12">	
						<div class="line-chart">
							<div class="aspect-ratio">
								<canvas id="chart"></canvas>
							</div>
						</div>				
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div class="section padding-top-bottom-big background-white" id="concept">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">concept</div>
						<h3>We are the only global<br>mining operation.</h3>
						<p>Lend your digital assets to others for trading and earn an interest through margin trading loans.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('img/con-1.svg') }}" alt="">
						<h5>Independent</h5>
						<p>Our mobility concept enables super-simple transportation and worldwide deployment.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('img/con-2.svg') }}" alt="">
						<h5>Fully Scalable</h5>
						<p>Mobile and efficient low-cost hardware and optimized propietary management.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('img/con-3.svg') }}" alt="">
						<h5>High Growth</h5>
						<p>Our reinvestment strategy enables us to quickly grow our fleet of mobile units.</p>
					</div>
				</div>
				<div class="col-md-12 padding-top-bottom">
					<div class="line-sep"></div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<h4>Creating a win-win<br>for everyone</h4>
					<p class="lead">An exciting business opportunity should come with equally exciting rewards.</p>
					<p>Early adopters can earn up to a 200% bonus based on the final token value should we reach our 100 mil tokens hardcap during our planned token sale event.</p>
					<a class="btn btn-primary mt-4 mx-0 js-tilt" href="#roadmap" data-gal="m_PageScroll2id" data-ps2id-offset="68" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Roadmap</span></a>
				</div>
				<div class="col-md-5 offset-md-1 order-first order-md-last mb-4 mb-md-0">
					<div class="img-wrap">
						<img src="{{ asset('img/1.svg') }}" alt="">
					</div>
				</div>
			</div>	
		</div>	
		<div class="container">
			<div class="row">
				<div class="col-md-12 my-5"></div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 mb-4 mb-md-0">
					<div class="img-wrap">
						<img src="{{ asset('img/2.svg') }}" alt="">
					</div>
				</div>
				<div class="col-md-6 offset-md-1 align-self-center">
					<h4>More than just a price jump</h4>
					<p>The Coeus token sale events are unique as they offer tiered bonuses which include not only an increasing token price but also lifetime discounts, a commitment from us to support our tokens liquidity and future value, as well as access to future pre-pre-Token sale events.</p>
						<a class="btn btn-primary mt-4 mx-0 js-tilt" href="#buy" data-gal="m_PageScroll2id" data-ps2id-offset="120" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Buy Tokens</span></a>
				</div>
			</div>	
		</div>		
	</div>

	<div class="section padding-top-bottom-big" id="roadmap">
		<div class="background-parallax" style="background-image: url('img/parallax-1.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">roadmap</div>
						<h3>Making the most<br>out of unused.</h3>
						<p>The Coeus token sale events are unique as they offer tiered bonuses which include increasing token price and lifetime discounts.</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="customNavigation">
						<a class="prev-roadmap"><i class="fa fa-angle-left"></i></a>
						<a class="next-roadmap"><i class="fa fa-angle-right"></i></a>
					</div>
					<div id="owl-roadmap" class="owl-carousel owl-theme">											
						<div class="item">						 
							<div class="roadmap-box background-white">
								<p class="mb-4 achieved"><span>Achieved</span></p>
								<h6>Dec 2017.</h6>
								<p>Start of Development</p>
							</div>	
						</div>											
						<div class="item"> 						 
							<div class="roadmap-box current-road background-white roadmap-shadow">
								<p class="mb-4"><span>Current</span></p>
								<h6>Apr 2018.</h6>
								<p>Token Sale Start</p>
							</div>	
						</div>												
						<div class="item"> 						 
							<div class="roadmap-box next-road background-white">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6>May 2018.</h6>
								<p>Blockchain Dev Starts</p>
							</div>	
						</div>											
						<div class="item"> 						 
							<div class="roadmap-box next-road background-white">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6>Oct 2018.</h6>
								<p>Exchange Beta Launch</p>
							</div>	
						</div>											
						<div class="item"> 						 
							<div class="roadmap-box next-road background-white">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6>Jan 2019.</h6>
								<p>Expanded Licensing</p>
							</div>	
						</div>											
						<div class="item"> 						 
							<div class="roadmap-box next-road background-white">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6>Mar 2019.</h6>
								<p>Debit Card Launch</p>
							</div>	
						</div>											
						<div class="item"> 						 
							<div class="roadmap-box next-road background-white">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6>May 2019.</h6>
								<p>Partnership For Future</p>
							</div>	
						</div>							
					</div>
				</div>
				<div class="col-md-12 padding-top">
					<div class="title-wrap text-center">
						<h5>How it works:</h5>
					</div>
				</div>
				<div class="col-md-8 offset-md-2">
					<div class="video-section video-shadow">
						<figure class="vimeo"> 
							<a href="https://player.vimeo.com/video/239566739">
								<img src="{{ asset('img/video.jpg') }}" alt="image"/>
							</a>
						</figure>
					</div>
				</div>
			</div>	
		</div>
	
	</div>

	<div class="section padding-top-bottom-big" id="app">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">wallet</div>
						<h3>Control your future<br>wealth.</h3>
						<p>All-in-one app to secure, manage and exchange blockchain assets.</p>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<h4>It begins with total security.</h4>
					<p class="lead">View, manage and sort all your tokens easily. Providing fast coin management in your local currency.</p>
					<ul class="app-list mb-5 mt-4">
						<li>Smart by design</li>
						<li>Easy Coin Management</li>
						<li>Instantly import your wallet</li>
						<li>Detailed transaction info</li>
						<li>Custom fees and limits</li>
					</ul>
					<a class="btn btn-primary mx-0 js-tilt" href="#" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Download App</span></a>
					<a class="app-btn ml-4" href="#"><i class="fa fa-apple"></i></a>
					<a class="app-btn ml-2" href="#"><i class="fa fa-android"></i></a>
					<a class="app-btn ml-2" href="#"><i class="fa fa-windows"></i></a>
				</div>
				<div class="col-md-6 order-first order-md-last mb-4 mb-md-0">
					<div class="img-wrap">
						<img src="{{ asset('img/app.png') }}" alt="">
					</div>
				</div>
			</div>	
		</div>	
	</div>

	<div class="section padding-top-big padding-bottom background-dark-blue-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<h5 class="color-light">as featured on:</h5>
					</div>
				</div>
				<div class="col-md-12">
					<ul class="logo-wrap">
						<li><img src="{{ asset('img/logos/1.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/2.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/3.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/4.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/5.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/6.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/7.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/8.png') }}" alt=""></li>
						<li><img src="{{ asset('img/logos/9.png') }}" alt=""></li>
					</ul>
				</div>
			</div>	
		</div>
	</div>

	<div class="section padding-top-bottom-big" id="team">
		<div class="background-parallax" style="background-image: url('img/parallax-3.jpg') }}')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">team</div>
						<h3>Established since<br>2009 (Belgrade)</h3>
						<p>We're a close team of creatives, designers & developers who work together.</p>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-1">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('img/t5.jpg') }}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<h6>Alex Andrews</h6>
						<p>Officer & Founder</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-2">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('img/t6.jpg') }}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<h6>Marco Kulis</h6>
						<p>Development manager</p>
						<a class="app-btn" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-3">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('img/t7.jpg') }}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<h6>Anna Furius</h6>
						<p>Senior Developer</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-md-12 padding-top-small">
					<div class="title-wrap text-center mb-5">
						<h5>Advisory team</h5>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-4">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('img/t1.jpg') }}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<h6>Frank Furius</h6>
						<p>Managing Director</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-5">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('img/t2.jpg') }}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<h6>Aca Pesic</h6>
						<p>Founder & CEO</p>
						<a class="app-btn" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-6">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('img/t3.jpg') }}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<h6>Ela Dobric</h6>
						<p>Executive Director</p>
						<a class="app-btn" href="#"><i class="fa fa-git"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-7">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('img/t4.jpg') }}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<h6>Milena Dobric</h6>
						<p>Founder & CEO</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<!-- Modal Team 1-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-1" tabindex="-1" role="dialog" aria-labelledby="team-modal-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url('img/t5-modal.jpg')"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Alex Andrews</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Team 2-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-2" tabindex="-1" role="dialog" aria-labelledby="team-modal-2" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url('img/t6-modal.jpg')"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Marco Kulis</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 3-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-3" tabindex="-1" role="dialog" aria-labelledby="team-modal-3" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url('img/t7-modal.jpg')"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Anna Furius</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 4-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-4" tabindex="-1" role="dialog" aria-labelledby="team-modal-4" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url('img/t1-modal.jpg')"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Frank Furius</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 5-->

	{{-- <div class="modal fade bd-example-modal-lg" id="team-modal-5" tabindex="-1" role="dialog" aria-labelledby="team-modal-5" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url('img/t2-modal.jpg')"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Aca Pesic</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	 --}}

	<!-- Modal Team 6-->

	{{-- <div class="modal fade bd-example-modal-lg" id="team-modal-6" tabindex="-1" role="dialog" aria-labelledby="team-modal-6" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url('img/t3-modal.jpg')"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Ela Dobric</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	 --}}

	<!-- Modal Team 7-->

	{{-- <div class="modal fade bd-example-modal-lg" id="team-modal-7" tabindex="-1" role="dialog" aria-labelledby="team-modal-7" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url('img/t4-modal.jpg')"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Milena Dobric</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>		 --}}
	

	{{-- <div class="section padding-top-bottom-big background-grey" id="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">faq</div>
						<h3>Questions and Answers</h3>
						<p>Listed questions and answers, all supposed to be commonly asked in some context, and pertaining to a particular topic.</p>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div id="accordion" class="accordion-style">
						<div class="card">
							<div class="card-header" id="headingOne">
								<a class="background-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									What exactly is your token?
								</a>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<h6>What exactly is your token?</h6>
									<p>Token is a community of people who want to mine cryptocurrency profitably by combining resources to achieve savings on equipment and ultra-low-cost electricity.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingTwo">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What’s your overall strategy?
								</a>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<h6>What’s your overall strategy?</h6>
									<p>Our strategy is very straightforward: 1) raise funds, 2) leverage those funds to procure the best mining equipment and other necessities at the lowest possible prices, 3) set up the hardware in a suitable facility; 4) start mining; 5) distribute what we mine.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingThree">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is bitcoin?
								</a>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<h6>What is bitcoin?</h6>
									<p>Bitcoin is a cryptocurrency and worldwide payment system. It is the first decentralised digital currency, as the system works without a central bank or single administrator.</p>
								</div>
							</div>
						</div>
					</div>				
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div id="accordion-snd" class="accordion-style">
						<div class="card">
							<div class="card-header" id="headingFour">
								<a class="background-white" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									What is blockchain?
								</a>
							</div>

							<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion-snd">
								<div class="card-body">
									<h6>What is blockchain?</h6>
									<p>A blockchain is the technology on which cryptocurrency is based. A blockchain is basically a continuously growing list of records called blocks that are linked and secured using cryptography. </p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingFive">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									What is cryptocurrency?
								</a>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-snd">
								<div class="card-body">
									<h6>What is cryptocurrency?</h6>
									<p>A cryptocurrency is a digital asset designed to work as a medium of exchange that uses cryptography to secure its transactions, to control the creation of additional units, and to verify the transfer of assets.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingSix">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									How much should I invest?
								</a>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion-snd">
								<div class="card-body">
									<h6>How much should I invest?</h6>
									<p>Cryptocurrency mining is not without risk, and we are open and candid about those risks in our White Paper.</p>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>	
		</div>
	</div> --}}
	
	
	<div class="section padding-top-bottom-big" id="contact">
		<div class="background-parallax" style="background-image: url('img/parallax-4.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">contact</div>
						<h3>Always ready to work</h3>
						<p>Get in touch.</p>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<div class="contact-det text-center">
						<img src="{{ asset('img/contact-1.svg') }}" alt="">
						<h6>Phone</h6>
						<p>+54 12 346 7826</p>
					</div>
				</div>
				<div class="col-md-3 mt-4 mt-md-0">
					<div class="contact-det text-center">
						<img src="{{ asset('img/contact-2.svg') }}" alt="">
						<h6>Email</h6>
						<p>office@coeus.ico</p>
					</div>
				</div>
				<div class="col-md-3 mt-4 mt-md-0">
					<div class="contact-det text-center">
						<img src="{{ asset('img/contact-3.svg') }}" alt="">
						<h6>Address</h6>
						<p>1093 Flushing Ave, NY</p>
					</div>
				</div>
			</div>
			<form id="contact-form" class="mt-5" method="post" action="contact.php" role="form">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="messages text-center"></div>
					</div>
				</div>
				<div class="controls">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="form-group text-center">
								<input id="form_name" type="text" name="name" class="form-control text-center" placeholder="Enter your first name *" required="required" data-error="First name is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-4 mt-3 mt-md-0">
							<div class="form-group text-center">
								<input id="form_lastname" type="text" name="surname" class="form-control text-center" placeholder="Enter your last name *" required="required" data-error="Last name is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-4 mt-3">
							<div class="form-group text-center">
								<input id="form_email" type="email" name="email" class="form-control text-center" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-4 mt-3">
							<div class="form-group text-center">
								<input id="form_phone" type="tel" name="phone" class="form-control text-center" placeholder="Enter your phone">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-8 mt-3">
							<div class="form-group text-center">
								<textarea id="form_message" name="message" class="form-control text-center" placeholder="Your message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
								<div class="help-block with-errors textarea-error"></div>
							</div>
						</div>
						<div class="col-md-8 mt-3 text-center">
							<input type="submit" class="btn btn-primary btn-send text-center" value="Send message">
						</div>
					</div>
				</div>
			</form>	
		</div>
	</div>
	
	
    @include('home.footer')	