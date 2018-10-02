@extends('layouts.userDashboard')

@section('content')

        <!-- Dashboard banner-->
        <div class="tg-dashboardbanner">
            <h1>All FAQ</h1>
            <ol class="tg-breadcrumb">
                <li><a href="javascript:void(0);">Main</a></li>
                <li class="tg-active">All FAQ</li>
            </ol>
        </div>



        @if (session('faqadd'))
            <div class="alert alert-danger">
                {{ session('faqadd') }}
            </div>
        @endif

        @if (session('faqDelete'))
            <div class="alert alert-danger">
                {{ session('faqDelete') }}
            </div>
        @endif
        
		<!--************************************
				Main Start
		*************************************-->
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
									<h2>All FAQ</h2>
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
												<th>FAQ Title</th>
												<th>Description</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

										@php $i = 0; @endphp
										@foreach($faqs as $faq)
										@php $i++ @endphp
											<tr data-category="sold">
												<td>
													<span class="tg-checkbox">
														<input id="tg-adfour{{ $i }}" type="checkbox" name="myads" value="myadfour">
														<label for="tg-adfour{{ $i }}"></label>
													</span>
												</td>
												<td>{{ $i }}</td>
												<td data-title="title">
													<h3>{{$faq->title}}</h3>
												</td>
												<td data-title="title">
													<h3>{{$faq->description}}</h3>
												</td>

												<td>
													<div class="tg-btnsactions">
														<!-- delete button -->
									                    <form id="delete-form-{{ $faq->id }}" method="post" action="{{ route('faq.destroy',$faq->id) }}" style="display: none">
									                      {{ csrf_field() }}
									                      {{ method_field('DELETE') }}
									                    </form>
									                    <a href="" class="tg-btnaction tg-btnactiondelete" onclick="
									                      if(confirm('Are you sure, You Want to delete this?'))
									                        {
									                          event.preventDefault();
									                          document.getElementById('delete-form-{{ $faq->id }}').submit();
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
                                    {{ $faqs->links() }}
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
