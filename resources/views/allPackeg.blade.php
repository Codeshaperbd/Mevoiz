@extends('layouts.app')

@section('content')

    <!-- slider start -->
    <section class="slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="assets/images/slider3.jpg" alt="slider">
          </div>
          <div class="item">
            <img src="assets/images/slider2.jpg" alt="slider">
          </div>
          <div class="item">
            <img src="assets/images/slider1.jpg" alt="slider">
          </div>
          <div class="item">
            <img src="assets/images/slider4.jpg" alt="slider">
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



    <!-- Packegs start -->
    <section class="packegs" style="border-top: 1px solid #ddd;">
      <h2 class="title" style="width: 330px;">Over {{count($packegs)}} Packegs</h2>
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

         
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tg-btnbox">
                {{ $packegs->links() }}
            </div>
        </div>

        </div>
      </div>
    </section>
    <!-- Packegs end -->



                 

        
@endsection
