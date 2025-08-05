{{--  Dashboard --}}
<li>
    <a href="{{ route('backend.dashboard') }}"
        class="side-menu {{ request()->routeIs('backend.dashboard') ? 'side-menu--active side-menu--open' : '' }}">
        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
        <div class="side-menu__title"> Dashboard </div>
    </a>
</li>
{{--  Category --}}
<li>
    <a href="{{ route('backend.category.index') }}"
        class="side-menu {{ request()->routeIs('backend.category.*') ? 'side-menu--active side-menu--open' : '' }}">
        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
        <div class="side-menu__title"> Category </div>
    </a>
</li>
{{--  Hero Section --}}
<li>
    <a href="{{ route('backend.banner.index') }}"
        class="side-menu {{ request()->routeIs('backend.banner.*') ? 'side-menu--active side-menu--open' : '' }}">
        <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
        <div class="side-menu__title"> Banner Section </div>
    </a>
</li>
{{--  Our Facilitys --}}
<li>
    <a href="{{ route('backend.facility.index') }}"
        class="side-menu {{ request()->routeIs('backend.facility.*') ? 'side-menu--active' : '' }}">
        <div class="side-menu__icon"> <i data-feather="gift"></i> </div>
        <div class="side-menu__title"> Our Facilities </div>
    </a>
</li>
{{-- Product --}}
<li>
    <a href="{{ route('backend.product.index') }}"
        class="side-menu {{ request()->routeIs('backend.product.*') ? 'side-menu--active side-menu--open' : '' }}">
        <div class="side-menu__icon"> <i data-feather="box"></i> </div>
        <div class="side-menu__title"> Products </div>
    </a>
</li>
