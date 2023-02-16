<!-- mobile bottom menu start -->
<div class="mobile-bottom-menu-wrapper">
    <ul class="mobile-bottom-menu">
        <li>
            <a href="{{ route('user.deposit.index') }}" class="{{ request()->routeIs('user.deposit.index') ? 'active' : '' }}">
                <i class="bi bi-wallet2"></i>
                <span>Deposit</span>
            </a>
        </li>
        <li>
            <a href="{{ route('plan') }}" class="{{ request()->routeIs('plan') ? 'active' : '' }}">
                <i class="bi bi-piggy-bank"></i>
                <span>My invest</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.home') }}" class="{{ request()->routeIs('user.home') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.withdraw') }}" class="{{ request()->routeIs('user.withdraw') ? 'active' : '' }}">
                <i class="bi bi-cash-coin"></i>
                <span>Withdraw</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.transfer.balance') }}" class="{{ request()->routeIs('user.transfer.balance') ? 'active' : '' }}">
                <i class="bi bi-shuffle"></i>
                <span>Transfer</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile bottom menu end -->
