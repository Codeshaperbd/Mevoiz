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

                              @if(session('is_active'))
                                <div class="sessionMessage">
                                    {{session('is_active')}}
                                </div>
                              @endif
                              @if(session('verified_user'))
                                <div class="sessionMessage">
                                    {{session('verified_user')}}
                                </div>
                              @endif

                            <div class="tg-logingarea">
                                <h2>{{ __('Login') }}</h2>
                                <form method="POST" action="{{ route('login') }}" class="tg-formtheme tg-formloging">
                                    @csrf
                                    <fieldset>

                                        <div class="form-group">
                                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Or Phone" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-checkbox">

                                                <input id="tg-rememberme" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                                <label for="tg-rememberme">{{ __('Remember Me') }}</label>
                                            </div>
                                            <a class="tg-forgetpassword" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                        </div>
                                        <button type="submit" class="tg-btn submit">
                                            {{ __('Login') }}
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
    <!--************************************
            Main End
    *************************************-->
        
@endsection
