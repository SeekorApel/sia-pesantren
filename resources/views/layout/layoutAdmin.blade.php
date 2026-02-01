<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>SIA-PESANTREN</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/dataTables.bs5.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/daterangepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/select2-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/sweetalert2.min.js">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/theme.min.css" />
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.html" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="/assets/images/logo-full.png" alt="" class="logo logo-lg" />
                    <img src="/assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item">
                        <a href="/" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-caption">
                        <label>Penerimaan Santri Baru</label>
                    </li>
                    <li class="nxl-item">
                        <a href="{{ route('administrasi.pendaftaran.index') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Administrasi Pendaftaran</span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-cast"></i></span>
                            <span class="nxl-mtext">Gelombang Test</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('gelombang.test.gelombang1') }}">Gelombang 1</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Gelombang 2</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Gelombang 3</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Gelombang Rekomendasi</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item">
                        <a href="/gay1" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Status Penerimaan Santri</span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-caption">
                        <label>Madrasah</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Administrasi Kelas Santri</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="">Data Santri</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Kelas Santri</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Akademik Santri</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="">Jadwal Pelajaran</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Pengajaran</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                            <span class="nxl-mtext">Administrasi Kehadiran</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="">Absensi</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Izin Meninggalkan Pelajaran</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-caption">
                        <label>Pondok Pesantren</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                            <span class="nxl-mtext">Administrasi Asrama</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="">Data Kamar</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">PIC Kamar</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-caption">
                        <label>Swalayan Pesantren</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Administrasi Inventaris</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="">Data Produk</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Data Supplier</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item">
                        <a href="/gay22" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Transaksi Swalayan</span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-caption">
                        <label>Keuangan Pesantren</label>
                    </li>
                    <li class="nxl-item">
                        <a href="" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Daftar Tagihan</span>
                        </a>
                    </li>
                    <li class="nxl-item nxl-caption">
                        <label>Setting</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-shield"></i></span>
                            <span class="nxl-mtext">Master Data</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('master.pengurus.index') }}">Pengurus</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('master.asrama.index') }}">Asrama</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('master.kamar.index') }}">Kamar</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Tingkat kelas Qur'an</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Kelas Qur'an</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Tingkat Kelas kitab</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Jenjang Pendidikan Madrasah</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Tingkat Kelas Madrasah</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Kelas Madrasah</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Tahun Ajaran</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="">Pelajaran</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item">
                        <a href="" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-log-out"></i></span>
                            <span class="nxl-mtext">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    <header class="nxl-header">
        <div class="header-wrapper">
            <!--! [Start] Header Left !-->
            <div class="header-left d-flex align-items-center gap-4">
                <!--! [Start] nxl-head-mobile-toggler !-->
                <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <!--! [Start] nxl-head-mobile-toggler !-->
                <!--! [Start] nxl-navigation-toggle !-->
                <div class="nxl-navigation-toggle">
                    <a href="javascript:void(0);" id="menu-mini-button">
                        <i class="feather-align-left"></i>
                    </a>
                    <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
                <!--! [End] nxl-navigation-toggle !-->
                <!--! [Start] nxl-lavel-mega-menu-toggle !-->
                <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                    <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                        <i class="feather-align-left"></i>
                    </a>
                </div>
                <!--! [End] nxl-lavel-mega-menu-toggle !-->
                <!--! [Start] nxl-lavel-mega-menu !-->
                <div class="nxl-drp-link nxl-lavel-mega-menu">
                    <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                        <a href="javascript:void(0)" id="nxl-lavel-mega-menu-hide">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <!--! [End] nxl-lavel-mega-menu !-->
            </div>
            <!--! [End] Header Left !-->    
            <!--! [Start] Header Right !-->
            <div class="header-right ms-auto">
                <div class="d-flex align-items-center">
                    <div class="nxl-h-item dark-light-theme">
                        <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                            <i class="feather-moon"></i>
                        </a>
                        <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                            <i class="feather-sun"></i>
                        </a>
                    </div>
                    <div class="dropdown nxl-h-item">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                            <img src="/assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar me-0" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex align-items-center">
                                    <img src="/assets/images/avatar/1.png" alt="user-image" class="img-fluid user-avtar" />
                                    <div>
                                        <h6 class="text-dark mb-0">Ryan Unjuk Bakat</h6>
                                        <span class="fs-12 fw-medium text-muted">masAmba@gokgok.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="./auth-login-minimal.html" class="dropdown-item">
                                <i class="feather-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--! [End] Header Right !-->
        </div>
    </header>
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">
                            @yield('page-title', 'Dashboard')
                        </h5>
                    </div>

                    <ul class="breadcrumb">
                        {{-- <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li> --}}
                        @yield('breadcrumb')
                    </ul>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        {{-- <footer class="footer">

        </footer> --}}
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->

    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="/assets/vendors/js/vendors.min.js"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="/assets/vendors/js/jquery.min.js"></script>
    <script src="/assets/vendors/js/dataTables.min.js"></script>
    <script src="/assets/vendors/js/dataTables.bs5.min.js"></script>
    <script src="/assets/vendors/js/select2.min.js"></script>
    <script src="/assets/vendors/js/select2-active.min.js"></script>
    <script src="/assets/vendors/js/sweetalert2.min.js"></script>
    {{-- <script src="/assets/vendors/js/daterangepicker.min.js"></script>
    <script src="/assets/vendors/js/apexcharts.min.js"></script>
    <script src="/assets/vendors/js/circle-progress.min.js"></script> --}}
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="/assets/js/common-init.min.js"></script>
    {{-- <script src="/assets/js/dashboard-init.min.js"></script> --}}
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="/assets/js/theme-customizer-init.min.js"></script>
    <!--! END: Theme Customizer !-->
    <!-- Scripts -->
    @stack('scripts')
</body>

</html>