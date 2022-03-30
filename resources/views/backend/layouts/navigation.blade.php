<ul class="pt-3 nav flex-column pt-md-0">
    <li class="nav-item">
        <a href="{{url('/')}}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon sidebar-text me-3">
                <img class="navbar-brand-img" src="{{ assetPath('images/logo.png') }}" alt="{{env('APP_NAME')}}">
            </span>

        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="nav-link">
            <span class="sidebar-icon">
                <i class="ti-dashboard"></i>
            </span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>


    @include('frontendmanager::menu')
    @include('blog::menu')
    @include('business::menu')
    @include('tax::menu')
    @include('subscription::menu')
    @include('sales::menu')
    @include('purchases::menu')
    @include('payment::menu')
    @include('qrbuilder::menu')
    @include('report::menu')
    @include('setting::menu')
    @include('announcement::menu')

</ul>
