<header>
    <!-- Account menu dropdown (desktop) -->
    <ul id="account_menu" class="dropdown-content">
        <li><a href="#!">Profile</a></li>
        <li class="divider"></li>
        <li><a href="{{ $logout_url }}">Logout</a></li>

    </ul>
    <!-- Create menu dropdown (desktop) -->
    <ul id="create_menu" class="dropdown-content">
        <li><a href="#!">Entry</a></li>
        <li><a href="#!">Category</a></li>
    </ul>

    <ul id="mobile_menu" class="sidenav">
        <li><a href="#!">Dashboard</a></li>
        <li><a href="#!">Entries</a></li>
        <li><a href="#!">Categories</a></li>
        <li><a href="#!">Users</a></li>
        <li><a href="#!">Profile</a></li>
        <li><a href="{{ $logout_url }}">Logout</a></li>
    </ul>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Journal</a>
                <a href="#" data-target="mobile_menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li @if ($active_page === 'dashboard') class="active" @endif><a href="{{ $dashboard_url }}">Dashboard</a></li>
                    <li @if ($active_page === 'entries') class="active" @endif><a href="{{ $entries_url }}">Entries</a></li>
                    <li @if ($active_page === 'categories') class="active" @endif><a href="{{ $categories_url }}">Categories</a></li>
                    <li @if ($active_page === 'users') class="active" @endif><a href="#!">Users</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="account_menu"><i class="material-icons right">account_box arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="parallax-container parallax-page-heading">
        <div class="parallax"><img src="{{ $assets_url }}/images/title-images/photo-of-island-during-golden-hour-1119973.jpg"></div>
        <div class="container">
            <h2 class="white-text text-shadow vertical-center">@yield('pageTitle')</h2>
        </div>
    </div>
</header>
<div style="margin:0 auto; max-width:800px">
@include('components/alerts')
</div>