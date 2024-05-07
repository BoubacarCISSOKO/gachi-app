<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{route('admin.dashboard')}}" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link"><i class="fas fa-globe"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Recherche" aria-label="Recherche">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i> <strong>Profile</strong>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a  href="{{route('admin.logout')}}" class="dropdown-item">
            <i class="fas fa-edit"> Profile</i>
          </a>
          <div class="dropdown-divider"></div>  
          <a  href="{{route('admin.logout')}}" class="dropdown-item"> 
            <i class="fas fa-power-off"> Se Deconnecter</i>
          </a> 
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        @php $orders = \App\Models\Order::all()->count(); @endphp
        @php $users = \App\Models\User::all()->count(); @endphp
        @php $notification = \App\Models\Notification::all()->count(); @endphp
        <a class="nav-link" data-toggle="dropdown" href="{{route('admin.dashboard')}}">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{$orders + $users + $notification}} </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Notifications Totales: {{$orders + $users + $notification}} </span>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.dashboard')}}" class="dropdown-item">
          <i class="fas fa-shopping-cart"></i> {{$orders}} commandes
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.dashboard')}}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> {{$users}} Clients
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.dashboard')}}" class="dropdown-item">
            <i class="fas fa-envelope"></i> {{$notification}} Notifications envoyées par <br> e-mail après les commandes
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('admin.dashboard')}}" class="dropdown-item dropdown-footer">Voir toutes les Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->