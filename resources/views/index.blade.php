@extends('layouts.main')

@section('content')
	<section id="clients1" class="clients clients-1 get-quote">
		<div class="container" id="contactUs">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="heading heading-1 mb-30">
						<h2 class="heading--title mb-20">Interested in Cryptocurrency <br>Since its Very Beginning of 2009!!</h2>
						<p class="heading--desc mb-20">Cryptocurrencies have become established investment commodities among major financial institutions, and have even been adopted by countries such as Australia and Japan. However, as with any investment there are risks linked to market movements!</p>
						<p class="heading--desc mb-0"> Now you can start trading Bitcoin, Ethereum and many cryptocurrencies fast, easily and safely from where ever you are. With great margin trading leverage and short sell options.</p>
					</div>
					<a class="social-icon" href="#" id="facebook-link"><i class="fa fa-facebook"></i></a>
					<a class="social-icon" href="#" id="twitter-link"><i class="fa fa-twitter"></i></a>
					<a class="btn btn--gradient btn--rounded text-capitalize" href="#">Services</a>
				</div><!-- .col-md-8 end -->
				<div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1">
					<div class="get-quote-container">
						<div class="get-quote-header">
							<h4>Get a Free Quote</h4>
						</div>
						<form id="contactForm" method="POST" class="signupform" action="/api/contact">
							<input type="text" class="form-control" name="quote-name" id="quote-name" placeholder="Name" required>
							<input type="email" class="form-control" name="quote-email" id="quote-email" placeholder="Email">
							<textarea class="form-control" name="quote-text" id="quote-text" placeholder="Request"></textarea>
							 <input type="submit" value="Submit Request" name="submit" class="btn btn--secondary btn--block btn--inverse">
						</form>
						<!-- form end -->
					</div> 
				<!-- .get-quote end -->
				</div><!-- .col-md-4 end -->
			</div><!-- .row end -->

			
		</div>
		<!-- .container end -->
	</section>
	<!-- #clients1 end -->

	<!-- Bitcoin Ecosystem
	============================================= -->
	<section id="BitcoinEcosystem" class="bg-dark">
		<div class="container">
			<div class="row clearfix">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
					<div class="heading heading-4 mb-50 text--center">
						<p class="heading--subtitle text-theme">Realtime Charts</p>
						<h2 class="heading--title text-white">Bitcoin Ecosystem</h2>
						<p class="heading--desc mb-0">Cryptocurrencies have become established investment commodities, however as with any investment there are risks linked to market movements!</p>
					</div>
				</div><!-- .col-md-6 end -->
			</div><!-- .row end -->
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<img class="img-responsive center-block mb-30" src="{{asset('main/chart/chart2.png')}}" alt="chart">
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-4 col-md-4">
					<img class="img-responsive center-block mb-30" src="{{asset('main/chart/chart3.png')}}" alt="chart">
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-4 col-md-4">
					<img class="img-responsive center-block mb-30" src="{{asset('main/chart/chart4.png')}}" alt="chart">
				</div><!-- .col-md-4 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- #BitcoinEcosystem end -->


	<!-- Featured #2
	============================================= -->
	<section id="services" class="featured featured-2 pb-50">
		<div class="container">
			<div class="row">
				<!-- Feature Card #1 -->
				<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp" data-wow-delay="100ms">
					<div class="feature-card">
						<div class="feature-card-icon">
							<i class="icon-lock"></i>
						</div>
						<div class="feature-card-content">
							<h3 class="feature-card-title">Protection & Security</h3>
							<p  class="feature-card-desc">Stop loss and take profit orders will help secure your investment. The system will automatically execute trades to realise gains.</p>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
				<!-- Feature Card #2 -->
				<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp" data-wow-delay="200ms">
					<div class="feature-card">
						<div class="feature-card-icon">
							<i class="icon-search"></i>
						</div>
						<div class="feature-card-content">
							<h3 class="feature-card-title">Licensed Exchange</h3>
							<p  class="feature-card-desc">Our customers perform transactions not only in cryptocurrency, but the major world currencies supported by the system.</p>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
				<!-- Feature Card #3 -->
				<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp" data-wow-delay="300ms">
					<div class="feature-card">
						<div class="feature-card-icon">
							<i class="icon-puzzle"></i>
						</div>
						<div class="feature-card-content">
							<h3 class="feature-card-title">Recurring Buys</h3>
							<p  class="feature-card-desc">Invest in digital currency slowly over time by scheduling buys weekly or monthly, allows a trader to profit from a market move.</p>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
				<!-- Feature Card #4 -->
				<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp" data-wow-delay="100ms">
					<div class="feature-card">
						<div class="feature-card-icon">
							<i class="icon-recycle"></i>
						</div>
						<div class="feature-card-content">
							<h3 class="feature-card-title">Unlimited Free Transfers</h3>
							<p  class="feature-card-desc">Send any currency to friends, family members or business associates as many times as you want, 24 hours a day for free.</p>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
				<!-- Feature Card #5 -->
				<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp" data-wow-delay="200ms">
					<div class="feature-card">
						<div class="feature-card-icon">
							<i class="icon-layers"></i>
						</div>
						<div class="feature-card-content">
							<h3 class="feature-card-title">Multi Currency Accounts</h3>
							<p  class="feature-card-desc">Support major currencies: USD, EUR, GBP, and various Cryptocurrencies. Funds exchanged between currencies at market rate.</p>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
				<!-- Feature Card #6 -->
				<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp" data-wow-delay="300ms">
					<div class="feature-card">
						<div class="feature-card-icon">
							<i class="icon-documents"></i>
						</div>
						<div class="feature-card-content">
							<h3 class="feature-card-title">Blockchain Smart Contracts</h3>
							<p  class="feature-card-desc">The first thing to know about blockchain smart contracts is they're not contracts, smart, nor necessarily on a blockchain.</p>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
	 		</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #featured2 end -->

	<!-- Info Cards
	============================================= -->
	<section id="infoCards" class="info-cards bg-gray">
		<div class="container" id="aboutUs">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="info-card">
						<div class="info-card-step">01.</div>
						<div class="info-card-content">
							<h4 class="info-card-subtitle">We are helpers</h4>
							<h3 class="info-card-title">Advice and guides</h3>
							<p class="info-card-desc">Taking the time to manage your money better can really pay off. It can help you stay on top of your bills and save £1,000s each year.</p>
							<a class="info-card-links d-none" href="#"><i class="fa fa-plus"></i>Read More</a>
						</div>
					</div><!-- .info-card end -->
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="info-card">
						<div class="info-card-step">02.</div>
						<div class="info-card-content">
							<h4 class="info-card-subtitle">Quick & smart</h4>
							<h3 class="info-card-title">Tools and calculators</h3>
							<p class="info-card-desc">Use our Budget planner to keep on top of your spending, use our tool to work out what you have left after paying your most important bills.</p>
							<a class="info-card-links d-none" href="#"><i class="fa fa-plus"></i>Read More</a>
						</div>
					</div><!-- .info-card end -->
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="info-card">
						<div class="info-card-step">03.</div>
						<div class="info-card-content">
							<h4 class="info-card-subtitle">Friendly support</h4>
							<h3 class="info-card-title">Support in person</h3>
							<p class="info-card-desc">Support in person, over the phone and online. Web chat is available from 8am to 8pm or you can give us a call for free and impartial money advice.</p>
							<a class="info-card-links d-none" href="#"><i class="fa fa-plus"></i>Read More</a>
						</div>
					</div><!-- .info-card end -->
				</div><!-- .col-md-4 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #infoCards end -->

	<!-- Featured #1
	============================================= -->
	<section id="featured1" class="featured featured-1 bg-overlay bg-overlay-dark2 bg-parallax pb-0">
		<div class="bg-section">
			<img src="{{asset('main/images/1.jpg')}}" alt="Background"/>
		</div>
		<div class="container-fluid pr-0 pl-0">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="featured-img">
						<img src="{{asset('main/images/laptop-mockup.png')}}" alt="Laptop Mockup">
					</div>
				</div><!-- .col-md-5 end -->
				<div class="col-xs-12 col-sm-12 col-md-5 col-content">
					<div class="heading heading-6 mb-50 fadeInRight" data-wow-delay="100ms">
						<h2 class="heading--title text-white">Take Your First Steps to Becoming a Bitcoiner Today!</h2>
						<p class="heading--desc text-gray mb-20">Now you can start trading Bitcoin, Ethereum and many cryptocurrencies fast, easily and safely from where ever you are. With great margin trading leverage and short sell options available with quick deposit & withdrawal capability, you can start trading with us in seconds.</p>
						<p class="heading--desc text-gray">Cryptocurrencies have become established investment commodities among major financial institutions, and have even been adopted by countries such as Australia and Japan.</p>
					</div><!-- .heading end -->
					<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInRight" data-wow-delay="100ms">
								<div class="feature-card">
									<div class="feature-card-icon">
										<img src="{{asset('main/icons/BitcoinIcon1.png')}}" alt="Bitcoin Icon">
									</div>
									<div class="feature-card-content">
										<h3 class="feature-card-title text-white">Quick Deposits and Withdrawals</h3>
									</div>
								</div>
							</div><!-- .col-md-4 end -->
							<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInRight" data-wow-delay="200ms">
								<div class="feature-card">
									<div class="feature-card-icon">
										<img src="{{asset('main/icons/BitcoinIcon2.png')}}" alt="Bitcoin Icon">
									</div>
									<div class="feature-card-content">
										<h3 class="feature-card-title text-white">Reliable and Smart Platform</h3>
									</div>
								</div>
							</div><!-- .col-md-4 end -->
							<div class="col-xs-12 col-sm-4 col-md-4 wow fadeInRight" data-wow-delay="300ms">
								<div class="feature-card">
									<div class="feature-card-icon">
										<img src="{{asset('main/icons/BitcoinIcon3.png')}}" alt="Bitcoin Icon">
									</div>
									<div class="feature-card-content">
										<h3 class="feature-card-title text-white">Long and <br>Short Selling</h3>
									</div>
								</div>
							</div><!-- .col-md-4 end -->
						</div><!-- .row end -->
				</div><!-- .col-md-7 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #featured1 end -->
		<!-- CTA #1
	============================================= -->
	<section id="cta1" class="cta cta-1">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12 col-sm-12 col-md-9">
	                <h3>Take Your First Steps to Becoming a Bitcoiner Today!</h3>
	            </div>
	            <!-- .col-md-9 -->
	            <div class="col-xs-12 col-sm-12 col-md-3 text-right">
	                <a href="#" class="btn btn--white btn--bordered btn--rounded">Get Started</a>
	            </div>
	            <!-- .col-md-3 -->
	        </div>
	        <!-- .row -->
	    </div>
	    <!-- .container -->
	</section>
	<!-- #cta1 end -->
@endsection