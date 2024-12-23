<div class="navbar-bg"></div>

<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline me-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-bs-toggle="sidebar"
                    class="nav-link nav-link-lg
                        collapse-btn"> <i data-feather="menu"></i></a>
            </li>
            <li>
                <form class="form-inline me-auto">
                    <div class="search-element d-flex">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
            </a></li>

        <li class="dropdown"><a href="#" data-bs-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user" style="color: black;"> Profile <span
                    class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Hello, {{ Auth::user()->name }}</div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon"> <i
                        class="far
                            fa-user"></i> Edit Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button style="border: none;" type="submit">Logout</button>
                    </form>
                </a>

            </div>
        </li>
    </ul>
</nav>
