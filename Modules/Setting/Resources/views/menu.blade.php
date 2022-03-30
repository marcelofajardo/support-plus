<li class="nav-item">
    <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          aria-expanded="{{ request()->is('setting*') ? 'true' : 'false' }}"
          data-bs-target="#submenu-system-setting">
        <span>
            <span class="sidebar-icon ">
                <i class="ti-settings"></i>
            </span>
            <span class="sidebar-text">{{__('setting.System Setting')}}</span>
        </span>
        <span class="link-arrow">
            <span class="ti-angle-right"></span>
        </span>
    </span>
    <div class="multi-level collapse {{ request()->is('setting/*') ? 'show' : '' }} " role="list"
         id="submenu-system-setting"
         aria-expanded="{{ request()->is('setting*') ? 'true' : 'false' }}">
        <ul class="flex-column nav">

            @if(isSuperAdmin() || isAdmin())
                <li class="nav-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link">
            <span class="sidebar-icon">
                <i class="ti-user"></i>
            </span>
                        <span class="sidebar-text">{{ __('common.Users') }}</span>
                    </a>
                </li>
            @endif
            @if(isSuperAdmin())

                <li class="nav-item {{ request()->is('setting/queue*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('queue.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-smallcap"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Queue Setting')}}</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('setting/cron*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('cron.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-smallcap"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Cron Job')}}</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('setting/localization*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('localization.languages.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-smallcap"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Languages')}}</span>
                    </a>
                </li>
                <li class="nav-item  {{ request()->is('setting/countries*') ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ route('countries.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-world"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Countries')}} </span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('setting/zones*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('zones.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-map-alt"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Zones')}}</span>
                    </a>
                </li>

                <li class="nav-item  {{ request()->is('setting/states*') ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ route('states.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-flag-alt"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.States')}}</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('setting/cities*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('cities.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-location-pin"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Cities')}}</span>
                    </a>
                </li>


                <li class="nav-item {{ request()->is('setting/currencies*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('currencies.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-money"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Currency')}}</span>
                    </a>
                </li>


                <li class="nav-item {{ request()->is('setting/utilities*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('utilities.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-light-bulb"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Utility')}}</span>
                    </a>
                </li>


                <li class="nav-item {{ request()->is('setting/updates*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('updates.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-cloud-down"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Update')}}</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('setting/general-settings*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('general-settings.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-panel"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.General Setting')}}</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('setting/email-settings*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('email-settings.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-email"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Email Setting')}}</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('setting/recaptcha*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('recaptchas.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-alert"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.reCaptcha Setting')}}</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('setting/cookies*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('cookies.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-alert"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Cookie')}} {{__('setting.Setting')}}</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('setting/social-settings*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('social-settings.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-share"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Social Setting')}}</span>
                    </a>
                </li>


                <li class="nav-item {{ request()->is('setting/terms*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('terms.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-write"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Terms of service')}}</span>
                    </a>
                </li>
                <li class="nav-item  {{ request()->is('setting/preferences*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('preferences.index') }}">
                        <span class="sidebar-icon"><i class="ti-check-box"></i></span>
                        <span class="sidebar-text">     {{__('setting.Preferences')}}   </span>
                    </a>
                </li>


                <li class="nav-item  {{ request()->is('setting/ip-blocks*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('ip-blocks.index') }}">
                        <span class="sidebar-icon"><i class="ti-na"></i></span>
                        <span class="sidebar-text">     {{__('setting.IP Blocks')}}   </span>
                    </a>
                </li>


                <li class="nav-item  {{ request()->is('setting/plugins*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('plugins.index') }}">
                        <span class="sidebar-icon"><i class="ti-na"></i></span>
                        <span class="sidebar-text">     {{__('setting.Plugins')}}   </span>
                    </a>
                </li>

            @else
                <li class="nav-item {{ request()->is('setting/roles*') ? 'active' : '' }}">
                    <a class="nav-link "
                       href="{{ route('roles.index') }}">
                    <span class="sidebar-icon">
                        <i class="ti-lock"></i>
                    </span>
                        <span class="sidebar-text">{{__('setting.Role & permission')}}</span>
                    </a>
                </li>
            @endif


        </ul>
    </div>
</li>
