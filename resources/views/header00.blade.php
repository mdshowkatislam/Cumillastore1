@php
use App\Http\Controllers\userController;
$total=0;
if(Session::has('user')){$total=userController::cartItem();}
@endphp

<header id="header" class="header header-style-1">
	<div class="container-fluid">
		<div class="row">
			<div class="topbar-menu-area">
				<div class="container">
					<div class="topbar-menu left-menu">
						<ul>
							<li class="menu-item">
								<a title="Hotline: (+0088) 01534770999" href="#"><span
										class="icon label-before fa fa-mobile"></span>Hotline: (+0088) 01534770999</a>
							</li>
						</ul>
					</div>
					<div class="topbar-menu right-menu">
						<ul>

							<li class="menu-item lang-menu menu-item-has-children parent">
								<a title="English" href="#"><span class="img label-before"><img
											src="assets/images/lang-en.png" alt="lang-en"></span>English<i
										class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu lang">
									<li class="menu-item"><a title="hungary" href="#"><span
												class="img label-before"><img src="assets/images/lang-hun.png"
													alt="lang-hun"></span>Bangla</a></li>
									<li class="menu-item"><a title="german" href="#"><span class="img label-before"><img
													src="assets/images/lang-ger.png" alt="lang-ger"></span>(
											<not-available>Urdu</not-available>
										</a>
									</li>

								</ul>
							</li>
							<li class="menu-item menu-item-has-children parent">
								<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
										aria-hidden="true"></i></a>
								<ul class="submenu curency">
									<li class="menu-item">
										<a title="Pound (GBP)" href="#">Pound (GBP)</a>
									</li>
									<li class="menu-item">
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
									</li>
									<li class="menu-item">
										<a title="Dollar (USD)" href="#">Dollar (USD)</a>
									</li>
								</ul>
							</li>
							@if(Route::has('login')) @auth @if(Auth::user()->utype === 'ADM')
							<li class="menu-item menu-item-has-children parent">
								<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i
										class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu curency">
									<li class="menu-item">
										<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
									</li>
									<li class="menu-item">
										<a title="Categories" href=#"{{ route('admin.categories') }}">Categories</a>
									</li>
									<li class="menu-item">
										<a title="Attributes" href=#"{{ route('admin.attributes') }}">Attributes</a>
									</li>
									<li class="menu-item">
										<a title="Products" href=#"{{ route('admin.products') }}">All products</a>
									</li>
									<li class="menu-item">
										<a title="Manage Home Slider" href=#"{{route('admin.homeslider')}}">Manage
											Home Slider</a>
									</li>
									<li class="menu-item">
										<a title="Manage Home Categories"
											href=#"{{route('admin.homecategories')}}">Manage Home Categories</a>
									</li>
									<li class="menu-item">
										<a title="Sale Setting" href=#"{{route('admin.sale')}}">Sale Setting</a>
									</li>
									<li class="menu-item">
										<a title="All Coupon" href=#"{{route('admin.coupons')}}">All Coupon</a>
									</li>
									<li class="menu-item">
										<a title="All Orders" href=#"{{route('admin.orders')}}">All Orders</a>
									</li>
									<li class="menu-item">
										<a title="Contact Messages" href=#"{{route('admin.contact')}}">Contact
											Messages</a>
									</li>
									<li class="menu-item">
										<a title="Settings" href=#"{{route('admin.settings')}}">Settings</a>
									</li>
									<li class="menu-item">
										<a href=#"{{ route('logout') }}"
											onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
									</li>
									<form id="logout-form" method="POST" action=#"{{ route('logout') }}">
										@csrf
									</form>
								</ul>
							</li>
							@else
							<li class="menu-item menu-item-has-children parent">
								<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i
										class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="submenu curency">
									<li class="menu-item">
										<a title="Profile" href=#"{{ route('user.profile') }}">Profile</a>
									</li>
									<li class="menu-item">
										<a title="Dashboard" href=#"{{ route('user.dashboard') }}">Dashboard</a>
									</li>
									<li class="menu-item">
										<a title="My Orders" href=#"{{ route('user.orders') }}">My orders</a>
									</li>
									<li class="menu-item">
										<a title="Change Password" href=#"{{ route('user.changepassword') }}">Change
											Password</a>
									</li>
									<li class="menu-item">
										<a href="{{ route('logout') }}"
											onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
									</li>
									<form id="logout-form" method="POST" action=#"{{ route('logout') }}">
										@csrf
									</form>
								</ul>
							</li>
							@endif @else
							<li class="menu-item"><a title="Register or Login" href="#{{route('login')}}">Login</a>
							</li>
							<li class="menu-item"><a title="Register or Login"
									href="#{{route('register')}}">Register</a>
							</li>
							@endif @endif
						</ul>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="mid-section main-info-area">

					<div class="wrap-logo-top left-section">
						<a href="index.html" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png') }}"
								alt="mercado"></a>
					</div>

					@livewire('header-search-component')

					<div class="wrap-icon right-section">
						@livewire('wishlist-count-component') @livewire('cart-count-component')
						<div class="wrap-icon-section show-up-after-1024">
							<a href="#" class="mobile-navigation">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div>

				</div>
			</div>

			<div class="nav-section header-sticky">
				<div class="header-nav-section">
					<div class="container">
						<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
							<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span
									class="nav-label hot-label">hot</span></li>
							<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span
									class="nav-label hot-label">hot</span></li>
							<li class="menu-item"><a href="#" class="link-term">Top new items</a><span
									class="nav-label hot-label">hot</span></li>
							<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span
									class="nav-label hot-label">hot</span></li>
							<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span
									class="nav-label hot-label">hot</span></li>
						</ul>
					</div>
				</div>

				<div class="primary-nav-section">
					<div class="container">
						<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
							<li class="menu-item home-icon">
								<a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
										aria-hidden="true"></i></a>
							</li>
							<li class="menu-item">
								<a href="about-us.html" class="link-term mercado-item-title">About Us000</a>
							</li>
							<li class="menu-item">
								<a href="/shop" class="link-term mercado-item-title">Shop</a>
							</li>
							<li class="menu-item">
								<a href="/cart" class="link-term mercado-item-title">Cart</a>
							</li>
							<li class="menu-item">
								<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
							</li>
							<li class="menu-item">
								<a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>