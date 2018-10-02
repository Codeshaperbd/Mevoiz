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
			<h1>All Clients</h1>
			<ol class="tg-breadcrumb">
				<li><a href="javascript:void(0);">Home</a></li>
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li class="tg-active">All Clients</li>
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
									<h2>All Subscriber</h2>
								</div>
								<div class="tg-dashboardholder">
									@if (session('subscribeDestroy'))
				                        <div class="alert alert-success">
				                            {{ session('subscribeDestroy') }}
				                        </div>
				                    @endif
									
									<table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
								                <th>id</th>
								                <th>Email</th>
								                <th>Action</th>
								            </tr>
								        </thead>
								        <tbody>
								        	@php $i=0; @endphp
								        	@foreach($subscriber as $subscribe)
								        	@php $i++ @endphp
								            <tr>

								                <td>{{$i}}</td>
								                <td>{{$subscribe->email}}</td>
								                
								                
												<td data-title="Action">
													<div class="tg-btnsactions">

														<!-- delete button -->
									                    <form id="delete-form-{{ $subscribe->id }}" method="post" action="{{ route('admin.subscriber.destroy',$subscribe->id) }}" style="display: none">
									                      {{ csrf_field() }}
									                      {{ method_field('DELETE') }}
									                    </form>
									                    <a data-toggle="tooltip" data-placement="top" title="Delete" href="" class="tg-btnaction tg-btnactiondelete" onclick="
									                      if(confirm('Are you sure, You Want to delete this?'))
									                        {
									                          event.preventDefault();
									                          document.getElementById('delete-form-{{ $subscribe->id }}').submit();
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