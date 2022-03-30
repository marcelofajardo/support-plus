@if(isSuperAdmin())
    <li class="nav-item">
    <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          aria-expanded="{{ request()->is('blog*') ? 'true' : 'false' }}"
          data-bs-target="#submenu-blog">
        <span>
              <span class="sidebar-icon"><i class="ti-pencil"></i></span>
            <span class="sidebar-text">{{__('blog.Blog')}}</span>
        </span>
        <span class="link-arrow">
            <span class="ti-angle-right"></span>
        </span>
    </span>
        <div class="multi-level collapse {{ request()->is('blog*') ? 'show' : '' }} " role="list"
             id="submenu-blog"
             aria-expanded="{{ request()->is('blog*') ? 'true' : 'false' }}">
            <ul class="flex-column nav">

                <li class="nav-item  {{ request()->is('blog-categories*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog-categories.index') }}">
                        <span class="sidebar-icon">    <i class="ti-list"></i>     </span>
                        <span class="sidebar-text">{{__('blog.Category')}}</span>
                    </a>
                </li>

                <li class="nav-item  {{ request()->is('blog-posts*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog-posts.index') }}">
                        <span class="sidebar-icon">      <i class="ti-pencil-alt"></i>    </span>
                        <span class="sidebar-text">{{__('blog.Posts')}}</span>
                    </a>
                </li>

            </ul>
        </div>
    </li>
@endif
