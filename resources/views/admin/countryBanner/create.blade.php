@extends('layouts.userDashboard')

@section('content')

		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>Create a packeg</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li class="tg-active">Add Banner</li>
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
				<div class="col-md-8 col-md-offset-3">	
				    
				    @if (session('countryBanner'))
				        <div class="alert alert-danger">
				            {{ session('countryBanner') }}
				        </div>
				    @endif
					<div class="row tg-formtheme tg-formdashboard">


	                    {!! Form::open(['method'=>'POST','action'=>'CountryBannerController@store','files'=>true, 'class'=>'tg-formtheme tg-formdashboard']) !!}

	                     @csrf

							<fieldset>
								<div class="tg-postanad">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="tg-dashboardbox tg-contactdetail">
											<div class="tg-dashboardboxtitle">
												<h2>Add New Banner</h2>
											</div>
											<div class="tg-dashboardholder">
											
												<div class="form-group">
												  <div class="tg-select">

													{!! Form::select('country_id',[''=>'Choose Country'] + $countries,null,['class' => 'form-control']) !!}

	                                                @if ($errors->has('country_id'))
	                                                    <span class="invalid-feedback">
	                                                        <strong>{{ $errors->first('country_id') }}</strong>
	                                                    </span>
	                                                @endif

												  </div>

												  	<br><br>
                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-flag"></i>

                                                        {!! Form::file('banner',[ 'placeholder'=>'Country Flag*','class'=> 'form-control rounded']) !!}   
                                                       
                                                    </div>
												</div>


										
												{!! Form::submit('Save',['class'=>'tg-btn btn btn-success  customeSubmit']) !!}
											</div>
										</div>
									</div>
								</div>
							</fieldset>
						{!! Form::close() !!}
					</div>
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
