<body class="animsition">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url() ?>assets/temp-admin/images/icon/logo-sepeda.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo base_url('administrator/dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Rental
                                <span class="arrow ml-5">
                                    <i class="fas fa-angle-down ml-5"></i>
                                </span></a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('administrator/rental') ?>"><i class="fas fa-upload"></i>Peminjaman</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/pengembalian') ?>"><i class="fas fa-download"></i>Pengembalian</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/laporan')?>">
                                <i class="far fa-chart-bar"></i>Laporan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/sepeda') ?>">
                                <i class="fas fa-bicycle"></i>Sepeda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/customer')?>">
                                <i class="fa fa-users"></i>Customer</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/pegawai')?>">
                                <i class="fa fa-user-circle"></i>Pegawai</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cog"></i>Pengaturan
                                <span class="arrow ml-5">
                                    <i class="fas fa-angle-down ml-2"></i>
                                </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="register.html"><i class="zmdi zmdi-account"></i>Account</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html"><i class="fa fa-user-circle"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/auth/logout') ?>">
                                <i class="far fa-logout"></i>Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php echo base_url('administrator/dashboard') ?>">
                    <img src="<?php echo base_url() ?>assets/temp-admin/images/icon/logo-sepeda.png" alt="Rental Sepeda" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo base_url('administrator/dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <hr class="sidebar-divider"><div class="text-muted">Transaksi</div>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Rental
                                <span class="arrow ml-5">
                                    <i class="fas fa-angle-down ml-5"></i>
                                </span></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('administrator/rental') ?>"><i class="fas fa-upload"></i>Peminjaman</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/pengembalian') ?>"><i class="fas fa-download"></i>Pengembalian</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/laporan')?>">
                                <i class="far fa-chart-bar"></i>Laporan</a>
                        </li>
                        <li>
                        <hr class="sidebar-divider">
                        <div class="text-muted">Data Master</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/sepeda') ?>">
                                <i class="fas fa-bicycle"></i>Sepeda</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/customer')?>">
                                <i class="fa fa-users"></i>Customer</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/pegawai')?>">
                                <i class="fa fa-user-circle"></i>Pegawai</a>
                        </li>
                        <hr class="sidebar-divider">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cog"></i>Pengaturan
                                <span class="arrow ml-5">
                                    <i class="fas fa-angle-down ml-1"></i>
                                </span></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="register.html"><i class="zmdi zmdi-account"></i>Account</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html"><i class="fa fa-user-circle"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/auth/logout') ?>">
                                <i class="fa fa-sign-out-alt"></i>Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->