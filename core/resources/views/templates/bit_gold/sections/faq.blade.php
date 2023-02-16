@php
    $faqCaption = getContent('faq.content', true);
    $faqElements = getContent('faq.element', false, null, true);
@endphp
<section class="faq-section pt-120 pb-120 section-bg"
    style="background-image: url('assets/templates/bit_gold/images/bg/bg3.jpg')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-top">
                    <h2 class="section-title">{{ __(@$faqCaption->data_values->heading_w) }} {{ __(@$faqCaption->data_values->heading_c) }}</h2>
                    <p>{{ __(@$faqCaption->data_values->sub_heading) }}</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-3">
            <div class="col-md-10">
                <div class="accordion" id="accordionExample">
                  @foreach ($faqElements as $faqElement)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $loop->index }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $loop->index }}" aria-expanded="false" aria-controls="collapseSix">
                                {{ __($faqElement->data_values->question) }}
                            </button>
                        </h2>
                        <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $loop->index }}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{ __(@$faqElement->data_values->answer) }}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title"><span
                            class="font-weight-normal">{{ __(@$faqCaption->data_values->heading_w) }}</span> <b
                            class="base--color">{{ __(@$faqCaption->data_values->heading_c) }}</b></h2>
                    <p>{{ __(@$faqCaption->data_values->sub_heading) }}</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion cmn-accordion" id="accordionExample">
                    @foreach ($faqElements as $faqElement)
                        <div class="card">
                            <div class="card-header" id="heading{{ $loop->index }}">
                                <h2 class="mb-0">
                                    <button class="btn w-100 text-start collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}"
                                        aria-expanded="false" aria-controls="collapse{{ $loop->index }}">
                                        <i class="las la-question-circle"></i>
                                        <span>{{ __($faqElement->data_values->question) }}</span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{ $loop->index }}" class="collapse"
                                aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionExample">
                                <div class="card-body">{{ __(@$faqElement->data_values->answer) }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}
