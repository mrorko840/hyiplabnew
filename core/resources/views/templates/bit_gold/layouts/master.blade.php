@extends($activeTemplate . 'layouts.app')
@section('panel')

    <head>
        <style>
            #copyBoard {
                cursor: pointer;
            }
        </style>
        <style>
            @media (max-width: 991px) {
                #header.header-inner-pages {
                    display: block;
                    background: transparent !important;
                    position: absolute;
                }

                .dashboard-body-part {
                    padding-top: 80px;
                    position: relative;
                    z-index: 1;
                }

                .dashboard-body-part::before {
                    position: absolute;
                    content: '';
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 160px;
                    background: linear-gradient(to top, #2f5b88, #153352);
                    z-index: -1;
                }
            }

            .sp-referral .single-child {
                padding: 6px 10px;
                border-radius: 5px;
            }

            .sp-referral .single-child+.single-child {
                margin-top: 15px;
            }

            .sp-referral .single-child p {
                display: flex;
                align-items: center;
                margin-bottom: 0;
            }

            .sp-referral .single-child p img {
                width: 35px;
                height: 35px;
                border-radius: 50%;
                object-fit: cover;
                -o-object-fit: cover;
            }

            .sp-referral .single-child p span {
                width: calc(100% - 35px);
                font-size: 14px;
                padding-left: 10px;
            }

            .sp-referral>.single-child.root-child>p img {
                border: 2px solid #c3c3c3;
            }

            .sub-child-list {
                position: relative;
                padding-left: 35px;
            }

            .sub-child-list::before {
                position: absolute;
                content: '';
                top: 0;
                left: 17px;
                width: 1px;
                height: 100%;
                background-color: #a1a1a1;
            }

            .sub-child-list>.single-child {
                position: relative;
            }

            .sub-child-list>.single-child::before {
                position: absolute;
                content: '';
                left: -18px;
                top: 21px;
                width: 30px;
                height: 5px;
                border-left: 1px solid #a1a1a1;
                border-bottom: 1px solid #a1a1a1;
                border-radius: 0 0 0 5px;
            }

            .sub-child-list>.single-child>p img {
                border: 2px solid #c3c3c3;
            }
            select {
                cursor: pointer;
                color: #cd9f38 !important;
            }
        </style>

    </head>
    <!-- Header -->
    @include('templates.bit_gold.includes.header')

    <main id="main" class="dashboard-main">
        <!-- Sidebar -->
        @include('templates.bit_gold.includes.sidebar')
        <!-- Bottom Nav Only Mobile -->
        @include('templates.bit_gold.includes.bottom_nav')
        <div class="dashboard-body-part">
            @yield('content')
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
@endsection

{{-- @section('panel')
    <div class="page-wrapper">
        @include($activeTemplate . 'partials.user_header')
        @if (!request()->routeIs('home'))
            @include($activeTemplate . 'partials.breadcrumb')
        @endif
        <div class="section-wrapper">
            @yield('content')
        </div>
        @include($activeTemplate . 'partials.footer')
    </div>
@endsection --}}
