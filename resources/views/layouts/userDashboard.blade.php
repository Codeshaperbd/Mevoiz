<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard_test.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dbresponsive.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-dashboardheader" class="tg-dashboardheader tg-haslayout">
			<nav id="tg-nav" class="tg-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
					<ul>
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
						<li>
							<a href="{{route('admin.dashboard')}}">Dashboard</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="tg-rghtbox">
				<a class="tg-btn" href="{{route('managePackeg.create')}}">
					<i class="icon-bookmark"></i>
					<span>post an ad</span>
				</a>
				<!--<div class="dropdown tg-themedropdown tg-notification">
					<button class="tg-btndropdown" id="tg-notificationdropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-alarm"></i>
						<span class="tg-badge">9</span>
					</button>
					<ul class="dropdown-menu tg-dropdownmenu" aria-labelledby="tg-notificationdropdown">
						<li><p>Consectetur adipisicing sedi eiusmod ampore incididunt ut labore et dolore.</p></li>
						<li><p>Consectetur adipisicing sedi eiusmod ampore incididunt ut labore et dolore.</p></li>
						<li><p>Consectetur adipisicing sedi eiusmod ampore incididunt ut labore et dolore.</p></li>
						<li><p>Consectetur adipisicing sedi eiusmod ampore incididunt ut labore et dolore.</p></li>
						<li><p>Consectetur adipisicing sedi eiusmod ampore incididunt ut labore et dolore.</p></li>
						<li><p>Consectetur adipisicing sedi eiusmod ampore incididunt ut labore et dolore.</p></li>
					</ul>
				</div>-->
			</div>
			<div id="tg-sidebarwrapper" class="tg-sidebarwrapper">
				<span id="tg-btnmenutoggle" class="tg-btnmenutoggle">
					<i class="fa fa-angle-left"></i>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="67" viewBox="0 0 20 67">
						
						<path id="bg" class="cls-1" d="M20,27.652V39.4C20,52.007,0,54.728,0,67.265,0,106.515.026-39.528,0-.216-0.008,12.32,20,15.042,20,27.652Z"/>
					</svg>
				</span>
				<div id="tg-verticalscrollbar" class="tg-verticalscrollbar">
					<strong class="tg-logo"><a href="javascript:void(0);"><img src="{{ url('/') }}/images/logo.png" alt="image description"></a></strong>
					<div class="tg-user">
						<figure>
							<span class="tg-bolticon"><i class="fa fa-bolt"></i></span>
							<a href="javascript:void(0);">
								<img src="{{ Auth::user()->photo ? Auth::user()->photo->file : 'http://placehold.it/60x60' }}" class="img-full" alt="Profile image">
							</a>
						</figure>
						<div class="tg-usercontent">
							<h3>{{ Auth::user()->name }}</h3>
							<h4>Administrator</h4>
						</div>
						<a class="tg-btnedit" href="javascript:void(0);"><i class="icon-pencil"></i></a>
					</div>
					<nav id="tg-navdashboard" class="tg-navdashboard">
						<ul>
							<li class="tg-active">
								<a href="{{ route('admin.dashboard') }}">
									<i class="icon-chart-bars"></i>
									<span> Dashboard</span>
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="icon-layers"></i>
									<span>Profile</span>
								</a>
								<ul class="sub-menu">
									<li><a href="{{ url('admin/profileUpdate') }}">Profile Settings</a></li>
									<li><a href="{{ route('changePassword') }}">Password Change</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="icon-layers"></i>
									<span>Users</span>
								</a>
								<ul class="sub-menu">
									<li><a href="{{route('userInfo.index')}}">All Users</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="icon-layers"></i>
									<span>Country</span>
								</a>
								<ul class="sub-menu">
									<li><a href="{{route('country.create')}}">Add New Country</a></li>
									<li><a href="{{route('country.index')}}">View All Country</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="icon-layers"></i>
									<span>Country Banner</span>
								</a>
								<ul class="sub-menu">
									<li><a href="{{route('countryBanner.create')}}">Add New Banner</a></li>
									<li><a href="{{route('countryBanner.index')}}">View All Banner</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="icon-layers"></i>
									<span>Add Packegs</span>
								</a>
								<ul class="sub-menu">
									<li><a href="{{route('managePackeg.create')}}">Add New Packegs</a></li>
									<li><a href="{{route('managePackeg.index')}}">View All Packes</a></li>
									<li><a href="{{route('managePackeg.fearurePackegs')}}">Feature Packegs</a></li>
								</ul>
							</li>
							
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="icon-layers"></i>
									<span>Purchase Order</span>
								</a>
								<ul class="sub-menu">
									<li><a href="{{route('orderDetails.index')}}">All Order</a></li>
									<li><a href="{{route('recent.order')}}">Recent Order</a></li>
								</ul>
							</li>
							
							<li>
								<a href="{{route('admin.subscriber')}}">
									<i class="icon-layers"></i>
									<span>Subscriber List</span>
								</a>
							</li>
							
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="icon-layers"></i>
									<span>FAQ</span>
								</a>
								<ul class="sub-menu">
									<li><a href="{{route('faq.create')}}">Add New FAQ</a></li>
									<li><a href="{{route('faq.index')}}">All faq</a></li>
								</ul>
							</li>

							<li>
	                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
	                                         document.getElementById('logout-form').submit();">
	                                <i class="icon-exit"></i>
	                                <span>{{ __('Logout') }}</span>
	                            </a>
	                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                @csrf
	                            </form>
	                        </li>
						</ul>
					</nav>
					<div class="tg-socialandappicons">
						<ul class="tg-socialicons">
							<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
							<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
							<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
							<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
							<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
						</ul>
						<ul class="tg-appstoreicons">
							<li><a href="javascript:void"><img src="{{ url('/') }}/images/icons/app-01.png" alt="image description"></a></li>
							<li><a href="javascript:void"><img src="{{ url('/') }}/images/icons/app-02.png" alt="image description"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		@yield('content')

		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<nav class="tg-footernav">
				<ul>
			           <span class="tg-copyright">2017 All Rights Reserved &copy; Mevoiz</span>
				</ul>
			</nav>
			<span class="tg-copyright">Design & Develope By <a href="http://codeshaper.net/" target="blank">Codeshaper</a></span>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->


    <!-- Scripts -->
    <script src="{{ asset('js/libs.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
    <script src="{{ asset('js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci') }}"></script>
    <script src="{{ asset('js/responsivethumbnailgallery.html') }}"></script>

    @yield('scripts')
</body>
</html>
