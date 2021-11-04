<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="#">
                        <i class="ficon" data-feather="menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email">
                        <i class="ficon" data-feather="mail"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat">
                        <i class="ficon" data-feather="message-square"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo">
                        <i class="ficon" data-feather="check-square"></i>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-id"></i><span class="selected-language">ID</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="#" data-language="id">
                        <i class="flag-icon flag-icon-id"></i>
                        ID
                    </a>
                    <a class="dropdown-item" href="#" data-language="en">
                        <i class="flag-icon flag-icon-us"></i>
                        EN
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-notification me-50">
                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                    <i class="ficon" data-feather="bell"></i>
                    {{-- <span class="badge rounded-pill bg-danger badge-up">5</span> --}}
                    <small class="badge rounded-pill bg-danger badge-up">5</small>
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">{{ __('Notifikasi') }}</h4>
                            <div class="badge rounded-pill badge-light-primary">6 {{ __('Baru') }}</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                        <a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar">
                                        <img src="{{ asset('') }}app-assets/images/portrait/small/avatar-s-15.jpg"
                                            alt="avatar" width="32" height="32">
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading">
                                        <span class="fw-bolder">Congratulation Sam </span>
                                    </p>
                                    <small class="notification-text"> Won the monthly best seller badge.</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex" href="#">
                            <div class="list-item d-flex align-items-start">
                                <div class="me-1">
                                    <div class="avatar">
                                        <img src="{{ asset('') }}app-assets/images/portrait/small/avatar-s-3.jpg"
                                            alt="avatar" width="32" height="32">
                                    </div>
                                </div>
                                <div class="list-item-body flex-grow-1">
                                    <p class="media-heading">
                                        <span class="fw-bolder">New message</span>&nbsp;received
                                    </p>
                                    <small class="notification-text"> You have 10 unread messages</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer">
                        <a class="btn btn-primary w-100" href="#">{{ __('Lihat Semua') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span
                            class="user-name fw-bolder">{{ Str::words(ucwords(auth()->user()->name), '2', '') }}</span>
                        <span class="user-status">Admin</span>
                    </div>
                    <span class="avatar">
                        <img class="round"
                            src="{{ asset('') }}assets/images/profile_photo/{{ auth()->user()->profile_photo }}"
                            alt="avatar" height="40" width="40"><span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="#">
                        <i class="me-50" data-feather="message-square"></i>
                        {{ __('Chat') }}
                    </a>
                    <a class="dropdown-item" href="{{ url('user/profile') }}">
                        <i class="me-50" data-feather="user"></i>
                        {{ __('Profil') }}
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ url('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                        <i class="me-50" data-feather="power"></i> Logout
                    </a>
                    <form id="form-logout" action="{{ url('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
