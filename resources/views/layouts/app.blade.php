<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mevoiz') }}</title>

    <!-- fontawesome  -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Kenia|Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Owl carousel css -->
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    @yield('styles')
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/algolia.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <!-- header start -->
    <header>
      <!-- header top start -->
      <section class="header-top">
        <div class="container">
            <div class="col-md-6">
              <ul class="left">
                <li><a href="tel: +880 17 55 66 55 66"><i class="fas fa-phone"></i> +880 17 55 66 55 66</a></li>
                <li><a href="mailto: support@mevoiz.com"><i class="fas fa-envelope"></i> support@mevoiz.com</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="right">
                <li><a href="{{ route('packeg.shoppingCart') }}"><i class="fas fa-cart-plus"></i> Cart <span>{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>
                @if (Route::has('login'))
                    @auth
                        <div class="dropdown tg-themedropdown tg-userdropdown">
                            <a href="javascript:void(0);" id="tg-adminnav" data-toggle="dropdown">
                                <span class="tg-userdp"><img src="{{ url('/') }}/images/author/img-01.jpg" alt="image description"></span>
                                <span class="tg-name">Hi! {{Auth::user()->name }}</span>
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
                                <li>
                                    <a href="{{route('profile.index')}}">
                                        <i class="icon-cog"></i>
                                        <span>Profile Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('packeg.myPackeg')}}">
                                        <i class="icon-cog"></i>
                                        <span>My Order</span>
                                    </a>
                                </li>
                                <li>
                                    <!-- history login page -->
                                        <form target="_blank" name="loginForm" method="POST" action="http://206.225.85.24/MeVoice/Login.do;jsessionid=312DE72164CF2DE5F22AC685F1AED5CE" onsubmit="return validate();" id="form1" style="display: none;">

                                           <input name="username" class="inpFields" id="inpUserName" type="text"historyUserName value="{{Auth::user()->historyUserName}}" >
                                            <input name="password" value="{{Auth::user()->historyPassword}}" class="inpFields" id="inpPassword" type="password">
                                            <input  value="" type="submit">

                         
                                        </form>
                                        <!-- history login page -->
                                        <a href="javascript:{}" onclick="document.getElementById('form1').submit(); return false;" target="__blank">
                                            
                                            <span>History</span>
                                        </a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="icon-exit"></i>
                                        <span>{{ __('Logout') }}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li><a href="{{route('register')}}"><i class="fas fa-user-plus"></i> Sign up</a></li>
                        <li><a href="{{route('login')}}"><i class="fas fa-user"></i> Login</a></li>
                    @endauth
                @endif
              </ul>
            </div>
        </div>
      </section>
      <!-- header top end -->

      <!-- header bottom start -->
      <section class="header-bottom">
        <div class="container">
          <div class="row">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('/') }}/assets/images/logo.png" alt="logo">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      
                <div class="headersocial">
                  <ul>
                    <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  </ul>
                </div>          
                  <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::path() == 'howWorks' ? 'active' : '' }}"><a href="{{route('a.howWorks')}}">Help</a></li>
                    <li class="{{ Request::path() == 'allPackeg' ? 'active' : '' }}"><a href="{{ url('/allPackeg') }}">Packages</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </section>
      <!-- header top end -->
    </header>
    <!-- header end -->


    @yield('content')


    <section class="countryTab">
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tg-widget tg-widgettext">
                <div class="footerCountry">
                    <ul class="nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#*" aria-controls="*" role="tab" data-toggle="tab">*</a>
                        </li>
                        @foreach (range('A', 'Z') as $key=>$column)
                        <li role="presentation">
                            <a href="#item-{{++$key}}" aria-controls="item-{{++$key}}" role="tab" data-toggle="tab">{{$column}}</a>
                        </li>
                        @endforeach

                    </ul>



                    <div class="tab-content">
                        <div role="tabpanel" class="col-md-offset-1 tab-pane active" id="*">
                            <div class="col-md-4">
                                <div class="showCountry">

                                    Bangladesh
                                </div>
                            </div>
                        </div>
                        @foreach (range('A', 'Z') as $key=>$column)
                            <div role="tabpanel" class="col-md-offset-1 tab-pane" id="item-{{++$key}}">
                                @foreach ($countries  as $country)
                                    @if($country->prefix == $column)
                                        <div class="col-md-4">
                                            <div class="showCountry">
                                                <a href="{{ route('packeg.country',$country->slug) }}">
                                                    {{$country->name}}
                                                </a>

                                            </div>
                                        </div>
                                    @endif    
                                @endforeach

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>


    <!-- footer area -->
    <footer class="footer">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="footer-left">
                <ul>
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ route('a.howWorks') }}">Help</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                  <li><a href="{{ route('allPackeg') }}">Packegs</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="footer-right-wrap">
                <div class="footer-right">
                  <h2>Want to Receive a NEWS LETER?</h2>
                  <form method="post" action="{{ route('subscribe.create') }}"> 
                    @csrf
                    <input type="email" name="email" placeholder="Your Email Here">
                    <button type="submit">SEND ME A NEWS LETTER</button>
                  </form>
                    @if(Session::has('subscribe'))
                     <h2 style="margin-bottom: 20px;text-align: center;"> {{session('subscribe')}}</h2>
                    @endif
                </div>
                <div class="footer-social">
                  <h3>Follow Us On</h3>
                  <ul>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>  
    </footer>
    <div class="copyright">All Right Reserved &copy; <a href="http://codeshaper.net/" target="blank">Codeshaper</a> </div>


    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>



    <!-- Scripts -->
    {{-- <script src="{{ asset('js/libs.js') }}"></script> --}}
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
    <script src="{{ asset('js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci') }}"></script>
    <script src="{{ asset('js/responsivethumbnailgallery.html') }}"></script>




    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <!-- Initialize autocomplete menu -->


    <script type="text/javascript">
      $('.counter').counterUp();
    </script>
    <script type="text/javascript">
      $('#owl-one').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:true,
          margin:0,
          navText:['<img src="assets/images/angle-left.png">','<img src="assets/images/angle-right.png">'],
          responsiveClass:true,
          responsive:{
              0:{
                  items:2,
                  margin:20,
                  nav:false
              },
              600:{
                  items:3,
                  nav:false
              },
              1000:{
                  items:6,
                  nav:true,
                  loop:true
              }
          }
      });
    </script>
    <script type="text/javascript">
      $('#owl-two').owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:true,
          margin:0,
          navText:['<img src="assets/images/angle-left.png">','<img src="assets/images/angle-right.png">'],
          responsiveClass:true,
          responsive:{
              0:{
                  items:1,
                  nav:true
              },
              600:{
                  items:3,
                  nav:false
              },
              1000:{
                  items:4,
                  nav:true,
                  loop:true
              }
          }
      });
    </script>


    <script type="text/javascript">

        (function() {
            var client = algoliasearch('9NA0CN8AY1', '683f1710f5a5e0ed9beed50198d43b3a');
            var index = client.initIndex('name');
            var enterPressed = false;
            //initialize autocomplete on search input (ID selector must match)
            autocomplete('#aa-search-input',
                { hint: false }, {
                    source: autocomplete.sources.hits(index, { hitsPerPage: 10 }),
                    //value to be displayed in input control after user's suggestion selection
                    displayKey: 'name',
                    //hash of templates used when rendering dataset
                    templates: {
                        //'suggestion' templating function used to render a single suggestion
                        suggestion: function (suggestion) {
                            const markup = `
                                <div class="algolia-result-wrap">
                                    <div class="algolia-result">
                                        <span>
                                            <img src="{{ url('') }}/images/country/${suggestion.flag}" alt="img" class="algolia-thumb">
                                            ${suggestion._highlightResult.name.value}
                                        </span>
                                    </div>
                                    <div class="algolia-details">
                                        <span>( ${suggestion._highlightResult.countryCode.value} )</span>
                                    </div>
                                </div>
                            `;

                            return markup;
                        },
                        empty: function (result) {
                            return 'Sorry, we did not find any results for "' + result.query + '"';
                        }
                    }
                }).on('autocomplete:selected', function (event, suggestion, dataset) {
                    window.location.href = window.location.origin + '/mevoiz/countryPackeg/' + suggestion.slug;
                    enterPressed = true;
                }).on('keyup', function(event) {
                    if (event.keyCode == 13 && !enterPressed) {
                        window.location.href = window.location.origin + '/search-algolia?q=' + document.getElementById('aa-search-input').value;
                    }
                });
        })();

    </script>
    @yield('scripts')


</body>
</html>
