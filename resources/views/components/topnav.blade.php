

<nav class="main-header navbar navbar-expand navbar-dark navbar-light">

    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    {{-- <a href="{{route('home')}}" class="nav-link"><b>Tableau de bord</b></a> --}}
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="/profile" class="nav-link"><b>Profil</b></a>
    </li>
    </ul>
    <ul class="navbar-nav ml-auto">





        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        {{-- <i class="far fa-bell"></i> --}}
        {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        {{-- <span class="dropdown-header">15 Notifications</span> --}}
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        {{-- <i class="fas fa-envelope mr-2"></i> 4 new messages --}}
        {{-- <span class="float-right text-muted text-sm">3 mins</span> --}}
        </a>

        <div class="dropdown-divider"></div>
        {{-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-user"></i>
        </a>


        </li>
        </ul>
        </nav>
