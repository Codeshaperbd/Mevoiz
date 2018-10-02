@extends('layouts.userDashboard')



@section('content')


		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>All Packegs</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">Billing Details</li>
			</ol>
		</div>
		<!--************************************
				Dashboard Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Section Start
			*************************************-->
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row tg-formtheme tg-formdashboard">

			        @if(Session::has('packegDelete'))
			       	 <h2 style="margin-bottom: 20px;"> {{session('packegDelete')}}</h2>
			        @endif
			        @if(Session::has('packegCreate'))
			       	 <h2 style="margin-bottom: 20px;"> {{session('packegCreate')}}</h2>
			        @endif

					<fieldset>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-dashboardbox">
								<div class="tg-dashboardboxtitle">
									<h2>All Packegs</h2>
								</div>
								<div class="tg-dashboardholder">
									<!-- <nav class="tg-navtabledata">
										<ul>
											<li class="tg-active"><a href="_.html">All Ads (50)</a></li>
											<li><a href="_.html">Featured (12)</a></li>
											<li><a href="javascript:void(0);" data-category="active">Active (42)</a></li>
											<li><a href="javascript:void(0);" data-category="inactive">Inactive (03)</a></li>
											<li><a href="javascript:void(0);" data-category="sold">Sold (02)</a></li>
											<li><a href="javascript:void(0);" data-category="expired">Expired (01)</a></li>
											<li><a href="javascript:void(0);" data-category="deleted">Deleted (03)</a></li>
										</ul>
									</nav> -->
									<div class="tg-otherfilters">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-left">
												<div class="form-group tg-sortby">
													<span>Sort by:</span>
													<div class="tg-select">
														<select>
															<option>Most Recent</option>
															<option>Most Recent</option>
															<option>Most Recent</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 pull-right">
												<div class="form-group tg-inputwithicon">
													<i class="icon-magnifier"></i>
													<input type="search" name="search" class="form-control" placeholder="Search Here">
												</div>
											</div>
										</div>
									</div>
									<table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads">
										<thead>
											<tr>
												<th>Sl No</th>
												<th>Photo</th>
												<th>Country</th>
												<th>Packeg Name</th>
												<th>Ad Status</th>
												<th>Price</th>
												<th>Details</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
									<nav class="tg-pagination">
										<ul>
											<li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li class="tg-active"><a href="#">5</a></li>
											<li>...</li>
											<li><a href="#">10</a></li>
											<li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</fieldset>

				</div>
			</section>
			<!--************************************
					Section End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->




@endsection