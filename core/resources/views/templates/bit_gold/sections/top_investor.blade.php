@php
    $topInvestor = \App\Models\Invest::with('user')
        ->selectRaw('SUM(amount) as totalAmount, user_id')
        ->orderBy('totalAmount', 'desc')
        ->groupBy('user_id')
        ->limit(8)
        ->get();
    
    $top_investorContent = getContent('top_investor.content', true);
@endphp
<section class="pt-120 pb-120 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span
                            class="font-weight-normal">{{ __(@$top_investorContent->data_values->heading_w) }}</span> <b
                            class="base--color">{{ __(@$top_investorContent->data_values->heading_c) }}</b></h2>
                    <p>{{ __(@$top_investorContent->data_values->sub_heading) }}</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row justify-content-center gy-4">
            @foreach ($topInvestor as $k => $data)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor-card border-radius--5">
                        <span class="investor-card__number">{{ ordinal($loop->iteration) }}</span>
                        <h5 class="investor-card__name">{{ $data->user->fullname }}</h5>
                        <h6 class="name">{{ @json_decode(json_encode($data->user->username)) }}</h6>
                        <span class="amount f-size-14">@lang('Investment') -
                            {{ $general->cur_sym }}{{ showAmount($data->totalAmount) }}</span>
                    </div><!-- investor-card end -->
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="investor-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-top  wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s"
                    style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="section-title">Our Top Investors</h2>
                </div>
            </div>
        </div>
        <div class="investor-slider slick-initialized slick-slider">





            <div class="slick-list draggable">
                <div class="slick-track"
                    style="opacity: 1; width: 3146px; transform: translate3d(-1452px, 0px, 0px); transition: transform 1500ms cubic-bezier(0.645, 0.045, 0.355, 1) 0s;">
                    <div class="single-slide slick-slide slick-cloned" style="width: 242px;" data-slick-index="-3"
                        id="" aria-hidden="true" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Rafael Andrade</h4>
                                <p class="mt-2">Invest amount <span class="site-color">324.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-cloned" style="width: 242px;" data-slick-index="-2"
                        id="" aria-hidden="true" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Test Test</h4>
                                <p class="mt-2">Invest amount <span class="site-color">200.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-cloned" style="width: 242px;" data-slick-index="-1"
                        id="" aria-hidden="true" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Anurag Sahoo</h4>
                                <p class="mt-2">Invest amount <span class="site-color">200.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide" style="width: 242px;" data-slick-index="0" aria-hidden="true"
                        tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Muhammad Ahmad</h4>
                                <p class="mt-2">Invest amount <span class="site-color">700.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide" style="width: 242px;" data-slick-index="1" aria-hidden="true"
                        tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Test Test</h4>
                                <p class="mt-2">Invest amount <span class="site-color">500.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide" style="width: 242px;" data-slick-index="2"
                        aria-hidden="true" tabindex="0">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Rafael Andrade</h4>
                                <p class="mt-2">Invest amount <span class="site-color">324.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-current slick-active" style="width: 242px;"
                        data-slick-index="3" aria-hidden="false" tabindex="0">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Test Test</h4>
                                <p class="mt-2">Invest amount <span class="site-color">200.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-active" style="width: 242px;" data-slick-index="4"
                        aria-hidden="false" tabindex="0">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Anurag Sahoo</h4>
                                <p class="mt-2">Invest amount <span class="site-color">200.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-cloned slick-active" style="width: 242px;"
                        data-slick-index="5" id="" aria-hidden="false" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Muhammad Ahmad</h4>
                                <p class="mt-2">Invest amount <span class="site-color">700.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-cloned" style="width: 242px;" data-slick-index="6"
                        id="" aria-hidden="true" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Test Test</h4>
                                <p class="mt-2">Invest amount <span class="site-color">500.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-cloned" style="width: 242px;" data-slick-index="7"
                        id="" aria-hidden="true" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Rafael Andrade</h4>
                                <p class="mt-2">Invest amount <span class="site-color">324.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-cloned" style="width: 242px;" data-slick-index="8"
                        id="" aria-hidden="true" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Test Test</h4>
                                <p class="mt-2">Invest amount <span class="site-color">200.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide slick-slide slick-cloned" style="width: 242px;" data-slick-index="9"
                        id="" aria-hidden="true" tabindex="-1">
                        <div class="investor-item">
                            <div class="investor-thumb">
                                <div class="investor-thumb-inner">
                                    <img src="" alt="image">
                                </div>
                            </div>
                            <div class="investor-content">
                                <h4 class="name">Anurag Sahoo</h4>
                                <p class="mt-2">Invest amount <span class="site-color">200.00 USD</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
