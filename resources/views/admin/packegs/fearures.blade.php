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
				<li class="tg-active">All Packegs</li>
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
			        @if(Session::has('packStatus'))
			       	 <h2 style="margin-bottom: 20px;"> {{session('packStatus')}}</h2>
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
												<th>Minutes</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@php $i=0; @endphp 
											@foreach($packegs as $packeg)
											@php $i++; @endphp
											<tr data-category="active">
												<td data-title="">
													<span class="tg-checkbox">
														{{$i}}
													</span>
												</td>
												<td data-title="Photo">

													<img src="{{ url('') }}/images/country/{{ $packeg->country_id ? $packeg->Country->flag : 'http://placehold.it/100x100' }}" height="40px" width="60px">
												</td>
												<td data-title="country">
													<h3>{{$packeg->Country->name}}</h3>
												</td>
												<td data-title="Title">
													<h3>{{$packeg->name}}</h3>
												</td>
												<td data-title="Ad Status">

							                        <form method="PATCH" action="{{ route('managePackeg.status',$packeg->id) }}">
							                          {{ csrf_field() }}
							                          {{ method_field('PATCH') }}
							                          @if($packeg->active == 1)
							                            <button type="submit" name="status" value="0" class="btn btn-rounded btn-sm btn-danger"><i class="fa fa-fw fa-times"></i> Deactive</button>
							                          @else
							                            <button type="submit" name="status" value="1" class="btn btn-rounded btn-sm btn-info"><i class="fa fa-fw fa-check"></i> Active</button>
							                          @endif
							                        </form>

												</td>

												<td data-title="Title">
													<h3>{{$packeg->amount}}$</h3>
												</td>

												<td data-title="Title">

	                                                @php 
	                                                    $total = $packeg->amount / $packeg->point;
	                                                    $min = number_format($total);
	                                                @endphp
													<h3>{{$min}} Min</h3>
												</td>
												
												<td data-title="Date">
													<time datetime="2017-08-08">
														{{$packeg->created_at->diffforhumans()}}
													</time>
													<span>Published</span>
												</td>
												<td data-title="Action">
													<div class="tg-btnsactions">


								                        <form method="PATCH" action="{{ route('managePackeg.feature',$packeg->id) }}">
								                          {{ csrf_field() }}
								                          {{ method_field('PATCH') }}
								                          @if($packeg->feature == 1)
								                            <button type="submit" name="feature" value="0" class="tg-btnaction tg-btnactionview"><i style="display: inline-block;" class="fa fa-fw fa-times"></i></button>
								                          @else
								                            <button type="submit" name="feature" value="1" class="tg-btnaction tg-btnactionedit"><i style="display: inline-block;" class="fa fa-fw fa-check"></i></button>
								                          @endif
								                        </form>

														<a class="tg-btnaction tg-btnactionedit" href="{{route('managePackeg.edit',$packeg->id)}}">
															<i class="fa fa-pencil"></i>
														</a>


														<!-- delete button -->
									                    <form id="delete-form-{{ $packeg->id }}" method="post" action="{{ route('managePackeg.destroy',$packeg->id) }}" style="display: none">
									                      {{ csrf_field() }}
									                      {{ method_field('DELETE') }}
									                    </form>
									                    <a href="" class="tg-btnaction tg-btnactiondelete" onclick="
									                      if(confirm('Are you sure, You Want to delete this?'))
									                        {
									                          event.preventDefault();
									                          document.getElementById('delete-form-{{ $packeg->id }}').submit();
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