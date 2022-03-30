<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-block d-sm-flex">
            <button id="sidebar-toggle"
                    class="sidebar-toggle me-3 btn btn-icon-only d-none d-lg-inline-block align-items-center justify-content-center">
                <svg class="toggle-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>


        </div>

        <div class="d-flex justify-content-end w-100" id="navbarSupportedContent">
            <!-- Navbar links -->
            <a href="{{url('/')}}" class="btn btn-primary visit-website-btn d-none d-md-block" target="_blank"><span
                    class="ti-link"></span> {{__('common.Visit Website')}}</a>
            <ul class="navbar-nav align-items-center">
                <li class="btn" id="full-view"><i class="ti-fullscreen"></i></li>
                <li class="d-none btn" id="full-view-exit"><i class="ti-zoom-out"></i></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark notification-bell {{count(app('notifications'))!=0?'unread':''}} dropdown-toggle"
                       data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown"
                       data-bs-display="static" aria-expanded="false">
                        <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                        <div class="list-group list-group-flush">
                            <a href="#"
                               class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>


                            @forelse(app('notifications') as $notification)
                                <a href="#" class="list-group-item list-group-item-action border-bottom mark-as-read" data-id="{{ $notification->id }}">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder"
                                                 src="https://ui-avatars.com/api/?background=random&name= {{ $notification->data['name'] }}"
                                                 class="avatar-md rounded">
                                        </div>
                                        <div class="col ps-0 ms-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">
                                                        {{ $notification->data['name'] }}
                                                    </h4>
                                                </div>
                                                <div class="text-end">
                                                    <small class="text-danger">{{ $notification->created_at->diffForHumans() }}</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">
                                                ({{ $notification->data['email'] }}) has just registered.
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                @if($loop->last)
                                    <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3"  id="mark-all">
                                        <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                             viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        {{__('common.Mark all as read')}}
                                    </a>
                                @endif
                            @empty
                                <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                    {{__('common.There are no new notifications')}}
                                </a>
                            @endforelse


                        </div>
                    </div>
                </li>
                @if( app('preferences')['multilingual'])
                    <li class="nav-item dropdown">
                        <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center mx-xs-3 "
                           data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown"
                           data-bs-display="static" aria-expanded="false">

                            {{app('languageFullName')->native}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-center mt-2 py-0">
                            <div class="list-group list-group-flush">
                                @foreach(app('activeLanguages') as $language)
                                    <a href="{{route('localization.language.changeLanguage',$language->code)}}"
                                       class="list-group-item list-group-item-action border-bottom {{app()->getLocale()==$language->code?'active text-white':''}}">
                                        <h4 class="h6 mb-0 text-small">
                                            {{$language->native}}
                                        </h4>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </li>
                @endif


                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle"
                                 src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}"
                                 alt="{{ Auth::user()->name }}">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">


                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                            <span class="ti-user"></span>

                            {{ __('common.My Profile') }}
                        </a>

                        <a class="dropdown-item d-flex align-items-center"
                           href="{{ route('profile.change-password') }}">
                            <span class="ti-lock"></span>

                            {{ __('common.Change Password') }}
                        </a>
                        @if(isAdmin())
                            <div role="separator" class="dropdown-divider my-1"></div>
                            <a class="dropdown-item d-flex align-items-center"
                               data-bs-toggle="modal" data-bs-target="#changeBusinessModal"
                               href="#">
                                <span class="ti-settings"></span>
                                {{__('common.Switch Business')}}
                            </a>
                        @endif

                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            {{ __('common.Log Out') }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
