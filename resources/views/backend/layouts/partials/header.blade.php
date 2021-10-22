<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" style="">
        <li class="nav-item mr-1">{{ Auth::user()->name }}</li>
        <li class="nav-item mr-1"><a href="javascript:" class="btn btn-sm btn-primary" role="button">Profile</a></li>
        <li class="nav-item mr-1">
            <a href="javascript:" class="btn btn-sm btn-danger" role="button" onclick="event.preventDefault(); document.logoutForm.submit();">Logout</a>
            <form name="logoutForm" method="post" action="{{ route('backend.logout') }}">
                @csrf
            </form>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
