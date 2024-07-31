<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <img width="40px" src="{{asset('user/assets/images/logo_muga.png')}}" alt="">
        <div class="sidebar-brand-text mx-3">SMUGA</div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Sekolah
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('event_admin')}}">
            <i class="fa-regular fa-calendar-days"></i>
            <span>Event Sekolah</span></a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('berita_admin')}}">
            <i class="fa-solid fa-newspaper"></i>
            <span>Berita Sekolah</span></a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('view_pendaftaran')}}">
            <i class="fas fa-clipboard-list"></i>
            <span>Pendaftaran</span></a>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('prestasi_admin')}}">
            <i class="fa-solid fa-image"></i>
            <span>Foto</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('ekskuls_admin')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Ekstrakurikuler</span></a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Galery
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->


    <!-- Nav Item - Tables
    <li class="nav-item">
        <a class="nav-link" href="{{route('vidio_admin')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Vidio</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->

</ul>