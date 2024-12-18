<!doctype html>
<html lang="en" class="dark-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Loader -->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <!-- Plugins CSS -->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/header-colors.css') }}" rel="stylesheet">

    <!-- Search Kelas -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <title>Fobia - Bootstrap5 Admin Template</title>
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">UKM Hub</h4>
                </div>
            </div>

            <!-- Navigation -->
            <ul class="metismenu" id="menu">
                <li>
                    <a class="sidebar-link {{ Request::is('home') ? 'active' : '' }}" href="/home">
                        <div class="parent-icon"><ion-icon name="home-outline"></ion-icon></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">Pendataan</li>
                <li>
                    <a class="sidebar-link {{ Request::is('ukm') ? 'active' : '' }}" href="/ukm">
                        <div class="parent-icon"><ion-icon name="person-outline"></ion-icon></div>
                        <div class="menu-title">Data Anggota</div>
                    </a>
                    <a class="sidebar-link {{ Request::is('ukm/create') ? 'active' : '' }}" href="/ukm/create">
                        <div class="parent-icon"><ion-icon name="person-add-outline"></ion-icon></div>
                        <div class="menu-title">Tambah Anggota</div>
                    </a>
                </li>
                <li class="menu-label">Pendaftaran</li>
                <li>
                    <a class="sidebar-link {{ Request::is('daftar') ? 'active' : '' }}" href="/daftar">
                        <div class="parent-icon"><ion-icon name="person-outline"></ion-icon></div>
                        <div class="menu-title">Data Pendaftar</div>
                    </a>
                    <a class="sidebar-link {{ Request::is('daftar/create') ? 'active' : '' }}" href="/daftar/create">
                        <div class="parent-icon"><ion-icon name="person-add-outline"></ion-icon></div>
                        <div class="menu-title">Tambah Pendaftar</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- End Sidebar -->

        <!-- Top Header -->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle" href="javascript:;" data-bs-toggle="dropdown">
                                <img src="assets/images/avatars/06.png" class="user-img" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/avatars/default.png" alt="Default Profile" class="rounded-circle" width="54" height="54">
                                            <div>
                                                <h6 class="mb-0 dropdown-user-name">Fadhil</h6>
                                                <small class="text-secondary">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"
                                        onclick="document.getElementById('logout-form').submit();">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- End Top Header -->

        <!-- Page Content Wrapper -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- Breadcrumb or additional content can go here -->
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-text">
                Copyright &copy; 2024. All rights reserved.
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Back To Top Button -->
        <a href="javascript:;" class="back-to-top">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>

        <!-- Overlay -->
        <div class="overlay nav-toggle-icon"></div>

    </div> <!-- End Wrapper -->

    <!-- JS Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="assets/plugins/chartjs/chart.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Search -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.kelas').select2({
                placeholder: 'Cari kelas...',
                allowClear: true
            });
        });
    </script>

    <!-- Select2 Initialization -->
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: function() {
                    return $(this).data('placeholder');
                },
                allowClear: true,
                width: 'resolve'
            });
        });
    </script>
</body>

</html>
