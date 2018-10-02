@extends('layouts.userDashboard')

@section('styles')
	<style type="text/css">
		.localPaymentLeft{
			text-align: right;
		}
		.localPaymentRight{
			text-align: left;
		}
	</style>
@endsection

@section('content')


		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>Local Payment Details</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">Payment Detils</li>
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
									<h2>Payment Detils</h2>
								</div>
								<div class="tg-dashboardholder">

									<div class="row">
										<div class="col-md-2">
											<div class="localPaymentLeft">
												Country:
											</div>
										</div>
										<div class="col-md-10">
											<div class="localPaymentRight">
												{{$localPayment->Country->name}}
											</div>
										</div>
									</div>
									<br><br>
									<div class="row">
										<div class="col-md-2">
											<div class="localPaymentLeft">
												Details:
											</div>
										</div>
										<div class="col-md-10">
											<div class="localPaymentRight">
												{{$localPayment->details}}
											</div>
										</div>
									</div>

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