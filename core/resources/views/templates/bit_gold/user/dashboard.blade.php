@extends($activeTemplate . 'layouts.master')
@section('content')

@php
    $apps = getContent('apps.content', true)
@endphp


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <section class="dashboard-section">
        
        {{-- <div class="dashboard-body-part"> --}}
            <div class="row g-sm-4 g-3 justify-content-between">
                <div class="col-xl-4 col-lg-6">
                    <div class="user-account-number h-100">
                        <div class="card-dot mb-sm-4 mb-2">
                            <span class="dot-1"></span>
                            <span class="dot-2"></span>
                        </div>
                        <p class="caption mb-2">Deposit Wallet</p>
                        <h3 class="acc-number">{{ getAmount($user->deposit_wallet) }} {{ $general->cur_text }}
                        </h3>
                        <i class="bi bi-wallet2"></i>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-12 col-6">
                            <div class="d-box-three gr-bg-1">
                                <div class="icon">
                                    <i class="bi bi-piggy-bank text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white">Total withdraw</p>
                                    <h5 class="title text-white">{{ getAmount($user->withdrawals->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6">
                            <div class="d-box-three gr-bg-3">
                                <div class="icon">
                                    <i class="bi bi-hourglass-split text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white">Total deposit</p>
                                    <h5 class="title text-white">{{ getAmount($user->deposits->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="row g-sm-4 g-3">
                        <div class="col-xl-12 col-6">
                            <div class="d-box-three gr-bg-2">
                                <div class="icon">
                                    <i class="bi bi-cash-coin text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white">Total invest</p>
                                    <h5 class="title text-white">{{ getAmount($totalInvest) }} {{ $general->cur_text }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-6">
                            <div class="d-box-three gr-bg-4">
                                <div class="icon">
                                    <i class="bi bi-wallet2 text-white"></i>
                                </div>
                                <div class="content">
                                    <p class="text-small mb-0 text-white">Interest Wallet</p>
                                    <h5 class="title text-white">{{ getAmount($user->interest_wallet) }} {{ $general->cur_text }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-1 d-box-two-wrapper d-sm-flex d-none">
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <span class="caption-title">Current plan</span>
                        <h3 class="d-box-two-amount">{{$activePlan}} Plan Active</h3>
                        {{-- <a href="https://hyipmaxthree.springsoftitproduct.com/invest/all" class="link-btn"><i
                                class="fas fa-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-money-check"></i>
                        </div>
                        <span class="caption-title">Pending Deposit</span>
                        <h3 class="d-box-two-amount">
                            {{ getAmount($user->deposits->where('status',2)->sum('amount')) }} {{ $general->cur_text }}
                        </h3>
                        {{-- <a href="https://hyipmaxthree.springsoftitproduct.com/invest/pending" class="link-btn"><i
                                class="fas fa-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <span class="caption-title">Pending withdraw</span>
                        <h3 class="d-box-two-amount">
                            {{ getAmount($user->withdrawals->where('status',2)->sum('amount')) }} {{ $general->cur_text }}
                        </h3>
                        {{-- <a href="https://hyipmaxthree.springsoftitproduct.com/withdraw/pending"
                            class="link-btn"><i class="fas fa-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="d-box-two">
                        <div class="d-box-two-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <span class="caption-title">Refferal earn</span>
                        <h3 class="d-box-two-amount">
                            {{ showAmount($referral_earnings) }} {{ $general->cur_text }}
                        </h3>
                        {{-- <a href="https://hyipmaxthree.springsoftitproduct.com/commision" class="link-btn"><i
                                class="fas fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>

            <!-- mobile screen card start -->
            <div class="d-sm-none mt-4">
                <div class="site-card">
                    <div class="card-body">
                        <h5 class="mb-4">More options</h5>
                        <div class="row gy-3 mobile-box-wrapper">
                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{route('user.invest.statistics')}}"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Invest Statistics</h6>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{route('user.invest.log')}}"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Invest log</h6>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{route('user.deposit.history')}}"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Deposit log</h6>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{ route('user.withdraw.history') }}"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Withdraw log</h6>
                                </div>
                            </div>
                            {{-- <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="https://hyipmaxthree.springsoftitproduct.com/interest/log"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Interest log</h6>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="https://hyipmaxthree.springsoftitproduct.com/transaction/log"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Money transfer log</h6>
                                </div>
                            </div> --}}
                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{ route('user.transactions') }}"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Transaction log</h6>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{ route('user.referrals') }}"
                                        class="item-link"></a>
                                    <i class="bi bi-journal-text"></i>
                                    <h6 class="title">Referral log</h6>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{ $apps->data_values->android }}"
                                        class="item-link"></a>
                                    {{-- <i class="bi bi-journal-text"></i> --}}
                                    <i class="fa-brands fa-android"></i>
                                    <h6 class="title">Android App</h6>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mobile-box link-item">
                                    <a href="{{ $apps->data_values->apple }}"
                                        class="item-link"></a>
                                        <i class="fa-brands fa-apple"></i>
                                    <h6 class="title">Apple App</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile screen card end -->

            <div class="col-md-12 my-4">
                <label>@lang('Referral Link')</label>
                <div class="input-group">
                    <input type="text" name="text" class="form-control form--control referralURL"
                        value="{{ route('home') }}?reference={{ auth()->user()->username }}" readonly>
                        <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-copy"></i> </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="site-card">
                        <div class="card-header">
                            <h5 class="mb-0">Reference tree</h5>
                        </div>
                        <div class="card-body">
                            @if($user->allReferrals->count() > 0 && $maxLevel > 0)
                                <div class="treeview-container">
                                    <ul class="treeview">
                                    <li class="items-expanded"> {{ $user->fullname }} ( {{ $user->username }} )
                                            @include($activeTemplate.'partials.under_tree',['user'=>$user,'layer'=>0,'isFirst'=>true])
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <div class="col-md-12 text-center mt-5">
                                    <i class="far fa-sad-tear display-1"></i>
                                    <p class="mt-2">
                                        No reference user found
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}

    </section>
@endsection

@push('style-lib')
    <link href="{{ asset('assets/global/css/jquery.treeView.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('script')
    <script src="{{ asset('assets/global/js/jquery.treeView.js') }}"></script>
    <script>
        (function($){
        "use strict"
            $('.treeview').treeView();
            $('.copyBoard').click(function(){
                    var copyText = document.getElementsByClassName("referralURL");
                    copyText = copyText[0];
                    copyText.select();
                    copyText.setSelectionRange(0, 99999);

                    /*For mobile devices*/
                    document.execCommand("copy");
                    copyText.blur();
                    this.classList.add('copied');
                    setTimeout(() => this.classList.remove('copied'), 1500);
            });
        })(jQuery);
    </script>
@endpush

@push('script')

    <script>
        'use strict';
        var copyButton = document.querySelector('.copy');
        var copyInput = document.querySelector('.copy-text');
        copyButton.addEventListener('click', function(e) {
            e.preventDefault();
            var text = copyInput.select();
            document.execCommand('copy');
        });
        copyInput.addEventListener('click', function() {
            this.select();
        });
    </script>
    
    <script>
        'use strict';
        (function($) {
            @if ($isHoliday)
                function createCountDown(elementId, sec) {
                    var tms = sec;
                    var x = setInterval(function() {
                        var distance = tms * 1000;
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        var days = `<span>${days}d</span>`;
                        var hours = `<span>${hours}h</span>`;
                        var minutes = `<span>${minutes}m</span>`;
                        var seconds = `<span>${seconds}s</span>`;
                        document.getElementById(elementId).innerHTML = days + ' ' + hours + " " + minutes +
                            " " + seconds;
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById(elementId).innerHTML = "COMPLETE";
                        }
                        tms--;
                    }, 1000);
                }

                createCountDown('counter', {{ \Carbon\Carbon::parse($nextWorkingDay)->diffInSeconds() }});
            @endif
        })(jQuery);
    </script>
@endpush
