@extends('layouts.userDashboard')

@section('content')

        <!-- Dashboard banner-->
        <div class="tg-dashboardbanner">
            <h1>All Country Banner</h1>
            <ol class="tg-breadcrumb">
                <li><a href="javascript:void(0);">Main</a></li>
                <li class="tg-active">All Country Banner</li>
            </ol>
        </div>

		<!--************************************
				Main Start
		*************************************-->
		@if (session('countryBannerDel'))
	        <div class="alert alert-danger">
	            {{ session('countryBannerDel') }}
	        </div>
	    @endif
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Section Start
			*************************************-->
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">

					<fieldset>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-dashboardbox">
								<div class="tg-dashboardboxtitle">
									<h2>All Country Banner</h2>
								</div>
								<div class="tg-dashboardholder">
									<table id="tg-adstype" class="table tg-dashboardtable tg-myfavourites">
										<thead>
											<tr>
												<th>
													<span class="tg-checkbox">
														<input id="tg-checkedall" type="checkbox" name="myads" value="checkall">
														<label for="tg-checkedall"></label>
													</span>
												</th>
												<th>No</th>
												<th>Country Name</th>
												<th>Banner</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

										@php $i = 0; @endphp
										@foreach($countryBanners as $country)
										@php $i++ @endphp
											<tr data-category="sold">
												<td>
													<span class="tg-checkbox">
														<input id="tg-adfour" type="checkbox" name="myads" value="myadfour">
														<label for="tg-adfour"></label>
													</span>
												</td>
												<td>{{ $i }}</td>
												<td data-title="title">
													<h3>{{$country->Country->name }}</h3>
												</td>

												<td data-title="Photo">

													  <img src="{{ url('') }}/images/banner/{{ $country->banner ? $country->banner : 'http://placehold.it/100x100' }}" height="40px" width="60px">

												</td>
												<td>
													<div class="tg-btnsactions">
														<!-- delete button -->
									                    <form id="delete-form-{{ $country->id }}" method="post" action="{{ route('countryBanner.destroy',$country->id) }}" style="display: none">
									                      {{ csrf_field() }}
									                      {{ method_field('DELETE') }}
									                    </form>
									                    <a href="" class="tg-btnaction tg-btnactiondelete" onclick="
									                      if(confirm('Are you sure, You Want to delete this?'))
									                        {
									                          event.preventDefault();
									                          document.getElementById('delete-form-{{ $country->id }}').submit();
									                        }
									                        else{
									                          event.preventDefault();
									                        }" >
									                          <i class="fa fa-trash"></i>
									                    </a>
													</div>									
												</td>
											</tr>
										@endforeach
										</tbody>
									</table>
                                    {{ $countryBanners->links() }}
									<!-- <nav class="tg-pagination">
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
									</nav> -->
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
