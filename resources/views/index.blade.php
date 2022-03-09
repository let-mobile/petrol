<nav class="main-header bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </li>
      </ul>
</nav>
<h2>My Dashboard</h2>
