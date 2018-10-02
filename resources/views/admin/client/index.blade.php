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
									<h2>All Clients</h2>
								</div>
								<div class="tg-dashboardholder">
									@if (session('userDelete'))
				                        <div class="alert alert-success">
				                            {{ session('userDelete') }}
				                        </div>
				                    @endif
									
									<table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
								                <th>Email</th>
								                <th>Phone</th>
								                <th>Username</th>
								                <th>Password</th>
								                <th>Start date</th>
								                <th>Action</th>
								            </tr>
								        </thead>
								        <tbody>
								        	@foreach($users as $user)
								            <tr>
								                <td>{{$user->email}}</td>
								                <td>{{$user->phone}}</td>
								                <td>{{$user->historyUserName}}</td>
								                <td>{{$user->historyPassword}}</td>
                                                <td>{{$user->created_at}}</td>
								                
								                
												<td data-title="Action">
													<div class="tg-btnsactions">
														<a  data-toggle="tooltip" data-placement="top" title="View" class="tg-btnaction tg-btnactionview" href="{{ route('userInfo.show',$user->id) }}"  >
															<i class="fa fa-eye"></i>
														</a>

														<!-- delete button -->
									                    <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('userInfo.destroy',$user->id) }}" style="display: none">
									                      {{ csrf_field() }}
									                      {{ method_field('DELETE') }}
									                    </form>
									                    <a data-toggle="tooltip" data-placement="top" title="Delete" href="" class="tg-btnaction tg-btnactiondelete" onclick="
									                      if(confirm('Are you sure, You Want to delete this?'))
									                        {
									                          event.preventDefault();
									                          document.getElementById('delete-form-{{ $user->id }}').submit();
									                        }
									                        else{
									                          event.preventDefault();
									                        }" >
									                          <i class="fa fa-trash"></i>
									                    </a>

														<!-- history button -->    
		                                                <!-- history login page -->
		                                                <form target="_blank" name="loginForm" method="POST" action="http://206.225.85.24/MeVoice/Login.do;jsessionid=312DE72164CF2DE5F22AC685F1AED5CE" onsubmit="return validate();" id="form1" style="display: none;">

		                                                   <input name="username" class="inpFields" id="inpUserName" type="text" value="{{$user->historyUserName}}">
		                                                    <input name="password" value="{{$user->historyPassword}}" class="inpFields" id="inpPassword" type="password">
		                                                    <input  value="" type="submit">
		                                 
		                                                </form>
		                                                <!-- history login page -->
		                                                <a data-toggle="tooltip" data-placement="top" title="History" onclick="document.getElementById('form1').submit(); return false;" target="__blank" class="tg-btnaction tg-btnactiondelete">
		                                                    
									                          <i class="fa fa-history"></i>

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
								                <th>Username</th>
								                <th>Password</th>
								                <th>Start date</th>
								                <th>Action</th>
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