<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url(); ?>assets/index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li><a href="">Profile</a></li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url(); ?>assets/index3.html" class="brand-link">
                <img src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">Dashboard</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Navbar Menu -->
                        <li class="nav-header">MENU</li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard/aset/'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Aset</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard/barang/'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard/kategori/'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard/reparasi/'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Reparasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard/pengajuan/'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Pengajuan</p>
                            </a>
                        </li>
                        <!-- Navbar User -->
                        <li class="nav-header">SETTING</li>
                        <li class="nav-item">
                            <a href="<?= base_url('/dashboard/user/'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>User</p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>