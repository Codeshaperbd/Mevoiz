@extends('layouts.userDashboard')



@section('content')


		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>All Local Payment Details</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">All Payment</li>
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

			        @if(Session::has('localPaymentDelete'))
			       	 <h2 style="margin-bottom: 20px;"> {{session('localPaymentDelete')}}</h2>
			        @endif
			        @if(Session::has('localPayment'))
			       	 <h2 style="margin-bottom: 20px;"> {{session('localPayment')}}</h2>
			        @endif
			        @if(Session::has('localPaymentUpadte'))
			       	 <h2 style="margin-bottom: 20px;"> {{session('localPaymentUpadte')}}</h2>
			        @endif

					<fieldset>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-dashboardbox">
								<div class="tg-dashboardboxtitle">
									<h2>All Payment</h2>
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
												<th>Country</th>
												<th>Details</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@php $i=0; @endphp 
											@foreach($localPayments as $payment)
											@php $i++; @endphp
											<tr data-category="active">
												<td data-title="">
													<span class="tg-checkbox">
														{{$i}}
													</span>
												</td>
												<td data-title="country">
													<h3>{{$payment->Country->name}}</h3>
												</td>
												<td data-title="Title">
													<h3>{{str_limit($payment->details,40)}}</h3>
												</td>

												<td data-title="Date">
													<time datetime="2017-08-08">
														{{$payment->created_at->diffforhumans()}}
													</time>
												</td>
												<td data-title="Action">
													<div class="tg-btnsactions">
														<a class="tg-btnaction tg-btnactionview" href="{{route('localPayment.show',$payment->id)}}" >
															<i class="fa fa-eye"></i>
														</a>

														<a class="tg-btnaction tg-btnactionedit" href="{{route('localPayment.edit',$payment->id)}}">
															<i class="fa fa-pencil"></i>
														</a>


														<!-- delete button -->
									                    <form id="delete-form-{{ $payment->id }}" method="post" action="{{ route('localPayment.destroy',$payment->id) }}" style="display: none">
									                      {{ csrf_field() }}
									                      {{ method_field('DELETE') }}
									                    </form>
									                    <a href="" class="tg-btnaction tg-btnactiondelete" onclick="
									                      if(confirm('Are you sure, You Want to delete this?'))
									                        {
									                          event.preventDefault();
									                          document.getElementById('delete-form-{{ $payment->id }}').submit();
									                        }
									                        else{
									                          event.preventDefault();
									                        }" >
									                          <i class="fa fa-trash"></i>
									                    </a>
													</div>
												</td>
											</tr>
											<!-- Details modal -->
											@endforeach
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