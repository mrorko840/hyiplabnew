<div class="container">
    <div class="row">
        <div class="col-auto">
            <form id="curFormjq" action="{{ route('storeCur.session') }}" method="post">
                @csrf
                <select name="currency" class="form-select cngCurrency" id="cngCurrency">
                    <option @if($general->cur_text==session()->get('currency_name')) selected @endif value="{{ $general->cur_text }}">{{ $general->cur_text }}</option>
                    @foreach ($currencys as $item)
                    <option @if($item->currency==session()->get('currency_name')) selected @endif value="{{ $item->currency }}">{{ $item->currency }}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
</div> 

@foreach ($plans as $k => $data)
    @php
        $timeName = \App\Models\TimeSetting::where('time', $data->time)->first();
    @endphp

    <div class="col-xl-12 col-md-6">
        <div class="plan-item">
            <div class="plan-el">
                <img src="{{asset('assets/templates/bit_gold/images/bg/plan3.png')}}"
                    alt="image">
            </div>
            <div class="plan-name-area">
                <h3 class="plan-name mb-2">{{ __($data->name) }}</h3>
                <span class="plan-status">{{ __($timeName->name) }}</span>
            </div>
            <div class="plan-fatures">
                <ul class="plan-list">                        
                    @if ($data->fixed_amount == 0)
                        <li>
                            <span class="caption">Minimum </span>
                            <span class="details">
                                {{ showAmount($data->minimum*(session()->has('currency_rate')?session()->get('currency_rate'):1)) }} 
                                @if (session()->has('currency_name'))
                                    {{ session()->get('currency_name') }}
                                @else
                                    {{ @$general->cur_text }}
                                @endif
                            </span>
                        </li>
                        <li>
                            <span class="caption">Maximun </span>
                            <span class="details">
                                {{ showAmount($data->maximum*(session()->has('currency_rate')?session()->get('currency_rate'):1)) }} 
                                @if (session()->has('currency_name'))
                                    {{ session()->get('currency_name') }}
                                @else
                                    {{ @$general->cur_text }}
                                @endif
                            </span>
                        </li>
                    @else
                        <li>
                            <span class="caption">Amount </span>
                            <span class="details">
                                {{ showAmount($data->fixed_amount*(session()->has('currency_rate')?session()->get('currency_rate'):1)) }} 
                                @if (session()->has('currency_name'))
                                    {{ session()->get('currency_name') }}
                                @else
                                    {{ @$general->cur_text }}
                                @endif
                            </span>                                
                        </li>
                    @endif

                    <li>
                        <span class="caption">For </span>
                        <span class="details"> 
                            @if ($data->lifetime == 0)
                                {{ __($data->repeat_time) }} {{ __($timeName->name) }}
                            @else
                                @lang('Lifetime')
                            @endif
                        </span>
                    </li>
                    <li>
                        @if ($data->lifetime == 0)
                        <span class="caption"> Total </span>
                        <span class="details"> 
                            {{ __($data->interest * $data->repeat_time) }}{{ $data->interest_type == 1 ? '%' : ' ' . __($general->cur_text) }}
                            @if ($data->capital_back == 1)
                                +
                                <span class="badge badge--success">@lang('Capital')</span>
                            @endif
                            @else
                                <span class="caption">Lifetime Earning </span>
                            @endif
                        </span>
                    </li>

                    <li>
                        <span class="caption">Capital back </span>
                        <span class="details"> Yes</span>
                    </li>
                </ul>
            </div>
            <div class="plan-rio">
                <h5>Return</h5>
                <p class="plan-amount mb-2">
                    {{ showAmount($data->interest) }}{{ $data->interest_type == 1 ? '%' : ' ' . __($general->cur_text) }}
                </p>
            </div>
            <div class="plan-action">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#investModal" data-plan="{{ $data }}" class="btn main-btn plan-btn w-100 investModal">Invest now</a>
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#investModal" data-plan="{{ $data }}" class="btn bg-transparent plan-btn balance w-100 mt-2 investModal">Invest using balance</a>

                {{-- <button class="btn bg-transparent plan-btn balance w-100 mt-2"
                    data-plan="{&quot;id&quot;:9,&quot;plan_name&quot;:&quot;Daly&quot;,&quot;amount_type&quot;:&quot;1&quot;,&quot;minimum_amount&quot;:&quot;2000.00000000&quot;,&quot;maximum_amount&quot;:&quot;7000.00000000&quot;,&quot;amount&quot;:&quot;1.00000000&quot;,&quot;return_interest&quot;:&quot;5000.00000000&quot;,&quot;interest_status&quot;:&quot;percentage&quot;,&quot;return_for&quot;:&quot;1&quot;,&quot;how_many_time&quot;:&quot;30&quot;,&quot;every_time&quot;:&quot;5&quot;,&quot;capital_back&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;invest_limit&quot;:&quot;2&quot;,&quot;created_at&quot;:&quot;2022-04-16T11:22:25.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-11-26T03:41:29.000000Z&quot;,&quot;time&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;Day&quot;,&quot;time&quot;:&quot;24&quot;,&quot;created_at&quot;:&quot;2022-02-27T08:46:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-04-16T10:58:43.000000Z&quot;}}"
                    data-url="">Invest using balance
                </button> --}}

            </div>
        </div>
    </div>
@endforeach

{{-- @foreach ($plans as $k => $data)
    @php
        $timeName = \App\Models\TimeSetting::where('time', $data->time)->first();
    @endphp
    <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="package-card text-center bg_img"
            data-background="{{ asset($activeTemplateTrue . '/images/bg/bg-4.png') }}">
            <h4 class="package-card__title base--color mb-2">{{ __($data->name) }}</h4>

            <ul class="package-card__features mt-4">
                <li>@lang('Return')
                    {{ showAmount($data->interest) }}{{ $data->interest_type == 1 ? '%' : ' ' . __($general->cur_text) }}
                </li>

                <li>
                    @lang('Every') {{ __($timeName->name) }}
                </li>
                
                <li>@lang('For') @if ($data->lifetime == 0)
                        {{ __($data->repeat_time) }} {{ __($timeName->name) }}
                    @else
                        @lang('Lifetime')
                    @endif
                </li>
                <li>
                    @if ($data->lifetime == 0)
                        @lang('Total')
                        {{ __($data->interest * $data->repeat_time) }}{{ $data->interest_type == 1 ? '%' : ' ' . __($general->cur_text) }}
                        @if ($data->capital_back == 1)
                            +
                            <span class="badge badge--success">@lang('Capital')</span>
                        @endif
                    @else
                        @lang('Lifetime Earning')
                    @endif
                </li>
            </ul>
            <div class="package-card__range mt-5 base--color">
                @if ($data->fixed_amount == 0)
                    {{ __($general->cur_sym) }}{{ showAmount($data->minimum) }} -
                    {{ __($general->cur_sym) }}{{ showAmount($data->maximum) }}
                @else
                    {{ __($general->cur_sym) }}{{ showAmount($data->fixed_amount) }}
                @endif
            </div>
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#investModal"
                data-plan="{{ $data }}" class="btn--base btn-md mt-4 investModal">@lang('Invest Now')</a>
        </div><!-- package-card end -->
    </div>
@endforeach --}}

<div class="modal fade" id="investModal">
    <div class="modal-dialog modal-dialog-centered modal-content-bg">
        <div class="modal-content">
            <div class="modal-header">
                @if (auth()->check())
                    <strong class="modal-title text-white" id="ModalLabel">
                        @lang('Confirm to invest on') <span class="planName"></span>
                    </strong>
                @else
                    <strong class="modal-title text-white" id="ModalLabel">
                        @lang('At first sign in your account')
                    </strong>
                @endif
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="las la-times"></i>
                </button>
            </div>
            <form action="{{ route('user.invest.submit') }}" method="post">
                @csrf
                <input type="hidden" name="plan_id">
                @if (auth()->check())
                    <div class="modal-body">
                        <div class="form-group">
                            <h6 class="text-center investAmountRange"></h6>
                            <p class="text-center mt-1 interestDetails"></p>
                            <p class="text-center interestValidity"></p>

                            <label>@lang('Select Wallet')</label>
                            <select class="form-control form-select" name="wallet_type" required>
                                <option value="">@lang('Select One')</option>
                                @if (auth()->user()->deposit_wallet > 0)
                                    <option value="deposit_wallet">@lang('Deposit Wallet - ' . $general->cur_sym . showAmount(auth()->user()->deposit_wallet))</option>
                                @endif
                                @if (auth()->user()->interest_wallet > 0)
                                    <option value="interest_wallet">@lang('Interest Wallet -' . $general->cur_sym . showAmount(auth()->user()->interest_wallet))</option>
                                @endif
                                @foreach ($gatewayCurrency as $data)
                                    <option value="{{ $data->id }}" @selected(old('wallet_type') == $data->method_code)
                                        data-gateway="{{ $data }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                            <code class="gateway-info rate-info d-none">@lang('Rate'): 1 {{ $general->cur_text }} =
                                <span class="rate"></span> <span class="method_currency"></span></code>
                        </div>
                        <div class="form-group">
                            <label>@lang('Invest Amount')</label>
                            <div class="input-group">
                                <input type="number" step="any" class="form-control" name="amount" required>
                                <div class="input-group-text bg--base">{{ $general->cur_text }}</div>
                            </div>
                            <code class="gateway-info d-none">@lang('Charge'): <span class="charge"></span>
                                {{ $general->cur_text }}. @lang('Total amount'): <span class="total"></span>
                                {{ $general->cur_text }}</code>
                        </div>
                    </div>
                @endif
                <div class="modal-footer">
                    @if (auth()->check())
                        <button type="button" class="btn btn-danger btn-md"
                            data-bs-dismiss="modal">@lang('No')</button>
                        <button type="submit" class="btn btn--base btn-md">@lang('Yes')</button>
                    @else
                        <a href="{{ route('user.login') }}"
                            class="btn--base btn-md w-100 text-center">@lang('At first sign in your account')</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>


@push('script')
    <script>

        

        (function($) {
            "use strict"
            $('.investModal').click(function() {
                var symbol = '{{ $general->cur_sym }}';
                var currency = '{{ $general->cur_text }}';
                $('.gateway-info').addClass('d-none');
                var modal = $('#investModal');
                var plan = $(this).data('plan');

                modal.find('.planName').text(plan.name)
                modal.find('[name=plan_id]').val(plan.id);
                let fixedAmount = parseFloat(plan.fixed_amount).toFixed(2);
                let minimumAmount = parseFloat(plan.minimum).toFixed(2);
                let maximumAmount = parseFloat(plan.maximum).toFixed(2);
                let interestAmount = parseFloat(plan.interest);

                if (plan.fixed_amount > 0) {
                    modal.find('.investAmountRange').text(`Invest: ${symbol}${fixedAmount}`);
                    modal.find('[name=amount]').val(fixedAmount);
                    modal.find('[name=amount]').attr('readonly', true);
                } else {
                    modal.find('.investAmountRange').text(
                        `Invest: ${symbol}${minimumAmount} - ${symbol}${maximumAmount}`);
                    modal.find('[name=amount]').val('');
                    modal.find('[name=amount]').removeAttr('readonly');
                }

                if (plan.interest_type == '1') {
                    modal.find('.interestDetails').html(`<strong> Interest: ${interestAmount}% </strong>`);
                } else {
                    modal.find('.interestDetails').html(
                        `<strong> Interest: ${interestAmount} ${currency}  </strong>`);
                }
                if (plan.lifetime == '0') {
                    modal.find('.interestValidity').html(
                        `<strong>  Per ${plan.time} hours ,  ${plan.repeat_time} times</strong>`);
                } else {
                    modal.find('.interestValidity').html(
                        `<strong>  Per ${plan.time} hours,  life time </strong>`);
                }

            });

            $('[name=amount]').on('input', function() {
                $('[name=wallet_type]').trigger('change');
            })

            $('[name=wallet_type]').change(function() {
                var amount = $('[name=amount]').val();
                if ($(this).val() != 'deposit_wallet' && $(this).val() != 'interest_wallet' && amount) {
                    var resource = $('select[name=wallet_type] option:selected').data('gateway');
                    var fixed_charge = parseFloat(resource.fixed_charge);
                    var percent_charge = parseFloat(resource.percent_charge);
                    var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                    $('.charge').text(charge);
                    $('.rate').text(parseFloat(resource.rate));
                    $('.gateway-info').removeClass('d-none');
                    if (resource.currency == '{{ $general->cur_text }}') {
                        $('.rate-info').addClass('d-none');
                    } else {
                        $('.rate-info').removeClass('d-none');
                    }
                    $('.method_currency').text(resource.currency);
                    $('.total').text(parseFloat(charge) + parseFloat(amount));
                } else {
                    $('.gateway-info').addClass('d-none');
                }
            });
        })(jQuery);
    </script>
@endpush
