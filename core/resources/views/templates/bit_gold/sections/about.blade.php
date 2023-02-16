@php
    $aboutCaption = getContent('about.content', true);
@endphp
<section id="aboutUs" class="about-section pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-lg-6 col-md-10">
                <div class="about-thumb">
                    <img src="{{ asset('assets/templates/bit_gold/images/about/laptop.png') }}" alt="image">
                    <div class="line one"></div>
                    <div class="line two"></div>
                    <div class="line three"></div>
                </div>
            </div>
            <div class="col-lg-6 ps-xl-5 p-lg-4 about-content wow fadeInUp" data-wow-duration="0.5s"
                data-wow-delay="0.5s"
                style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
                <h2 class="section-title">{{ __(@$aboutCaption->data_values->heading_w) }} {{ __(@$aboutCaption->data_values->heading_c) }}</h2>
                <p class="fs--18px mt-3">
                  @php echo __(@nl2br($aboutCaption->data_values->content))  @endphp
                </p>

                <a href="{{ __(@$aboutCaption->data_values->button_link) }}" class="btn main-btn mt-4">
                  {{ __(@$aboutCaption->data_values->button_name) }}
                </a>
            </div>
        </div>
    </div>
</section>


{{-- <section class="about-section pt-120 pb-120 bg_img"
    data-background="{{ __(getImage('assets/images/frontend/about/' . @$aboutCaption->data_values->image, '1920x1281')) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="about-content">
                    <h2 class="section-title mb-3"><span
                            class="font-weight-normal">{{ __(@$aboutCaption->data_values->heading_w) }}</span> <b
                            class="base--color">{{ __(@$aboutCaption->data_values->heading_c) }}</b></h2>
                    <p>@php echo __(@nl2br($aboutCaption->data_values->content))  @endphp</p>
                    <a href="{{ __(@$aboutCaption->data_values->button_link) }}"
                        class="btn--base mt-4">{{ __(@$aboutCaption->data_values->button_name) }}</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}