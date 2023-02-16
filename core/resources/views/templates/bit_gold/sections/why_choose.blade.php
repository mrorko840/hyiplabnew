@php
    $whyChooseCaption = getContent('why_choose.content', true);
    $whyChooseElements = getContent('why_choose.element', null, false, true);
@endphp
<section class="pt-120 pb-120 overlay--radial bg_img"
    data-background="{{ getImage('assets/images/frontend/why_choose/' . @$whyChooseCaption->data_values->image, '1920x1281') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span
                            class="font-weight-normal">{{ __(@$whyChooseCaption->data_values->heading_w) }}</span> <b
                            class="base--color">{{ __(@$whyChooseCaption->data_values->heading_c) }}</b></h2>
                    <p>{{ __(@$whyChooseCaption->data_values->sub_heading) }}</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row justify-content-center gy-4">
            @foreach ($whyChooseElements as $whyChooseElement)
                <div class="col-xl-4 col-md-6">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon base--color">
                                @php echo @$whyChooseElement->data_values->icon @endphp
                            </div>
                            <h4 class="choose-card__title base--color">{{ __(@$whyChooseElement->data_values->title) }}
                            </h4>
                        </div>
                        <p>{{ __(@$whyChooseElement->data_values->content) }}</p>
                    </div><!-- choose-card end -->
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="benefit-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-top  wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s"
                    style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="section-title">Everything you need to fast track your investment</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 align-items-center">
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s"
                style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: fadeInUp;">

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <div class="benefit-icon-inner">
                            <i class="fab fa-searchengin"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h4 class="title">Top technical analysis</h4>
                        <p class="mt-2">Architecto doloremque neque asperiores laboriosam voluptatum doloribus
                            aperiam.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <div class="benefit-icon-inner">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h4 class="title">High performance</h4>
                        <p class="mt-2">Architecto doloremque neque asperiores laboriosam voluptatum doloribus
                            aperiam.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <div class="benefit-icon-inner">
                            <i class="fas fa-history"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h4 class="title">Full expert support</h4>
                        <p class="mt-2">Architecto doloremque neque asperiores laboriosam voluptatum doloribus
                            aperiam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-xl-block d-none">
                <div class="benefit-thumb paroller" data-paroller-factor="0.2" data-paroller-factor-xs="0.0"
                    data-paroller-factor-sm="0.0" data-paroller-factor-md="0.0" data-paroller-factor-lg="0.0"
                    data-paroller-type="foreground" data-paroller-direction="vertical"
                    style="transform: translate(0px, 0px); transition: transform 0.1s ease 0s; will-change: transform;">
                    <img src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/images/benefit3.png"
                        alt="image">
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s"
                style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.9s; animation-name: fadeInUp;">

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <div class="benefit-icon-inner">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h4 class="title">Direct email and sms* signals</h4>
                        <p class="mt-2">Architecto doloremque neque asperiores laboriosam voluptatum doloribus
                            aperiam.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <div class="benefit-icon-inner">
                            <i class="fab fa-hornbill"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h4 class="title">Highly recommended</h4>
                        <p class="mt-2">Architecto doloremque neque asperiores laboriosam voluptatum doloribus
                            aperiam.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <div class="benefit-icon-inner">
                            <i class="fas fa-headphones-alt"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h4 class="title">Join a growing community</h4>
                        <p class="mt-2">Architecto doloremque neque asperiores laboriosam voluptatum doloribus
                            aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
