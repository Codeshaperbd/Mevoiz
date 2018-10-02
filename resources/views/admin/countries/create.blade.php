@extends('layouts.userDashboard')

@section('content')

        <!-- Dashboard banner-->
        <div class="tg-dashboardbanner">
            <h1>Add New Country</h1>
            <ol class="tg-breadcrumb">
                <li><a href="javascript:void(0);">Main</a></li>
                <li class="tg-active">Add New Country</li>
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
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="tg-title">
                                    <h2>{{ __('Add New Country') }}</h2>
                                </div>
                                <div class="tg-haslayout">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">


                                            {!! Form::open(['method'=>'POST','action'=>'Admin\AdminCountryController@store','files'=>true, 'class'=>'tg-formtheme tg-formregister']) !!}
    

                                             @csrf
                                                
                                                <fieldset>


                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-map"></i>

                                                        {!! Form::text('name',null,['placeholder'=>'Country Name*','class'=>'form-control rounded'])!!}

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>

                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-flag"></i>

                                                        {!! Form::file('flag',[ 'placeholder'=>'Country Flag*','class'=> 'form-control rounded']) !!}   
                                                       
                                                    </div>

                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-map"></i>

                                                        {!! Form::text('countryCode',null,['placeholder'=>'Country Code*','class'=>'form-control rounded'])!!}

                                                        @if ($errors->has('countryCode'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('countryCode') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>

                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-map"></i>

                                                        {!! Form::text('prefix',null,['placeholder'=>'Country Prefix*','class'=>'form-control rounded'])!!}

                                                        @if ($errors->has('prefix'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('prefix') }}</strong>
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
