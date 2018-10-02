@extends('layouts.userDashboard')

@section('content')

        <!-- Dashboard banner-->
        <div class="tg-dashboardbanner">
            <h1>Add New FAQ</h1>
            <ol class="tg-breadcrumb">
                <li><a href="javascript:void(0);">Main</a></li>
                <li class="tg-active">Add New FAQ</li>
            </ol>
        </div>

        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-loginsignup">
                            <div class="col-md-8 col-md-offset-3">

	                            @if (session('error'))
	                                <div class="alert alert-danger">
	                                    {{ session('error') }}
	                                </div>
	                            @endif

                                <div class="tg-title">
                                    <h2>{{ __('Add New FAQ') }}</h2>
                                </div>
                                <div class="tg-haslayout">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">


                                            {!! Form::open(['method'=>'POST','action'=>'Admin\SupportsFAQController@store','class'=>'tg-formtheme tg-formregister']) !!}
    

                                             @csrf
                                                
                                                <fieldset>


                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-question"></i>

                                                        {!! Form::text('title',null,['placeholder'=>'Question*','class'=>'form-control rounded'])!!}

                                                        @if ($errors->has('title'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>

                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-pen"></i>

                                                        {!! Form::textarea('description',NULL,[ 'placeholder'=>'Description*','class'=> 'form-control rounded','rows'=>10,'columns'=>4
                                                        ,'style'=>'height:auto']) !!}  

                                                        @if ($errors->has('description'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('description') }}</strong>
                                                            </span>
                                                        @endif 
                                                       

                                                        @if ($errors->has('title'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>



                                                    <button class="tg-btn" type="submit" class="btn btn-primary">
                                                        {{ __('Save') }}
                                                    </button>

                                                </fieldset>
                                            {!! Form::close() !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
