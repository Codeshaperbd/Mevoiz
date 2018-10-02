@extends('layouts.app')


@section('styles')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/popup.css') }}">

@endsection

@section('content')

		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->

			<!--************************************
					About Us End
			*************************************-->

			<!--************************************
					Quality Services Start
			*************************************-->
			<section class="tg-bglight tg-haslayout">
				<div class="container-fluid">
					<div class="row">
						<div class="tg-qualityservices">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-imgshortcode">
										<figure>
											<img src="images/img-01.jpg" alt="image description">
											<figcaption><a class="tg-btnplayvideo mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=4XLQpRI_wOQ"><i class="fas fa-play"></i></a></figcaption>
										</figure>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-textshortcode">
										<div class="tg-titleshortcode">
											<h2>Serving Quality Services</h2>
										</div>
										<div class="tg-description">
											<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etae magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillumolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non prident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem santium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="tg-bglight tg-haslayout">
				<div class="container-fluid">
					<div class="row">
						<div class="tg-qualityservices">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-textshortcode">
										<div class="tg-titleshortcode">
											<h2>Serving Quality Services</h2>
										</div>
										<div class="tg-description">
											<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etae magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillumolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non prident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem santium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-imgshortcode">
										<figure>
											<img src="images/img-01.jpg" alt="image description">
											<figcaption><a class="tg-btnplayvideo mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=4XLQpRI_wOQ"><i class="fas fa-play"></i></a></figcaption>

										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Quality Services End
			*************************************-->

		</main>
		<!--************************************
				Main End
		*************************************-->


@endsection

@section('scripts')
	<script src="{{ asset('js/popup.js') }}"></script>

	<script type="text/javascript">


	        $(".video-play-btn").magnificPopup({
	            type: 'video'
	        });
	        

	</script>
@endsection