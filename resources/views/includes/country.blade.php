@if(!empty($countries))
  <div id="owl-one" class="owl-carousel">
    @foreach($countries as $country)
      <a href="{{ route('packeg.country',$country->slug) }}">
        <div class="carousel-country-single">
          <div class="carousel-country-single-top">
            <i class="fas fa-globe"></i>
            <h3>Call Now</h3>
          </div>
          <div class="carousel-country-single-middle">
            <img src="{{ url('') }}/images/country/{{ $country->name ? $country->flag : 'http://placehold.it/' }}" >
          </div>
          <div class="carousel-country-single-bottom">
            <h3>{{str_limit($country->name,15)}}</h3>
            <i class="fas fa-map-marker-alt"></i>
            <h3>ANY WHERE</h3>
          </div>
        </div><!-- carousel-country-single -->
      </a>
      @endforeach
  </div>
@endif


