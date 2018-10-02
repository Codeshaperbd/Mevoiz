@extends('layouts.userDashboard')

@section('content')

	<!-- Dashboard banner-->
	<div class="tg-dashboardbanner">
		<h1>Dashboard</h1>
		<ol class="tg-breadcrumb">
			<li><a href="javascript:void(0);">Main</a></li>
			<li class="tg-active">Dashboard</li>
		</ol>
	</div>

		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">

			<!--************************************
					Statistics Start
			*************************************-->
			<section class="tg-dbsectionspace tg-haslayout tg-statistics">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
						<div class="tg-dashboardbox tg-statistic">
							<figure><img src="images/icons/img-32.png" alt="image description"></figure>
							<div class="tg-contentbox">
								<h2>{{count($users)}}</h2>
								<h3>Happy Customers</h3>
								<a class="tg-btnviewdetail fa fa-angle-right" href="{{route('userInfo.index')}}">View Detail</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
						<div class="tg-dashboardbox tg-statistic">
							<figure><img src="images/icons/img-33.png" alt="image description"></figure>
							<div class="tg-contentbox">
								<h2>{{count($packegs)}}</h2>
								<h3>Total Packegs</h3>
								<a class="tg-btnviewdetail fa fa-angle-right" href="{{route('managePackeg.index')}}">View Detail</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
						<div class="tg-dashboardbox tg-statistic">
							<figure><img src="images/icons/img-34.png" alt="image description"></figure>
							<div class="tg-contentbox">
								<h2>{{count($countries)}}</h2>
								<h3>Total Country</h3>
								<a class="tg-btnviewdetail fa fa-angle-right" href="{{route('country.index')}}">View Detail</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
						<div class="tg-dashboardbox tg-statistic">
							<span class="tg-badge">6</span>
							<figure><img src="images/icons/img-35.png" alt="image description"></figure>
							<div class="tg-contentbox">
								<h2>45706</h2>
								<h3>Packeg Category</h3>
								<a class="tg-btnviewdetail fa fa-angle-right" href="{{route('managePackeg.index')}}">View Detail</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Statistics End
			*************************************-->

		</main>
		<!--************************************
				Main End
		*************************************-->

@endsection
