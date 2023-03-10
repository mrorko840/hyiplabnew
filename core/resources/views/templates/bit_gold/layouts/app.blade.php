@php
    $preloader = getContent('preloader.content', true);
@endphp
<!doctype html>
<html lang="{{ config('app.locale') }}" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $general->siteName(__($pageTitle)) }}</title>
    @include('partials.seo')
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="{{ asset('assets/global/css/all.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/global/css/line-awesome.min.css') }}" />

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . '/css/vendor/animate.min.css') }}">

    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . '/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . '/css/vendor/dots.css') }}">

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . '/css/main.css') }}">
    @stack('style-lib')

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/custom.css') }}">
    @stack('style')

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/color.php') }}?color=CCA354">
    @include('templates.bit_gold.layouts.custom_css')
</head>

<body>
    @stack('fbComment')
    <div class="preloader">
        <div class="preloader__imges">
            <img src="{{ getImage('assets/images/frontend/preloader/' . @$preloader->data_values->image_one, '120x120') }}" class="preloader__img one" alt="@lang('No Image')">
            <img src="{{ getImage('assets/images/frontend/preloader/' . @$preloader->data_values->image_two, '120x120') }}" class="preloader__img two" alt="@lang('No Image')">
        </div>
    </div>

    <!-- scroll-to-top start -->
    {{-- <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div> --}}
    <!-- scroll-to-top end -->

    <div class="full-wh">
        <!-- STAR ANIMATION -->
        <div class="bg-animation">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='stars4'></div>
        </div><!-- / STAR ANIMATION -->
    </div>

    @yield('panel')

    @php
        $cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
        
    @endphp
    @if ($cookie->data_values->status == 1 && !\Cookie::get('gdpr_cookie'))
        <!-- cookies dark version start -->
        <div class="cookies-card text-center hide">
            <div class="cookies-card__icon bg--base">
                <i class="las la-cookie-bite"></i>
            </div>
            <p class="mt-4 cookies-card__content">{{ $cookie->data_values->short_desc }} <a href="{{ route('cookie.policy') }}" class="text-primary" target="_blank">@lang('learn more')</a></p>
            <div class="cookies-card__btn mt-4">
                <a href="javascript:void(0)" class="btn btn--base text-white w-100 policy">@lang('Allow')</a>
            </div>
        </div>
        <!-- cookies dark version end -->
    @endif


    <script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{asset('assets/templates/bit_gold/js/fronrend/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>

    <!-- slick slider js -->
    <script src="{{ asset($activeTemplateTrue . '/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . '/js/vendor/wow.min.js') }}"></script>
    <!-- dashboard custom js -->
    <script src="{{ asset($activeTemplateTrue . '/js/app.js') }}"></script>

    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/vendor/purecounter/purecounter.js">
    </script>
    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/js/feather.min.js"></script>

    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/vendor/php-email-form/validate.js"></script>
    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/js/selectric.min.js"></script>

    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/js/iziToast.min.js"></script>
    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/js/jquery.uploadPreview.min.js">
    </script>
    <script src="https://hyipmaxthree.springsoftitproduct.com/asset/theme3/frontend/js/user_dashboard.js"></script>

    


    @stack('script-lib')
    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')

    @include('partials.push_script')

    <script>
        'use strict'
        // var url = "{{ route('home') }}/changeLang";

        // $(".changeLang").change(function() {
        //     if ($(this).val() == '') {
        //         return false;
        //     }
        //     window.location.href = url + "?lang=" + $(this).val();
        // });

        feather.replace();

        // responsive menu slideing
        $(".d-sidebar-menu>li>a").on("click", function() {
            var element = $(this).parent("li");
            if (element.hasClass("open")) {
                element.removeClass("open");
                element.find("li").removeClass("open");
                element.find("ul").slideUp(500, "linear");
            } else {
                element.addClass("open");
                element.children("ul").slideDown();
                element.siblings("li").children("ul").slideUp();
                element.siblings("li").removeClass("open");
                element.siblings("li").find("li").removeClass("open");
                element.siblings("li").find("ul").slideUp();
            }
        });

        $('.sidebar-open-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.d-sidebar').toggleClass('active');
        });
    </script>


    <script>
        $(document).on("change", '.cngCurrency', function () {
            $("#curFormjq").submit();
        });

        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{ route('home') }}/change/" + $(this).val();
            });

            $('.policy').on('click', function() {
                $.get('{{ route('cookie.accept') }}', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],[type=password],[type=email],[type=number],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function(i, element) {
                var elementType = $(element);
                if (elementType.attr('type') != 'checkbox') {
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                    Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                        colum.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>

</body>

</html>
