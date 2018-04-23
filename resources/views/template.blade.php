<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Simple Frontend Test</title>

		<!-- Scripts -->
		<script type="text/javascript" src="{{ asset('dashboard/js/jquery-3.1.1.min.js') }}"></script>
		<!-- css style -->
		<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/plugins/toastr/toastr.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/plugins/toastr/toastr.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/plugins/select2/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/plugins/iCheck/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/plugins/chosen/bootstrap-chosen.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/js/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/tooltipster.bundle.min.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/custom.css') }}">

	</head>
	<body class="pace-done">

        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <span>
                                    <img alt="image" src="{{ asset('img/logo.png') }}" height="35px"/>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span class="nav-label">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-file-text-o"></i>
                                <span class="nav-label">
                                    Laporan
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-label">
                                    BISNIS
                                </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-building"></i>
                                        Profil Bisnis
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bank"></i>
                                        Outlet
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-key"></i>
                                        Lisensi Perangkat
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users"></i>
                                        Karyawan
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#">
                                <span class="nav-label">
                                    PRODUK
                                </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-folder"></i>
                                        Manajemen Produk
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-tag"></i>
                                        Promo & Diskon
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-label">
                                    INVENTORI
                                </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-in"></i>
                                        Stok Masuk
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out"></i>
                                        Stok Keluar
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-random"></i>
                                        Stok Opname
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-retweet"></i>
                                        Transfer Stok
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users"></i>
                                        Supplier
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-file-text"></i>
                                        Purchase Order
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-label">
                                    MARKETING
                                </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bar-chart-o"></i>
                                        Performa Marketing
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-vcard-o"></i>
                                        Pelanggan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-mobile-phone"></i>
                                        Aplikasi Pelanggan
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="gray-bg" id="page-wrapper">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <span class="minimalize-styl-2 trial-info">29 hari lagi Trial berakhir</span>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted program-referal">
                                    <span class="fa fa-suitcase"></span>&nbsp;
                                    Program Referal
                                </span>
                            </li>
                            <li>
                                |
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-bell">
                                    </i>
                                    <span class="label label-primary">
                                        2
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-envelope fa-fw">
                                                </i>
                                                You have 2 messages
                                                <span class="pull-right text-muted small">
                                                    4 minutes ago
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-envelope fa-fw">
                                                </i>
                                                You have 1 message
                                                <span class="pull-right text-muted small">
                                                    10 minutes ago
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle-user" data-toggle="dropdown" href="#">
                                    <span>
                                        Irfan Rosandi
                                        <i class="fa fa-sort-desc"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-users">
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-user"></i>
                                                Profil
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <i class="fa fa-sign-out"></i>
                                                Logout
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                @yield('content')

                <div class="footer">
                    <div class="pull-right">
                        
                    </div>
                    <div>
                        <strong>
                            Copyright
                        </strong>
                        Tubagus Axel Luthfiady © 2018
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
		<script type="text/javascript" src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/inspinia.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/pace/pace.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/toastr/toastr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/select2/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/chosen/chosen.jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/iCheck/icheck.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/tooltipster.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/plugins/validate/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('dashboard/js/custom.js') }}"></script>

        <script>
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true,
                "positionClass" : "toast-bottom-right",
                "showDuration": "400",
                "hideDuration": "1000",
                "timeOut": "7000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>
	</body>
</html>
