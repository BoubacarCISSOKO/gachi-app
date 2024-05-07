<!DOCTYPE html>
<html lang="en">
   <head>
       @include('layouts.backend.head')
   </head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('layouts.backend.header')
        @include('layouts.backend.sidebar')
        @yield('content')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        @include('layouts.backend.footer')
    </div>
    @include('layouts.backend.scripts')
</body>
</html>