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
			<h1>All Orders</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">All Orders</li>
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
									<h2>All Orders</h2>
								</div>
								<div class="tg-dashboardholder">
									
									
									<table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
								                <th>Email</th>
								                <th>Phone</th>
								                <th>Payment Id</th>
								                <th>Total</th>
								                <th>Order Date</th>
								                <th>Details</th>
								            </tr>
								        </thead>
								        <tbody>
								        	@foreach($orders as $order)
								            <tr>
								                <td>{{$order->user->email}}</td>
								                <td>{{$order->user->phone}}</td>
								                <td>{{$order->payment_id}}</td>
								               	<td>{{$order->cart->totalPrice}}</td>
								                <td>{{$order->created_at->diffForHumans()}}</td>
								                
												<td data-title="Action">
													<div class="tg-btnsactions">
														<a  data-toggle="tooltip" data-placement="top" title="Details" class="tg-btnaction tg-btnactionview" href="{{ route('userInfo.show',$order->user->id) }}"  >
															<i class="fa fa-eye"></i>
														</a>
													</div>
												</td>
								            </tr>
								            @endforeach
								        </tbody>
								        <tfoot>
								            <tr>
								                <th>Email</th>
								                <th>Phone</th>
								                <th>Payment Id</th>
								                <th>Total</th>
								                <th>Order Date</th>
								                <th>Details</th>
								            </tr>
								        </tfoot>
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

		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>


@endsection