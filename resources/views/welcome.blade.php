@extends('layouts.app')

@section('content')

    @if(Session::has('success'))
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div id="charge-messasge" class="alert alert-success">
                    {{ Session::get('success')}}
                </div>
            </div>
        </div>
    @endif

    <!-- slider start -->
    <section class="slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="assets/images/slider1.jpg" alt="slider">
          </div>
          <div class="item">
            <img src="assets/images/slider4.jpg" alt="slider">
          </div>
          <div class="item">
            <img src="assets/images/slider2.jpg" alt="slider">
          </div>
          <div class="item">
            <img src="assets/images/slider3.jpg" alt="slider">
          </div>
          <div class="slider-content">
            <h2>Where Do You Want To Call ?</h2>


            @include('includes.search')


          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <i class="fas fa-angle-left"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <i class="fas fa-angle-right"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- slider end -->



    <!-- country carousel start -->
    <section class="carousel-country">
      <div class="container">

          <!-- country carousel start -->
          @include('includes.country')
          <!-- country carousel start -->

          <div class="featured" style="margin-top: 20px">
            <h2>FEATURED PACKAGES FOR ALL OVER THE WORLD</h2>
          </div>
          <!-- featured end -->

          <div class="intro">
            <div class="col-md-9">
              <div class="row">
                <div class="intro-left">
                  <img src="{{ url('') }}/assets/images/book-cover.png" alt="book-cover">
                  <p>ONE DIRECTORY is the best way to find great local businesses!<br>
                   What will you uncover in your neighborhood?</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row">
                  <a href="{{ route('register') }}">
                    <div class="intro-right">
                        <i class="fas fa-user-plus"></i>
                        <p>Join Us For Free</p>
                    </div>
                  </a>
              </div>
            </div>
          </div>
          <!-- featured end -->
      </div>
    </section>

    <!-- country carousel end -->


    <!-- About us start -->
    <section class="abou-us">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-us-left">
            <img src="assets/images/ab1.jpg" alt="about">
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-us-right">
            <h2>ABOUT US</h2>
            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
              etae magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
              ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillumolore 
              eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non prident, 
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem santium 
              doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inven
              tore veritatis et quasi architecto beatae.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem santium 
              doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inven
              tore veritatis et quasi architecto beatae.</p>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- About us end -->


    <!-- Packegs start -->
    <section class="packegs">
      <h2 class="title">OUR PACKAGES</h2>
      <div class="container">
        <div class="row">

          <div class="packeg-wrap">
                @foreach($packegs as $packeg)
                    <div class="col-md-2 col-sm-3 col-xs-6">
                      <div class="packeg-single one">
                        <div class="title"><h2>Call Now</h2></div>
                        @php 
                            $total = $packeg->amount / $packeg->point;
                            $min = number_format($total);
                        @endphp
                        <div class="price"><h2><i class="fas fa-dollar-sign"></i> {{$packeg->amount}}</h2></div>
                        <div class="minutes"><h2> {{$min}}<sub>Minutes</sub></h2></div>
                        <div class="image">
                          <img src="{{ url('') }}/images/country/{{ $packeg->country_id ? $packeg->Country->flag : 'http://placehold.it/' }}" >
                        </div>
                        <div class="country-name"><h2> {{$packeg->Country->name}}</h2></div>
                        <div class="signup">
                          <a href="{{ route('packeg.addToCart',$packeg->id) }}"> Add To Cart</a>
                        </div>
                      </div>
                    </div><!-- packeg end -->
                @endforeach
          </div>

          <a href="{{ url('/allPackeg') }}" class="view-packeg">View All Packegs</a>

        </div>
      </div>
    </section>
    <!-- Packegs end -->


    <!-- counter up start -->
    <section class="counter-area">
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <div class="single-counter">
              <img src="assets/images/c1.png" alt="image" />
              <h2>Happy Customers</h2>
              <p class="counter">{{count($users)}}</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-counter">
              <img src="assets/images/c2.png" alt="image" />
              <h2>Total Packegs</h2>
              <p class="counter">{{count($packegs)}}</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-counter">
              <img src="assets/images/c3.png" alt="image" />
              <h2>Total Country</h2>
              <p class="counter">{{count($countries)}}</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-counter">
              <img src="assets/images/c4.png" alt="image" />
              <h2>Packeg Category</h2>
              <p class="counter">6</p>
            </div>
          </div>
          {{-- <div class="col-md-2">
            <div class="single-counter">
              <img src="assets/images/c5.png" alt="image" />
              <h2>AWARED</h2>
              <p class="counter">155</p>
            </div>
          </div>
          <div class="col-md-2">
            <div class="single-counter">
              <img src="assets/images/c6.png" alt="image" />
              <h2>AWARED</h2>
              <p class="counter">155</p>
            </div>
          </div> --}}

        </div>
      </div>
    </section>
    <!-- counter up end  -->



    <!-- About us start -->
    <section class="abou-us">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-us-left">
            <img src="assets/images/about.jpg" alt="about">
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-us-right">
            <h2>OUR WORK PROCESS</h2>
            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
              etae magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
              ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillumolore 
              eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non prident, 
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem santium 
              doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inven
              tore veritatis et quasi architecto beatae.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem santium 
              doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inven
              tore veritatis et quasi architecto beatae.</p>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- About us end -->




    <!-- Packegs start -->
    <section class="partnar">
      <h2 class="title">OUR PARTNERS</h2>
      <div class="container">
        <div class="row">

          <div id="owl-two" class="owl-carousel">
              <a href="#">
                <img src="assets/images/co1.png" alt="images">
              </a>
              <a href="#">
                <img src="assets/images/co2.png" alt="images">
              </a>
              <a href="#">
                <img src="assets/images/co3.png" alt="images">
              </a>
              <a href="#">
                <img src="assets/images/co4.png" alt="images">
              </a>
              <a href="#">
                <img src="assets/images/co1.png" alt="images">
              </a>
              <a href="#">
                <img src="assets/images/co2.png" alt="images">
              </a>
              <a href="#">
                <img src="assets/images/co3.png" alt="images">
              </a>
              <a href="#">
                <img src="assets/images/co1.png" alt="images">
              </a>
              
          </div>

        </div>
      </div>
    </section>
    <!-- Packegs end -->

        
@endsection
