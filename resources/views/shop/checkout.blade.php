@extends('layouts.app')

@section('styles')


<style type="text/css">
	table.ckOutTable tbody td {
    border-bottom: 1px solid #505050;
    margin: 13px;
    overflow: hidden;
    padding: 10px 10px;
}
</style>

@endsection

@section('content')

<!-- addToCartPayment -->
<main id="tg-main" class="tg-main tg-haslayout addCrtPayment">

<!--************************************
        Categories Search Start
*************************************-->
<section class="tg-haslayout">
    <div class="container">
	    <div class="row">
	    	<!--
	    	<============> Payment form	
	    	-->
			@if ($message = Session::get('success'))
		        <div class="w3-panel w3-green w3-display-container">
		            <span onclick="this.parentElement.style.display='none'"
		    				class="w3-button w3-green w3-large w3-display-topright">&times;</span>
		            <p>{!! $message !!}</p>
		        </div>
		        <?php Session::forget('success');?>
		        @endif

		        @if ($message = Session::get('error'))
		        <div class="w3-panel w3-red w3-display-container">
		            <span onclick="this.parentElement.style.display='none'"
		    				class="w3-button w3-red w3-large w3-display-topright">&times;</span>
		            <p>{!! $message !!}</p>
		        </div>
		        <?php Session::forget('error');?>
	        @endif


		    <div class="col-md-7">
			    <div class="paymentDetails">
			    	<h2 class="text-center">Select Payment Method</h2>

			    	<!-- tab element -->
				    <ul class="nav nav-pills">
					    <li class="active"><a data-toggle="pill" href="#home">Credit Card</a></li>
					    <li><a data-toggle="pill" href="#paypal">Paypal</a></li>
					</ul>

					<!-- tab content -->
					<div class="tab-content">

						<!-- master card -->
				    	<div id="home" class="checkoutForm tab-pane fade in active">
				    		<div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
				    			{{ Session::get('error') }}
				    		</div>
							<form action="{{ route('checkout') }}" method="post" id="checkout-form">
				                <div class="row">
				                    <div class="col-xs-12">
				                        <div class="form-group">
				                            <label for="name">Name</label>
				                            <input type="text" id="name" class="form-control" required name="name">
				                        </div>
				                    </div>
				                    <div class="col-xs-12">
				                        <div class="form-group">
				                            <label for="address">Address</label>
				                            <input type="text" id="address" class="form-control" required name="address">
				                        </div>
				                    </div>
				                    <hr>
				                    <div class="col-xs-12">
				                        <div class="form-group">
				                            <label for="card-name">Card Holder Name</label>
				                            <input type="text" id="card-name" class="form-control" required>
				                        </div>
				                    </div>
				                    <div class="col-xs-12">
				                        <div class="form-group">
				                            <label for="card-number">Credit Card Number</label>
				                            <input type="text" id="card-number" class="form-control" required>
				                        </div>
				                    </div>
				                    <div class="col-xs-12">
				                        <div class="row">
				                            <div class="col-xs-6">
				                                <div class="form-group">
				                                    <label for="card-expiry-month">Expiration Month</label>
				                                    <input type="text" id="card-expiry-month" class="form-control" required>
				                                </div>
				                            </div>
				                            <div class="col-xs-6">
				                                <div class="form-group">
				                                    <label for="card-expiry-year">Expiration Year</label>
				                                    <input type="text" id="card-expiry-year" class="form-control" required>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-xs-12">
				                        <div class="form-group">
				                            <label for="card-cvc">CVC</label>
				                            <input type="text" id="card-cvc" class="form-control" required>
				                        </div>
				                    </div>
				                </div>
				                {{ csrf_field() }}
				                <button type="submit" class="btn btn-success buyBtn">Buy now</button>
				            </form>
				    	</div><!-- /.checkoutForm -->

				    	<!-- paypal -->
				    	<div id="paypal" class="tab-pane fade" style="padding:15px;">

							<form action="{{ route('pay') }}" method="post" id="checkout-form">
								{{ csrf_field() }}

			            			<input type="hidden" name="amount" value="{{ $totalPrice }}" >

			            		<button type="submit" value="Pay" class="form-control">Pay Vai Paypal</button>

				            </form>
				    	</div><!-- end paypal -->

				    </div>
				    <!-- /. tab content -->

			    </div>
		    </div>
	    	<!--
			<============ END Payment form	
	    	-->

	    	<!--
			<============ Payment form	
	    	-->
		    <div class="col-md-5">
			    <div class="itemDetails">
			    	<h2 class="text-center">Your Order</h2>

			    	<table class="ckOutTable">
			    		@foreach($packegs as $packeg)
			    		<tr>
			    			<td>{{ $packeg['item']['country']['name'] }} {{ $packeg['item']['name'] }}<span class="badge">{{ $packeg['qty'] }}</span></td>
			    			<td>${{ $packeg['amount'] }}</td>
			    		</tr>
			    		@endforeach
			    		<tr>
			    			<td><strong>Total Amount</strong></td>
			    			<td><strong>${{ $totalPrice }}</strong></td>

			    		</tr>
			    	</table>

			    </div>
		    </div>
	    	<!--
			<============ END Payment form	
	    	-->

	    </div>
    </div>
</section>

</main>



@endsection



@section('scripts')
	<script src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
@endsection