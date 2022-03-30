@if(isSuperAdmin())
    <li class="nav-item">
    <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          aria-expanded="{{ request()->is('frontend*') ? 'true' : 'false' }}"
          data-bs-target="#submenu-frontend">
        <span>
            <span class="sidebar-icon">
                <i class="ti-layout"></i>
            </span>
            <span class="sidebar-text">{{__('frontendmanager.Frontend')}}</span>
        </span>
        <span class="link-arrow">
            <span class="ti-angle-right"></span>
        </span>
    </span>
        <div class="multi-level collapse {{ request()->is('frontend/*') ? 'show' : '' }} " role="list"
             id="submenu-frontend"
             aria-expanded="{{ request()->is('frontend*') ? 'true' : 'false' }}">
            <ul class="flex-column nav">

                <li class="nav-item  {{ request()->is('blog-categories*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('themes.index') }}">
                        <span class="sidebar-icon"><i class="ti-wand"></i></span>
                        <span class="sidebar-text">     {{__('frontendmanager.Appearance')}}     </span>
                    </a>
                </li>


                <li class="nav-item  {{ request()->is('frontend/testimonials*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('testimonials.index') }}">
                        <span class="sidebar-icon"><i class="ti-thought"></i></span>
                        <span class="sidebar-text">{{__('frontendmanager.Testimonials')}} </span>
                    </a>
                </li>


                <li class="nav-item  {{ request()->is('frontend/pages*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('pages.index') }}">
                        <span class="sidebar-icon">   <i class="ti-files"></i></span>
                        <span class="sidebar-text">    {{__('frontendmanager.Pages')}} </span>
                    </a>
                </li>


                <li class="nav-item  {{ request()->is('frontend/features*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('features.index') }}">
                        <span class="sidebar-icon">   <i class="ti-target"></i></span>
                        <span class="sidebar-text">  {{__('frontendmanager.Features')}}  </span>
                    </a>
                </li>


                <li class="nav-item  {{ request()->is('frontend/contacts*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contacts.index') }}">
                        <span class="sidebar-icon">    <i class="ti-comment-alt"></i>   </span>
                        <span class="sidebar-text">   {{__('frontendmanager.Contact')}}   </span>
                    </a>
                </li>

                <li class="nav-item  {{ request()->is('frontend/faqs*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('faqs.index') }}">
                        <span class="sidebar-icon">   <i class="ti-help-alt"></i>   </span>
                        <span class="sidebar-text">   {{__('frontendmanager.FAQs')}}   </span>
                    </a>
                </li>

                <li class="nav-item  {{ request()->is('frontend/banners*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('banners.index') }}">
                        <span class="sidebar-icon">   <i class="ti-blackboard"></i>   </span>
                        <span class="sidebar-text">   {{__('frontendmanager.Banner')}}   </span>
                    </a>
                </li>

                <li class="nav-item  {{ request()->is('frontend/email-subscriptions*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('email-subscriptions.index') }}">
                        <span class="sidebar-icon">   <i class="ti-email"></i>   </span>
                        <span class="sidebar-text">   {{__('frontendmanager.Email Subscription')}}   </span>
                    </a>
                </li>


                <li class="nav-item  {{ request()->is('frontend/partners*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('partners.index') }}">
                        <span class="sidebar-icon">   <i class="ti-user"></i>   </span>
                        <span class="sidebar-text">   {{__('frontendmanager.Partners')}}   </span>
                    </a>
                </li>
                <li class="nav-item  {{ request()->is('frontend/workflows*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('workflows.index') }}">
                        <span class="sidebar-icon">   <i class="ti-user"></i>   </span>
                        <span class="sidebar-text">   {{__('frontendmanager.Workflows')}}   </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
@endif
