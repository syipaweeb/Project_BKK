<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/zoogler/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 10:30:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>ADMIN BKK</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Mannatthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="{{ asset('shortcut icon" href="assets/images/Logo BKK.png')}}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="fixed-left"><!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div><!-- Begin page -->
    <div id="wrapper"><!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu"><button type="button"
                class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i
                    class="ion-close"></i></button><!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center bg-logo">
                    <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo BKK.png')}}" height="80" alt="logo"></a>
                </div>
            </div>
            <!-- Logo admn -->
            <div class="sidebar-user"><img src="{{ asset('assets/images/users/avatar-6.jpg')}}" alt="user"
                    class="rounded-circle img-thumbnail mb-1">
                <h6 class="">Admin BKK</h6>
                <p class="online-icon text-dark"><i class="mdi mdi-record text-success"></i>online</p>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item"><a href="#" class="" data-toggle="tooltip" data-placement="top"
                            title="Profile"><i class="dripicons-user text-purple"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="" data-toggle="tooltip" data-placement="top"
                            title="Settings"><i class="dripicons-gear text-dark"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="" data-toggle="tooltip" data-placement="top"
                            title="Log out"><i class="dripicons-power text-danger"></i></a></li>
                </ul>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li><a href="dasboard.html" class="waves-effect"><i class="bi bi-columns-gap"></i>
                                <span>Dashboard</span></a></li>
                        <hr>
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                <i class="bi bi-gear-wide-connected"></i>
                                <span>Setup BKK</span><span class="float-right"><i
                                        class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="Profil bkk.html">Profil BKK</a></li>

                                <li><a href="manajemen user.html">Manajemen User</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('data_mitra.index') }}" class="waves-effect"><i class="bi bi-buildings"></i>
                                <span>Manajemen Mitra</span></a>
                        </li>
                        <li>
                            <a href="manajemen siswa.html" class="waves-effect"><i class="bi bi-people"></i> <span>
                                    Manajemen Siswa </span>

                        <li><a href="{{ route('loker.index') }}" class="waves-effect"><i class="bi bi-suitcase-lg"></i>
                                <span>Bursa kerja</span></a>
                        </li>
                        <li><a href="pengumuman.html" class="waves-effect"><i class="bi bi-megaphone"></i>
                                <span>Pengumuman</span></a>
                        </li>

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div><!-- end sidebarinner -->
        </div><!-- Left Sidebar End --><!-- Start right Content here -->
    </div><!-- Left Sidebar End --><!-- Start right Content here -->
    <div class="content-page"><!-- Start content -->
        <div class="content"><!-- Top Bar Start -->
            <div class="topbar">
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <!-- Profil Sisi Kanan Atas -->
                        <li class="list-inline-item dropdown notification-list"><a
                                class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                                    src="{{ asset('assets/images/users/avatar-6.jpg')}}" alt="user" class="rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown"><!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div><a class="dropdown-item" href="#"><i
                                        class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a> <a
                                    class="dropdown-item" href="#">
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"><i
                                            class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ================================================================================================ -->
                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left"><button class="button-menu-mobile open-left waves-light waves-effect"><i
                                    class="mdi mdi-menu"></i></button></li>
                        <li class="hide-phone app-search">
                            <form role="search" class=""><input type="text" placeholder="Search..."
                                    class="form-control"> <a href="#"><i class="fa fa-search"></i></a></form>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div><!-- Top Bar End -->


            @yield('content')

        </div><!-- content -->
    </div><!-- End Right content here -->
    </div><!-- END wrapper --><!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script><!-- Buttons

    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script><!-- Responsive examples -->
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <script>
$("#datatable").DataTable();
            </script>

        {{-- <script src="{{ asset('assets/pages/datatables.init.js')}}"></script> --}}

        {{-- <script src="{{ asset('assets/pages/form-advanced.js')}}"></script><!-- App js --> --}}
        <script src="{{ asset('assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from mannatthemes.com/zoogler/vertical/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 10:32:27 GMT -->

</html>
