@extends('layouts.userDashboard')

@section('content')

        <!-- Dashboard banner-->
        <div class="tg-dashboardbanner">
            <h1>Profile Settings</h1>
            <ol class="tg-breadcrumb">
                <li><a href="javascript:void(0);">Main</a></li>
                <li class="tg-active">Profile Settings</li>
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

                                @if (session('adminUpdate'))
                                    <div class="alert alert-danger">
                                        {{ session('adminUpdate') }}
                                    </div>
                                @endif

                                <div class="tg-title">
                                    <h2>{{ __('Profile Update') }}</h2>
                                </div>
                                <div class="tg-haslayout">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                            {!! Form::model($admin, ['method'=>'PATCH','action'=>['Admin\AdminUsersController@update',$admin->id],'files'=>true, 'class'=>'tg-formtheme tg-formregister']) !!}
                                                @csrf
                                                <fieldset>

                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-pen"></i>

                                                        {!! Form::text('name',null,['id'=>'name','class'=>'form-control rounded'])!!}

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-envelope"></i>

                                                         {!! Form::text('email',null,['class'=> 'form-control rounded']) !!}  

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('email') }}</strong>
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
