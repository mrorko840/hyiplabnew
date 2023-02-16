@extends($activeTemplate . 'layouts.frontend')
@section('content')
    @php
        $banner = getContent('banner.content', true);
    @endphp
    <!-- hero start -->
    <section class="banner-section paroller"
        style="background-image: url('assets/images/frontend/banner/{{@$banner->data_values->image}}'); background-position: center 0px;"
        data-paroller-factor="0.4" data-paroller-factor-sm="0.2" data-paroller-factor-xs="0.1">
        <div class="banner-lady"><img src="{{asset('assets/templates/bit_gold/images/lady.png')}}"
                alt="image"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="banner-content paroller" data-paroller-factor="0.4" data-paroller-factor-sm="0.2"
                        data-paroller-factor-xs="0.1" style="background-position: center -80px;">
                        <h2 class="banner-title wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s"
                            style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            {{ __(@$banner->data_values->heading_w) }} {{ __(@$banner->data_values->heading_c) }}
                        </h2>
                        <p class="banner-description mt-3 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.5s"
                            style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.5s; animation-name: fadeInUp;">
                            {{ __(@$banner->data_values->sub_heading) }}
                        </p>
                        <div class="mt-4 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.7s"
                            style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.7s; animation-name: fadeInUp;">
                            <a href="{{ __(@$banner->data_values->button_link) }}" class="btn main-btn me-3">
                                <span>{{ __(@$banner->data_values->button_name) }}</span>
                            </a>
                            <a href="#aboutUs" class="btn main-btn2 bg-white text-dark">
                                <span>Know more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <div class="counter-section">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-between">
                <div class="col-lg-2 text-lg-start text-center">
                    <h3 class="title">Investment Overview</h3>
                </div>
                <div class="col-lg-9">
                    <div class="row counter-wrapper justify-content-center">
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h3 class="counter-title">$20 million</h3>
                                <p class="caption">Total deposit in October 2022</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h3 class="counter-title">20K</h3>
                                <p class="caption">Total investors in 2022</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h3 class="counter-title">$102.5 million</h3>
                                <p class="caption">Total withdraw in October 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <section class="hero bg_img" data-background="{{ getImage('assets/images/frontend/banner/'.@$banner->data_values->image,'1920x896') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-5">
        <div class="hero__content">
          <h2 class="hero__title"><span class="text-white font-weight-normal">{{ __(@$banner->data_values->heading_w) }}</span> <b class="base--color">{{ __(@$banner->data_values->heading_c) }}</b></h2>
          <p class="text-white f-size-18 mt-3">{{ __(@$banner->data_values->sub_heading) }}</p>
          <a href="{{ __(@$banner->data_values->button_link) }}" class="btn--base text-uppercase font-weight-600 mt-4">{{ __(@$banner->data_values->button_name) }}</a>
        </div>
      </div>
    </div>
  </div>
</section> --}}


    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include($activeTemplate . 'sections.' . $sec)
        @endforeach
    @endif
@endsection
