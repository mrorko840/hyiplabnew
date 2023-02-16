@extends($activeTemplate . 'layouts.app')
@section('panel')
    <div class="page-wrapper">
        @if (!request()->routeIs('user.login') && !request()->routeIs('user.register'))
            @include($activeTemplate . 'partials.header')
        @endif
        @if (!request()->routeIs('home'))
            {{-- @include($activeTemplate . 'partials.breadcrumb') --}}
        @endif
        <div class="section-wrapper">
            @yield('content')
        </div>
        @if (!request()->routeIs('user.login') && !request()->routeIs('user.register'))
            @include($activeTemplate . 'partials.footer')
        @endif
    </div>
@endsection
