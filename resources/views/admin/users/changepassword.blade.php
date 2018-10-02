@extends('layouts.userDashboard')

@section('content')

        <!-- Dashboard banner-->
        <div class="tg-dashboardbanner">
            <h1>Change Password</h1>
            <ol class="tg-breadcrumb">
                <li><a href="javascript:void(0);">Main</a></li>
                <li class="tg-active">Change Password</li>
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
                                    <h2>{{ __('Change Password') }}</h2>
                                </div>
                                <div class="tg-haslayout">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                            <form class="tg-formtheme tg-formregister" method="POST" action="{{ route('changePassword') }}">

                                                @csrf
                                                
                                                <fieldset>


                                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }} tg-inputwithicon">
                                                        <i class="icon-lock"></i>

                                                        <input id="current-password" type="password" class="form-control" name="current-password" placeholder="Current Password*" required>

                                                        @if ($errors->has('current-password'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('current-password') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>

                                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }} tg-inputwithicon">
                                                        <i class="icon-lock"></i>

                                                        <input id="new-password" type="password" class="form-control" name="new-password" required placeholder="Password*">
				         
				                                        @if ($errors->has('new-password'))
				                                            <span class="help-block">
				                                                <strong>{{ $errors->first('new-password') }}</strong>
				                                            </span>
				                                        @endif

                                                    </div>

                                                    <div class="form-group tg-inputwithicon">
                                                        <i class="icon-lock"></i>

                                                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required placeholder="Retype Password*">
				                                       
                                                    </div>
                                                    <button class="tg-btn" type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </fieldset>
                                            </form>
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
