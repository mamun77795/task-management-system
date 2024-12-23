<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-user">
            <div class="sidebar-user-details">
                <div class="sidebar-userpic-btn">
                    <a href="{{route('dashboard')}}">
                        <h1 class="mt-2" style="color:#009cff; padding-top:10px;"><i class="fa fa-laptop-code me-3"></i></h1>
                        <h6 style="color:#009cff; font-size:1rem;">Task Management System</h6>
                    </a>
                </div>
                <div class="sidebar-userpic-btn">
                    <a href="{{route('profile.edit')}}" data-bs-toggle="tooltip" title="Profile">
                        <i data-feather="user"></i>
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Mail">
                        <i data-feather="mail"></i>
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Chat">
                        <i data-feather="message-square"></i>
                    </a>
                    <a href="" data-bs-toggle="tooltip" title="Log Out">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button style="border: none;" type="submit"><i data-feather="log-out"></i></button>
                        </form>
                    </a>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="monitor"></i><span>Tasks</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{route('tasks.create')}}">Create Task</a></li>
                    <li><a class="nav-link" href="{{route('tasks.index')}}">Manage Task</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <i data-feather="users"></i>
                    <span>Users</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('users')}}">All Users</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>