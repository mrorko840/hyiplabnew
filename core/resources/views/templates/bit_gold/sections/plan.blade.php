@php
    $planCaption = getContent('plan.content', true);
    $plans = App\Models\Plan::where('status', 1)
        ->where('featured', 1)
        ->get();
    $gatewayCurrency = null;
    if (auth()->check()) {
        $gatewayCurrency = App\Models\GatewayCurrency::whereHas('method', function ($gate) {
            $gate->where('status', 1);
        })
        ->with('method')
        ->orderby('method_code')
        ->get();
    }
@endphp

<section class="plan-section pt-120 pb-120 section-bg"
    style="background-image: url('assets/templates/bit_gold/images/bg/plan-1.jpg')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-top  wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s"
                    style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="section-title">{{ __(@$planCaption->data_values->heading_w) }} {{ __(@$planCaption->data_values->heading_c) }}</h2>
                    <p>{{ __(@$planCaption->data_values->sub_heading) }}</p>
                </div>
            </div>
        </div>

        <div class="row gy-4 items-wrapper justify-content-center">
          @include($activeTemplate . 'partials.plan', ['plans' => $plans])
        </div>
    </div>
</section>


{{-- <section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span
                            class="font-weight-normal">{{ __(@$planCaption->data_values->heading_w) }}</span> <b
                            class="base--color">{{ __(@$planCaption->data_values->heading_c) }}</b></h2>
                    <p>{{ __(@$planCaption->data_values->sub_heading) }}</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row gy-4 justify-content-center">
            @include($activeTemplate . 'partials.plan', ['plans' => $plans])
        </div>
    </div>
</section> --}}