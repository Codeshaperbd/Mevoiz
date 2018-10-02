@extends('layouts.userDashboard')



@section('content')

		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>Create a packeg</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li class="tg-active">Create a packeg</li>
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


                    {!! Form::open(['method'=>'POST','action'=>'Admin\PackegController@store','files'=>true, 'class'=>'tg-formtheme tg-formdashboard']) !!}

                     @csrf

						<fieldset>
							<div class="tg-postanad">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											<h2>Create new packegs</h2>
										</div>
										<div class="tg-dashboardholder">
											<div class="form-group">

												{!! Form::text('name','World Credits',['placeholder'=>'Pacekg Name*','class'=>'form-control']) !!}

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">
											  <div class="tg-select">

												{!! Form::select('country_id',[''=>'Choose Country'] + $countries,null,['class' => 'form-control']) !!}

                                                @if ($errors->has('country_id'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('country_id') }}</strong>
                                                    </span>
                                                @endif

											  </div>
											</div>
											<div class="form-group">

												{!! Form::text('point',null,['placeholder'=>'Country Point*','class'=>'form-control']) !!}

                                                @if ($errors->has('point'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('point') }}</strong>
                                                    </span>
                                                @endif

											</div>

											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Description*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											{!! Form::submit('Save',['class'=>'tg-btn btn btn-success  customeSubmit']) !!}
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					{!! Form::close() !!}
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
