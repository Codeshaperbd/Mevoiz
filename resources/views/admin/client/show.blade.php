@extends('layouts.userDashboard')

@section('styles')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<style type="text/css">
		div.dataTables_wrapper div.dataTables_filter label {
		    text-align: right;
		}
	</style>
@endsection

@section('content')


		<!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
			<h1>Total purchased Packeges</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">Total purchased Packegess</li>
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

					<fieldset>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-dashboardbox">
								<div class="tg-dashboardboxtitle">
									<h2>Total purchased Packeges</h2>
								</div>
								<div class="tg-dashboardholder">

									<div class="clientPackeg">
										 
							            
							            <div class="panel panel-default">
							            	@php $allTotal = 0 @endphp
							                @foreach($orders as $order)
							                <div class="panel-body">

							                    <table>
							                        <thead>
							                            <tr>
							                                <th>Sl</th>
							                                <th>Packeg Name</th>
							                                <th>quantaty</th>
							                                <th>total</th>
							                                <th>Purchase date</th>
							                            </tr>
							                        </thead>
							                        <tbody>
						                        		@php $i = 0; @endphp
						                                @foreach($order->cart->items as $item)
						            					@php $i++; @endphp 
								                            <tr>
								                                <td width="10%">{{$i}}</td>
								                                <td width="40%">{{ $item['item']['name'] }}</td>
								                                <td width="20%">{{$item['qty']}}</td>
								                                <td width="10%"><span class="badge">${{ $item['amount']}}</span></td>
								                                
								                                <td width="20%">{{ $order->created_at }}</td>
								                            </tr>
							                            @endforeach
							                        </tbody>
							                    </table>
							                </div>
							                <div class="panel-footer">
							                    <table class="footerTbl">
							                        <tbody>
							                            <tr>
							                                <td width="10%"></td>
							                                <td width="40%"></td>
							                                <td width="20%"><strong>Sub Total</strong></td>
							                                <td width="10%"><span class="badge">${{ $order->cart->totalPrice }}</span></td>
							                                <td width="20%"></td>
							                            </tr>
							                        </tbody>
							                    </table>

							            </div>
							            @php $allTotal += $order->cart->totalPrice @endphp
							            @endforeach
							        </div>

						                    <table class="footerTbl">
						                        <tbody>
						                            <tr>
						                                <td width="10%"></td>
						                                <td width="40%"></td>
						                                <td width="20%"><h3>Total</h3></td>
						                                <td width="10%"><h3>${{ $allTotal  }}</h3></td>
						                                <td width="20%"></td>
						                            </tr>
						                        </tbody>
						                    </table>
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



@section('scripts')
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>
@endsection