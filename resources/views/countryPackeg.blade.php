@extends('layouts.app')

@section('styles')

<style type="text/css">

    .packegPadder h2 {
        margin: 0;
    }
    .padderBtn img {
        width: 100%;
    }
</style>

@endsection

@section('content')


    <!-- slider start -->
    <section class="slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            @if(!empty($cntryName->CountryBanner->banner))
            <img src="{{url('/')}}/images/banner/{{$cntryName->CountryBanner->banner}}" alt="slider" style="height: 75vh">
            @else
            <img src="assets/images/slider1.jpg" alt="slider" style="height: 75vh">
            @endif
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

          @include('includes.country')

          <div class="featured" style="margin-top: 20px">
            <h2>Our All Packegs For {{ $cntryName->name }}</h2>
          </div>
          <!-- featured end -->
      </div>
    </section>
    <!-- country carousel end -->




        <!--************************************
                Home Slider End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">

  

            <!--************************************
                    Featured Ads Start
            *************************************-->
            <section class="tg-sectionspace tg-haslayout" style="padding: 50px 0px;">
                <div class="container">
                    <div class="row">
                        @if(count($packegs) > 0)
                        <div class="tg-ads-post">

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
                        @else 
                            <h1>Sorry</h1>
                        @endif
                    </div>
                </div>
            </section>
            <!--************************************
                    Featured Ads End
            *************************************-->


        </main>
        <!--************************************
                Main End
        *************************************-->
        
@endsection
