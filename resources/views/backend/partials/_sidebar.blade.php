<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " href="{{route('dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('profile')}}">
                    <span data-feather="user"></span>
                    My Profile
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('orders.index')}}">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
        </ul>
    </div>
</nav>