@extends('layouts.app')

@section('content')


        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-content" class="tg-content">

                        <div class="tg-loginsignup">
                            <div class="col-md-8 col-md-offset-3">


                                <div class="tg-logingarea">
                                    <h2>{{ __('Register Now') }}</h2>
                                    <form class="tg-formtheme tg-formloging" method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <fieldset>

                                                        <div class="form-group tg-inputwithicon">
                                                            <i class="icon-envelope"></i>

                                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email*" required>

                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group tg-inputwithicon">
                                                            <i class="icon-phone"></i>

                                                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="phone Number With Country Code*" required autofocus>

                                                            @if ($errors->has('phone'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group tg-inputwithicon">
                                                            <i class="icon-lock"></i>
                                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password*" required>

                                                            @if ($errors->has('password'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group tg-inputwithicon">
                                                            <i class="icon-lock"></i>
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype Password*">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="tg-checkbox">
                                                                <input id="tg-agree" type="checkbox" name="agree" value="agree">
                                                                <label for="tg-agree">By registering, you accept our <a href="javascript:void(0);">Terms &amp; Conditions</a></label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="tg-btn submit" >
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
        </main>

@endsection
