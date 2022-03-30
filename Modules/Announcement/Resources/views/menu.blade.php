@if(isSuperAdmin())
    <li class="nav-item">
    <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          aria-expanded="{{ request()->is('announcement*') ? 'true' : 'false' }}"
          data-bs-target="#submenu-announcement">
        <span>
              <span class="sidebar-icon"><i class="ti-cup"></i></span>
            <span class="sidebar-text">{{__('popup.Announcement')}}</span>
        </span>
        <span class="link-arrow">
            <span class="ti-angle-right"></span>
        </span>
    </span>
        <div class="multi-level collapse {{ request()->is('announcement*') ? 'show' : '' }} " role="list"
             id="submenu-announcement"
             aria-expanded="{{ request()->is('announcement*') ? 'true' : 'false' }}">
            <ul class="flex-column nav">
                <li class="nav-item  {{ request()->is('announcement/popups*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('popups.index') }}">
                        <span class="sidebar-icon">    <i class="ti-control-stop"></i>     </span>
                        <span class="sidebar-text">{{__('popup.Popup')}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
@endif
