<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex flex-wrap align-items-center">
            <div class="logo me-auto me-lg-0 ">
                <a href="{{route('home')}}">
                    <img class="img-fluid rounded sm-device-img text-align" src="{{asset('assets/images/logoIcon/logo.png')}}" width="100%" alt="pp"/>
                </a>
            </div>
        </div>
        <div class="header-right d-flex">
            <!-- Language -->
            {{-- <select class="changeLang" aria-label="Default select example">
                <option value="afr">
                    Afrikaans
                </option>
                <option value="spanish">
                    Spanish
                </option>
                <option value="EN" selected>
                    English
                </option>
            </select> --}}

            @if ($general->language_switch)
                <select class="langSel changeLang">
                    @foreach($language as $item)
                        <option value="{{ $item->code }}" @if(session('lang')==$item->code) selected
                            @endif>{{ __($item->name) }}</option>
                    @endforeach
                </select>
            @endif

            <div class="dropdown ms-3">
                <button class="dropdown-toggle user-toggle-menu" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('assets/templates/bit_gold/images/user/user.png')}}"alt="pp">
                    <span class="ms-2">{{auth()->user()->firstname.' '.auth()->user()->lastname}}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item" href="{{route('user.profile.setting')}}">Profile settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('user.change.password') }}">Change Password</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
@push('style')
    <style>
        .user-toggle-menu {
            width: max-content;
        }
        select {
            height: auto;
        }
    </style>
@endpush