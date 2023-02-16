@php
    $activePlan = App\Models\Invest::where('user_id', auth()->id())->where('status', 1)->count();
@endphp
<div class="d-sidebar">
    <ul class="d-sidebar-menu">
        <li class="{{ request()->routeIs('user.home') ? 'active' : '' }}">
            <a href="{{route('user.home')}}"><i data-feather="home"></i>
                Dashboard
            </a>
        </li>

        <li class="has_submenu">
            <a href="#0"><i data-feather="zap"></i> Investment</a>
            <ul class="submenu">
                <li class="{{ request()->routeIs('plan') ? 'active' : '' }}">
                    <a href="{{ route('plan') }}"><i
                            data-feather="chevrons-right"></i></i> Investment plans</a>
                </li>
                <li class="{{ request()->routeIs('user.invest.statistics') ? 'active' : '' }}">
                    <a href="{{route('user.invest.statistics')}}"><i
                            data-feather="chevrons-right"></i> Invest Statistics</a>
                </li>
                <li class="{{ request()->routeIs('user.invest.log') ? 'active' : '' }}">
                    <a href="{{route('user.invest.log')}}"><i
                            data-feather="chevrons-right"></i> Invest log</a>
                </li>
            </ul>
        </li>

        <li class="has_submenu ">
            <a href="#0"><i data-feather="briefcase"></i> Deposit</a>
            <ul class="submenu">
                <li class="{{ request()->routeIs('user.deposit.index') ? 'active' : '' }}">
                    <a href="{{ route('user.deposit.index') }}"><i data-feather="chevrons-right"></i>
                        Deposit</a>
                </li>
                <li class="{{ request()->routeIs('user.deposit.history') ? 'active' : '' }}">
                    <a href="{{route('user.deposit.history')}}"><i data-feather="chevrons-right"></i> 
                        Deposit log</a>
                </li>
            </ul>
        </li>

        <li class="has_submenu ">
            <a href="#0"><i data-feather="credit-card"></i> Withdraw</a>
            <ul class="submenu">
                <li class="{{ request()->routeIs('user.withdraw') ? 'active' : '' }}">
                    <a href="{{ route('user.withdraw') }}"><i data-feather="chevrons-right"></i> 
                        Withdraw</a>
                </li>
                <li class="{{ request()->routeIs('user.withdraw.history') ? 'active' : '' }}">
                    <a href="{{ route('user.withdraw.history') }}"><i data-feather="chevrons-right"></i> 
                        Withdraw log</a>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('user.transfer.balance') ? 'active' : '' }}">
            <a href="{{ route('user.transfer.balance') }}"><i data-feather="repeat"></i> 
                Transfer money</a>
        </li>

        {{-- <li class="">
            <a href="https://hyipmaxthree.springsoftitproduct.com/money/transfer/log">
                <i data-feather="file-text"></i>
                Money transfer log
            </a>
        </li>

        <li class="">
            <a href="https://hyipmaxthree.springsoftitproduct.com/interest/log"><i data-feather="file-text"></i>
                Interest log</a>
        </li>
         --}}
        <li class="{{ request()->routeIs('user.transactions') ? 'active' : '' }}">
            <a href="{{ route('user.transactions') }}"><i data-feather="file-text"></i>
                Transaction log</a>
        </li>
        <li class="{{ request()->routeIs('user.referrals') ? 'active' : '' }}">
            <a href="{{ route('user.referrals') }}"><i data-feather="file-text"></i> Refferal
                log</a>
        </li>

        <li class="{{ request()->routeIs('user.twofactor') ? 'active' : '' }}">
            <a href="{{route('user.twofactor')}}"><i data-feather="shield"></i> 2fa</a>
        </li>
        <li class="{{ request()->routeIs('ticket.index') ? 'active' : '' }}">
            <a href="{{ route('ticket.index') }}"><i data-feather="life-buoy"></i>
                Support</a>
        </li>
        <li>
            <a href="{{ route('user.logout') }}"><i data-feather="log-out"></i>
                Logout</a>
        </li>
    </ul>
    <div class="d-plan-notice mt-4 mx-3">
        <p class="mb-0">
            @if ($activePlan>0)
                Currently {{$activePlan}} Plan Active
            @else
                Your current plan -N/A
            @endif
        </p>
        <a href="{{ route('plan') }}">Update plan <i
                class="fas fa-arrow-up"></i></a>
    </div>
</div>
