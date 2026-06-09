<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">

                <button class="sidebar-toggle js-sidebar-toggle"
                        type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="main-sidebar">
                    <i class="fa-solid fa-bars" aria-hidden="true"></i>
                </button>

                <form class="form-header" role="search" onsubmit="return false">
                    <i class="fa-solid fa-magnifying-glass form-header__icon" aria-hidden="true"></i>
                    <input class="au-input au-input--xl"
                           type="search"
                           name="search"
                           placeholder="Search anything…"
                           aria-label="Search">
                    <kbd class="form-header__hint" aria-hidden="true">⌘K</kbd>
                </form>

                <div class="header-button">

                    {{-- Notification Area --}}
                    <div class="noti-wrap">

                        <div class="noti__item js-item-menu"
                             role="button"
                             tabindex="0"
                             aria-haspopup="true"
                             aria-label="Notifications">

                            <i class="fa-solid fa-bell"></i>

                            <span class="quantity">0</span>

                            <div class="notifi-dropdown js-dropdown">

                                <div class="notifi__title">
                                    <p>Notifications</p>
                                </div>

                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </div>

                                    <div class="content">
                                        <p>No notifications available</p>
                                        <span class="date">
                                            {{ now()->format('d M Y H:i') }}
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    {{-- Account --}}
                    <div class="account-wrap">

                        <div class="account-item clearfix js-item-menu"
                             role="button"
                             tabindex="0"
                             aria-haspopup="true"
                             aria-label="Account menu">

                            <div class="image">
                                <img src="{{ asset('assets/images/default-avatar.png') }}"
                                     alt="{{ Auth::user()->name }}">
                            </div>

                            <div class="content">
                                <a class="js-acc-btn" href="#">
                                    {{ Auth::user()->name }}
                                </a>
                            </div>

                            <div class="account-dropdown js-dropdown">

                                <div class="info clearfix">

                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/default-avatar.png') }}"
                                                 alt="{{ Auth::user()->name }}">
                                        </a>
                                    </div>

                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">
                                                {{ Auth::user()->name }}
                                            </a>
                                        </h5>

                                        <span class="email">
                                            {{ Auth::user()->email }}
                                        </span>
                                    </div>

                                </div>

                                <div class="account-dropdown__body">

                                    <div class="account-dropdown__item">
                                        <a href="{{ route('profile.edit') }}">
                                            <i class="fa-solid fa-user"></i>
                                            Profile
                                        </a>
                                    </div>

                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="fa-solid fa-gear"></i>
                                            Settings
                                        </a>
                                    </div>

                                </div>

                                <div class="account-dropdown__footer">

                                    <a href="#"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                        <i class="fa-solid fa-power-off"></i>

                                        Logout

                                    </a>

                                    <form id="logout-form"
                                          action="{{ route('logout') }}"
                                          method="POST"
                                          class="d-none">
                                        @csrf
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</header>