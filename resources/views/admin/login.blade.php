@extends('layouts.app')

@section('content')

    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
        <figure data-vide-bg="poster: url()/images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
            <figcaption>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-bannercontent">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
        <div class="tg-breadcrumbarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="tg-active">Login/Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-content" class="tg-content">
                    <div class="tg-loginsignup">
                        <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">

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
                                <form method="POST" action="{{ route('admin.login') }}" class="tg-formtheme tg-formloging">
                                    @csrf
                                    <fieldset>

                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>
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
                                        </div>
                                        <button type="submit" class="tg-btn">
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
