@php
    
    $latestDeposit = \App\Models\Deposit::with('user', 'gateway')
        ->where('status', 1)
        ->latest()
        ->limit(10)
        ->get();
    $fakeDeposit = \App\Models\Frontend::where('data_keys', 'transaction.element')
        ->whereJsonContains('data_values->trx_type', 'deposit')
        ->limit(10)
        ->get();
    $deposits = $latestDeposit->merge($fakeDeposit);
    $deposits = $deposits->sortByDesc('created_at')->take(10);
    
    $latestWithdraw = \App\Models\Withdrawal::with('user', 'method')
        ->where('status', 1)
        ->latest()
        ->limit(10)
        ->get();
    $fakeWithdraw = \App\Models\Frontend::where('data_keys', 'transaction.element')
        ->whereJsonContains('data_values->trx_type', 'withdraw')
        ->limit(10)
        ->get();
    
    $withdrawals = $latestWithdraw->merge($fakeWithdraw);
    $withdrawals = $withdrawals->sortByDesc('created_at')->take(10);
    $transactionContent = getContent('transaction.content', true);
    
@endphp
<section class="transaction-section pt-120 pb-120 section-bg"
    style="background-image: url('https://hyipmaxthree.springsoftitproduct.com/asset/theme3/images/bg/bg4.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-top  wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s"
                    style="visibility: visible; animation-duration: 0.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <h2 class="section-title">Our latest transaction</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="transaction-wrapper">
                    <div class="transaction-wrapper-top mb-4">
                        <h4 class="title">Transaction history</h4>
                        <ul class="nav nav-pills transaction-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Latest deposits</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Latest withdraws</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane table-content fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <table class="table">
                                <thead>
                                    <tr class="bg-yellow">
                                        <th scope="col">Username</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($deposits as $data)
                                      <tr>
                                          @if (@$data->data_values)
                                              <td data-label="@lang('Name')">
                                                  {{ __(@$data->data_values->name) }}
                                              </td>
                                              <td data-label="@lang('Date')">{{ @$data->data_values->date }}</td>
                                              <td data-label="@lang('Amount')">{{ @$data->data_values->amount }}
                                                  {{ $general->cur_text }}</td>
                                              <td data-label="@lang('Gateway')">
                                                  {{ __(@$data->data_values->gateway) }}</td>
                                          @else
                                              <td data-label="@lang('Name')">
                                                  {{ __(@$data->user->fullname) }}
                                              </td>
                                              <td data-label="@lang('Date')">
                                                  {{ showDateTime($data->created_at, 'Y-m-d') }}</td>
                                              <td data-label="@lang('Amount')">{{ getAmount($data->amount) }}
                                                  {{ $general->cur_text }}</td>
                                              <td data-label="@lang('Gateway')">{{ __($data->gateway->name) }}</td>
                                          @endif
                                      </tr>
                                  @endforeach
                              </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <table class="table">
                                <thead>
                                    <tr class="bg-yellow">
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Gateway</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($withdrawals as $data)
                                      <tr>
                                          @if (@$data->data_values)
                                              <td data-label="@lang('Name')">{{ __(@$data->data_values->name) }}
                                              </td>
                                              <td data-label="@lang('Date')">{{ @$data->data_values->date }}
                                              </td>
                                              <td data-label="@lang('Amount')">{{ @$data->data_values->amount }}
                                                  {{ $general->cur_text }}</td>
                                              <td data-label="@lang('Method')">
                                                  {{ __(@$data->data_values->gateway) }}</td>
                                          @else
                                              <td data-label="@lang('Name')">{{ __($data->user->fullname) }}
                                              </td>
                                              <td data-label="@lang('Date')">
                                                  {{ showDateTime($data->created_at, 'Y-m-d') }}</td>
                                              <td data-label="@lang('Amount')">{{ getAmount($data->amount) }}
                                                  {{ $general->cur_text }}</td>
                                              <td data-label="@lang('Method')">{{ __($data->method->name) }}</td>
                                          @endif
                                      </tr>
                                  @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
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
                            class="font-weight-normal">{{ __(@$transactionContent->data_values->heading_w) }}</span> <b
                            class="base--color">{{ __(@$transactionContent->data_values->heading_c) }}</b></h2>
                    <p>{{ __(@$transactionContent->data_values->sub_heading) }}</p>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="nav nav-tabs custom--style-two justify-content-center" id="transactionTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="deposit-tab" data-bs-toggle="tab" href="#deposit" role="tab"
                            aria-controls="deposit" aria-selected="true">@lang('Latest Deposit')</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="withdraw-tab" data-bs-toggle="tab" href="#withdraw" role="tab"
                            aria-controls="withdraw" aria-selected="false">@lang('Latest Withdraw')</a>
                    </li>
                </ul>

                <div class="tab-content mt-4" id="transactionTabContent">
                    <div class="tab-pane fade show active" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                        <div class="table-responsive--sm">
                            <table class="table style--two">
                                <thead>
                                    <tr>
                                        <th>@lang('Name')</th>
                                        <th>@lang('Date')</th>
                                        <th>@lang('Amount')</th>
                                        <th>@lang('Gateway')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deposits as $data)
                                        <tr>
                                            @if (@$data->data_values)
                                                <td data-label="@lang('Name')">
                                                    {{ __(@$data->data_values->name) }}
                                                </td>
                                                <td data-label="@lang('Date')">{{ @$data->data_values->date }}</td>
                                                <td data-label="@lang('Amount')">{{ @$data->data_values->amount }}
                                                    {{ $general->cur_text }}</td>
                                                <td data-label="@lang('Gateway')">
                                                    {{ __(@$data->data_values->gateway) }}</td>
                                            @else
                                                <td data-label="@lang('Name')">
                                                    {{ __(@$data->user->fullname) }}
                                                </td>
                                                <td data-label="@lang('Date')">
                                                    {{ showDateTime($data->created_at, 'Y-m-d') }}</td>
                                                <td data-label="@lang('Amount')">{{ getAmount($data->amount) }}
                                                    {{ $general->cur_text }}</td>
                                                <td data-label="@lang('Gateway')">{{ __($data->gateway->name) }}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                        <div class="table-responsive--md">
                            <table class="table style--two">
                                <thead>
                                    <tr>
                                        <th scope="col">@lang('Name')</th>
                                        <th scope="col">@lang('Date')</th>
                                        <th scope="col">@lang('Amount')</th>
                                        <th scope="col">@lang('Method')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($withdrawals as $data)
                                        <tr>
                                            @if (@$data->data_values)
                                                <td data-label="@lang('Name')">{{ __(@$data->data_values->name) }}
                                                </td>
                                                <td data-label="@lang('Date')">{{ @$data->data_values->date }}
                                                </td>
                                                <td data-label="@lang('Amount')">{{ @$data->data_values->amount }}
                                                    {{ $general->cur_text }}</td>
                                                <td data-label="@lang('Method')">
                                                    {{ __(@$data->data_values->gateway) }}</td>
                                            @else
                                                <td data-label="@lang('Name')">{{ __($data->user->fullname) }}
                                                </td>
                                                <td data-label="@lang('Date')">
                                                    {{ showDateTime($data->created_at, 'Y-m-d') }}</td>
                                                <td data-label="@lang('Amount')">{{ getAmount($data->amount) }}
                                                    {{ $general->cur_text }}</td>
                                                <td data-label="@lang('Method')">{{ __($data->method->name) }}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- tab-content end -->
            </div>
        </div>
    </div>
</section> --}}


