<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{route('admin.dashboard')}}" class="brand-link">
    <img src="{{ asset('assets/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PostMarkett</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('assets/backend/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
        <div class="info">
            <a href="#" class="d-block"> 
            {{Auth::user()->prenom}} {{Auth::user()->nom}}
            
            </a>   
        </div>
    </div>
    <!-- SidebarSearch Form -->
    <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="recherche" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
        </button>
        </div>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item {{ MenuActiveRoutes(['admin.dashboard'])}}">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{ areActiveRoutes(['admin.dashboard'])}} ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
        </li>
        <li class="nav-header">Produits</li>
        <li class="nav-item {{ MenuActiveRoutes(['marques.create','marques.index','marques.edit'])}}">
            <a href="#" class="nav-link {{ areActiveRoutes(['marques.create','marques.index','marques.edit'])}}">
                <i class="nav-icon fas fa-shopping-basket"></i>
                <p>
                Boutique de Marque
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('marques.create') }}" class="nav-link {{ areActiveRoutes(['marques.create'])}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nouvelle marque</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('marques.index') }}" class="nav-link {{ areActiveRoutes(['marques.index','marques.edit'])}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Liste des marque</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ MenuActiveRoutes(['categories.create','categories.index','categories.edit'])}}">
        <a href="#" class="nav-link {{ areActiveRoutes(['categories.create','categories.index','categories.edit'])}}">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
            Catégorie produit
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ route('categories.create') }}" class="nav-link {{ areActiveRoutes(['categories.create'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Nouvelle Catégorie</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link {{ areActiveRoutes(['categories.index','categories.edit'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste des Catégories</p>
            </a>
            </li>
        </ul>
        </li>
      <li class="nav-item {{ MenuActiveRoutes(['souscategories.create','souscategories.index','souscategories.edit'])}}">
        <a href="#" class="nav-link {{ areActiveRoutes(['souscategories.create','souscategories.index','souscategories.edit'])}}">
            <i class="nav-icon fas fa-shopping-basket"></i>
            <p>
            Sous Catégorie
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ route('souscategories.create') }}" class="nav-link {{ areActiveRoutes(['souscategories.create'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Nouvelle sous Catégorie</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('souscategories.index') }}" class="nav-link {{ areActiveRoutes(['souscategories.index','souscategories.edit'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Toutes les sous Catégories</p>
            </a>
            </li>
        </ul>
      </li>
      <li class="nav-item {{ MenuActiveRoutes(['products.create','products.index','products.edit','flashdeals.create','flashdeals.index','flashdeals.edit','soussouscategories.create','soussouscategories.index','soussouscategories.edit'])}}">
        <a href="#" class="nav-link {{ areActiveRoutes(['products.create','products.index','products.edit','flashdeals.create','flashdeals.index','flashdeals.edit', 'soussouscategories.create','soussouscategories.index','soussouscategories.edit'])}}">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
            Produits
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('soussouscategories.index')}}" class="nav-link {{ areActiveRoutes(['soussouscategories.create','soussouscategories.index','soussouscategories.edit'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste Sous-SousCategorie</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{route('products.create')}}" class="nav-link {{ areActiveRoutes(['products.create'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter un produit</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link {{ areActiveRoutes(['products.index','products.edit'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Tous les produits</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{route('flashdeals.index')}}" class="nav-link {{ areActiveRoutes(['flashdeals.create','flashdeals.index','flashdeals.edit'])}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Produits en Promotion</p>
            </a>
            </li>
        </ul>
      </li>
      <li class="nav-header">Clients</li>
      <li class="nav-item {{ MenuActiveRoutes(['customers.index'])}}">
        <a href="#" class="nav-link {{ areActiveRoutes(['customers.index']) }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
            Clients
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ route('customers.index') }}" class="nav-link {{ areActiveRoutes(['customers.index']) }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Listes des Clients</p>
            </a>
            </li>
        </ul>
      </li>
      <li class="nav-header">Configuration</li>
      <li class="nav-item {{ MenuActiveRoutes(['pays.index','pays.edit', 'villes.index', 'villes.edit', 'devises.index', 'devises.edit', 'sliders.index', 'sliders.edit'])}}">
        <a href="#" class="nav-link {{ areActiveRoutes(['pays.index','pays.edit', 'villes.index', 'villes.edit', 'devises.index', 'devises.edit', 'sliders.index', 'sliders.edit']) }}">
            <i class="nav-icon fas fa-cog"></i>
            <p>
            Configurations
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{ route('devises.index') }}" class="nav-link {{ areActiveRoutes(['devises.index', 'devises.edit']) }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste Des Devises</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('pays.index') }}" class="nav-link {{ areActiveRoutes(['pays.index','pays.edit']) }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Pays de Livraison</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('villes.index') }}" class="nav-link {{ areActiveRoutes(['villes.index', 'villes.edit']) }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Villes de Livraison</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('sliders.index') }}" class="nav-link {{ areActiveRoutes(['sliders.index', 'sliders.edit']) }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Sliders</p>
            </a>
            </li>
        </ul>
      </li>
      
        
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>