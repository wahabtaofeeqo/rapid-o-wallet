<header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
	<nav id="primary-menu" class="navbar navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="logo" href="/">
					<!-- <img class="logo-light" src="{{asset('main/logo/logo-light.png')}}" alt="Enrmous Logo">
					<img class="logo-dark" src="{{asset('main/logo/logo-dark.png')}}" alt="Enrmous Logo"> -->
					<img class="logo-light" src="{{asset('main/logo/logo.jpeg')}}" alt="Enrmous Logo" style="width: 200px;">
				</a>
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left nav-pos-right">
				<!-- Home Menu-->
					<li class="has-dropdown active">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Home</a>
					</li>
					<!-- li end -->

					<li>
						<a href="#aboutUs" class="link-hover menu-item" data-hover="about">About Us</a>
					</li>
					
					<!-- Services Menu-->
					<li class="has-dropdown">
						<a href="#services" class="dropdown-toggle menu-item">services</a>
					</li>
					<!-- li end -->

					<li class="has-dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} &nbsp; <i class="fa fa-user"></i>
                        </a>

						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
	                                document.getElementById('logout-form').submit();">
	                                {{ __('Logout') }}
	                            </a>

	                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	                                @csrf
	                            </form>
							</li>
						</ul>
					</li>
				</ul>

				<!-- Module Contact  -->
				<div class="module module-consultation pull-left">
					<a class="btn btn--white btn--bordered btn--rounded" href="#contactUs">Contact Us</a>
				</div>				<!-- Module Social -->		
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</header>