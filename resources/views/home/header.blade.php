<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>0129- 12323-123123</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.html">
						<!-- replace logo here -->
						<svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">AVIATO</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					@if (Route::has('login'))
          			@auth
          <form style="padding-left:15px" method="POST" action="{{ route('logout') }}">
              @csrf

              <input class="btn btn-success" type="submit" value="Logout">
          </form>
          @else
            <a href="{{url('/login')}}">
				<button type="button" class="btn btn-primary">Login</button>
            </a>

            <a href="{{url('/register')}}">
			  <button type="button" class="btn btn-info">Register</button>
            </a>

          @endauth
          @endif
				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="{{url('/')}}">Home</a>
					</li><!-- / Home -->
					<li class="dropdown ">
						<a href="{{url('/about')}}">About</a>
					</li>
					<li class="dropdown ">
						<a href="{{url('/shop')}}">Shop</a>
					</li>
					<li class="dropdown ">
						<a href="{{url('/blog')}}">Blog</a>
					</li>
					<li class="dropdown ">
						<a href="{{url('/contact')}}">Contact</a>
					</li>
					  


					@if (Route::has('login'))
          			@auth

					  <li class="dropdown ">
						<a href="{{url('myorders')}}">My Order</a>
					  </li>

					  <li class="dropdown cart-nav dropdown-slide">
						<a href="{{url('mycart')}}" class="dropdown-toggle">Cart <i
							class="tf-ion-android-cart">[{{$count}}]</i></a>
					  </li>
					  @else
					  <li class="dropdown cart-nav dropdown-slide">
						<a href="{{url('mycart')}}" class="dropdown-toggle">Cart <i
							class="tf-ion-android-cart"></i></a>
					  </li>
          			@endauth
          			@endif
	</nav>
</section>

