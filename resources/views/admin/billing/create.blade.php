@extends('layouts.userDashboard')



@section('content')

		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>Billing Add</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li class="tg-active">Billing Add</li>
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
											<h2>Add new billing</h2>
										</div>
										<div class="tg-dashboardholder">
											<div class="form-group">
											  <div class="tg-select">


											<select class="form-control">
                                                                                          <option selected disabled>Payment Details</option>
                                                                                          <option>Payment recive</option>
                                                                                          <option>Payment sent<option>
                                                                                        </select>

											  </div>
                                                                                        </div>
											<div class="form-group">

												{!! Form::text('Customar Name 
',null,['placeholder'=>'Customar Name*','class'=>'form-control']) !!}

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif



											</div>
											<div class="form-group">
											  <div class="tg-select">


											<select class="form-control">
                                                                                          <option selected disabled>Payment Taype*</option>
                                                                                          <option>user</option>
                                                                                          <option>Resaller coustomar</option>
                                                                                          <option>Wholsale Coustomar</option>
                                                                                          <option>Paypal USD</option>
                                                                                        </select>

											  </div>
                                                                                        </div>
							
											<div class="form-group">

												{!! Form::date('minutes',null,['placeholder'=>'Date & Time*','class'=>'form-control']) !!}

                                                @if ($errors->has('minutes'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('minutes') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('amount',null,['placeholder'=>'Payment Way Bank / Bikash*','class'=>'form-control']) !!}

                                                @if ($errors->has('amount'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Total Balance*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::textarea('description',null,['placeholder'=>'Description*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Due*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Sender Bank Name*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Sender Bank Branch*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Sender account Name*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Receiver Bank Name*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Sender account Name*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Receiver Bank Branch*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Receiver Bank Branch*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Receiver account Name*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Receiver account No*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'STAN NUMBER*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Status Date & Time*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">

												{!! Form::text('description',null,['placeholder'=>'Status Date & Time*','class'=>'form-control']) !!}

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif

											</div>
											<div class="form-group">
											  <div class="tg-select">

											<select class="form-control">
                                                                                          <option selected disabled>Status*</option>
                                                                                          <option>Payment Clear</option>
                                                                                          <option>DUE Payment</option>
                                                                                        </select>

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
			</section>
			<!--************************************
					Section End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->



@endsection
