  <!-- MENU SIDEBAR-->
  <aside class="menu-sidebar" id="main-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-link" aria-label="CoolAdmin home">
            <span class="logo-mark" aria-hidden="true">C</span>
            <span class="logo-text">CoolAdmin</span>
        </a>
        <button class="sidebar-close js-sidebar-toggle" type="button" aria-label="Close navigation">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa-solid fa-gauge-high"></i>
                        Dashboard
                    </a>
                </li>
            
                <li class="{{ request()->routeIs('profile.*') ? 'active' : '' }}">
                    <a href="{{ route('profile.edit') }}">
                        <i class="fa-solid fa-user"></i>
                        Profile
                    </a>
                </li>
            
                <li class="has-sub">
            
                    <a class="js-arrow" href="#">
            
                        <i class="fa-solid fa-gears"></i>
            
                        Administration
            
                    </a>
            
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
            
                        <li>
                            <a href="#">
                                Users
                            </a>
                        </li>
            
                        <li>
                            <a href="#">
                                Roles
                            </a>
                        </li>
            
                        <li>
                            <a href="#">
                                Permissions
                            </a>
                        </li>
            
                        <li>
                            <a href="#">
                                Settings
                            </a>
                        </li>
            
                    </ul>
            
                </li>
            
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->