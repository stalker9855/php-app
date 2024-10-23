<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link w-100" href="{{ url('/main') }}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w-100" href="{{ url('/services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w-100" href="{{ url('/contacts') }}">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w-100" href="{{ url('/about') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link w-100" href="{{ url('/profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger nav-link w-100" style="display: block;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
