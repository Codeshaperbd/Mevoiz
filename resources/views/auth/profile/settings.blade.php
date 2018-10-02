@extends('layouts.app')

@section('content')


        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">

                    <div id="tg-content" class="tg-content">
                        <div class="col-md-6">
                            @if (session('update_user'))
                                <div class="alert alert-success">
                                    {{ session('update_user') }}
                                </div>
                            @endif
                            <div class="tg-logingarea">
                                <h2>{{ __('Profile Settings') }}</h2>
                                {!! Form::model($user, ['method'=>'PATCH','action'=>['Auth\UserController@update',$user->id],'files'=>true, 'class'=>'tg-formtheme tg-formloging']) !!}

                                    @csrf
                                    <fieldset>

                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" placeholder="Email*" required disabled>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone }}" placeholder="phone Number With Country Code*" required autofocus>

                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <button type="submit" class="tg-btn submit">
                                            {{ __('Save Change') }}
                                        </button>
                                    </fieldset>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="col-md-6">
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
                            <div class="tg-logingarea">
                                <h2>{{ __('Change Password') }}</h2>


                                <form class="tg-formtheme tg-formloging" method="POST" action="{{ route('passowrdChange') }}">

                                    @csrf


                                    <fieldset>

                                        <div class="form-group">
                                            <input id="current-password" type="password" class="form-control" name="current-password" placeholder="Current Password*" required>

                                            @if ($errors->has('current-password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('current-password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <input id="new-password" type="password" class="form-control" name="new-password" required placeholder="Password*">
             
                                            @if ($errors->has('new-password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new-password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required placeholder="Retype Password*">
                                        </div>

                                        <button type="submit" class="tg-btn submit">
                                            {{ __('Save Change') }}
                                        </button>
                                    </fieldset>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </main>

@endsection
