<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item">
                <a href="{{ request()->fullUrlWithQuery(['theme' => 'dark']) }}" class="nav-link px-0 hide-theme-dark"
                   title="@lang('Enable dark mode')" data-bs-toggle="tooltip"
                   data-bs-placement="bottom">
                    <i class="ti ti-moon"></i>
                </a>
                <a href="{{ request()->fullUrlWithQuery(['theme' => 'light']) }}" class="nav-link px-0 hide-theme-light"
                   title="@lang('Enable light mode')" data-bs-toggle="tooltip"
                   data-bs-placement="bottom">
                    <i class="ti ti-sun"></i>
                </a>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown">
                    <div class="d-xl-block ps-2">
                        <div>{{ auth()->user()?->name }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="{{ route('password.request') }}" class="dropdown-item">@lang('Change password')</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="dropdown-item">@lang('Log out')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                <ul class="navbar-nav">

                    @include('components.nav.nav-item', ['routes' => 'home', 'link' => route('home'), 'title' => 'Home'])

                    @component('components.nav.nav-dropdown', ['routes' => ['settings', 'users'], 'title' => 'Settings', 'icon' => 'settings'])
                        @include('components.nav.dropdown-item', ['routes' => 'settings', 'link' => route('settings'), 'title' => 'Settings'])
                        @include('components.nav.dropdown-item', ['routes' => 'users', 'link' => route('users'), 'title' => 'User Accounts'])
                    @endcomponent

                </ul>
            </div>
        </div>
    </div>
</header>
