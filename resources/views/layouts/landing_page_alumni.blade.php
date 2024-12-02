<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('alumni/assets/images/favicon.ico') }}" type="{{ asset('image/x-icon') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('alumni/assets/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>BKK DOSQ-28</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/bootstrap.min.css') }}">
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/font-awesome.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/feather.css') }}">
    <!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/owl.carousel.min.css') }}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/magnific-popup.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/lc_lightbox.css') }}">
    <!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/bootstrap-select.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/dataTables.bootstrap5.min.css') }}">
    <!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/select.bootstrap5.min.css') }}">
    <!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/dropzone.css') }}">
    <!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/scrollbar.css') }}">
    <!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/datepicker.css') }}">
    <!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/flaticon.css') }}"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/swiper-bundle.min.css') }}">
    <!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/style.css') }}"><!-- MAIN STYLE SHEET -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css"
        href="{{ asset('alumni/assets/css/skins-type/skin-6.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alumni/assets/css/switcher.css') }}">

</head>

<body>


    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-3 mobile-sider-drawer-menu">
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar">
                    <div class="container-fluid clearfix">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                    <img src="{{ asset('alumni/assets/images/logo bkk.png') }}" style="width: 100px;"
                                        alt="" class="default-scroll-show">
                                </a>
                            </div>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Nav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                            <ul class="nav navbar-nav">
                                <li class="has-mega-menu"><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li class="has-child"><a href="{{ route('profil_bkk.index') }}">Profil BKK</a></li>
                                <li class="has-child"><a href="{{ route('loker_alumni') }}">Loker</a></li>
                                <li class="has-child"><a href="{{ route('mitra_alumni') }}">Mitra</a></li>
                                <li class="has-child"><a href="{{ route('pengumuman') }}">Blog</a></li>

                            </ul>
                        </div>
                        <div class="col-6 col-lg-3 text-right">
                            <!-- Pengguna sudah login -->
                            @if (Auth::check())
                                <div class="btn-group has-child">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ Storage::url('public/foto_profil/') . auth()->user()->profil->foto_profil }}"
                                            alt="user" class="rounded-circle" width="25px">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('alumni_dasboard') }}"><i
                                                    class="bi bi-grid-1x2 m-3"></i>Dashboard</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                                    class="bi bi-box-arrow-right m-3"></i>Logout</a></li>
                                    </ul>
                                </div>
                            @else
                                <!-- Memeriksa apakah pengguna belum login -->
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left">
                                        <a class="twm-nav-sign-up" href="{{ route('login-form') }}"
                                            type="button">Login</a>
                                    </div>
                                    <div class="twm-nav-btn-right">
                                        <a href="{{ route('daftar-form') }}" class="twm-nav-post-a-job">Register</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- NAV Toggle Button -->
                        <div class="col-6 d-lg-none text-right">
                            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse"
                                type="button" class="navbar-toggler collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar-first"></span>
                                <span class="icon-bar icon-bar-two"></span>
                                <span class="icon-bar icon-bar-three"></span>
                            </button>
                        </div>
                        <!-- MAIN Nav on Mobile -->
                        <div class="col-12 d-lg-none">
                            <div class="nav-animation header-nav navbar-collapse collapse justify-content-center">
                                <ul class="nav navbar-nav">
                                    <li class="has-mega-menu"><a href="{{ route('beranda') }}">Beranda</a></li>
                                    <li class="has-child"><a href="{{ route('profil_bkk.index') }}">Profil BKK</a>
                                    </li>
                                    <li class="has-child"><a href="{{ route('loker_alumni') }}">Loker</a></li>
                                    <li class="has-child"><a href="{{ route('mitra_alumni') }}">Mitra</a></li>
                                    <li class="has-child"><a href="{{ route('pengumuman') }}">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </header>


    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center"
            style="background-image:url({{ asset('alumni/assets/images/banner/1.jpg') }});">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">Dashboard</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Beranda</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->


        <!-- OUR BLOG START -->
        <div class="section-full p-t120  p-b90 site-bg-white">


            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                        <div class="side-bar-st-1">

                            <div class="twm-candidate-profile-pic">

                                <img src="{{ Storage::url('public/foto_profil/') . auth()->user()->profil->foto_profil }}"
                                    alt="">

                            </div>
                            <div class="twm-mid-content text-center">
                                <a href="candidate-detail.html" class="twm-job-title fw-bold">
                                    <h4>{{ auth()->user()->name }}</h4>
                                </a>
                                <p>{{ auth()->user()->profil->profesi }}</p>
                            </div>

                            <div class="twm-nav-list-1">
                                <ul>
                                    <li class="active"><a href="{{ route('alumni_dasboard') }}"><i
                                                class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                    <li><a href="{{ route('profil_alumni.index') }}"><i class="fa fa-user"></i>
                                            Profil
                                            Saya</a></li>
                                    <li><a href="{{ route('riwayat.index') }}"><i class="fa fa-suitcase"></i>Riwayat
                                            Lamaran</a></li>
                                    <li><a href="{{ route('ganti_password') }}"><i class="fa fa-fingerprint"></i>
                                            Ganti Password</a></li>
                                </ul>
                                
                            </div>

                        </div>

                    </div>

                    @yield('alumni')



                </div>
            </div>
        </div>
        <!-- OUR BLOG END -->



    </div>
    <!-- CONTENT END -->



    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>





    </div>


    <!-- OUR BLOG END -->
    <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
        <div class="container">
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index.html"><img src="{{ asset('alumni/assets/images/logo bkk.png') }}" alt=""></a>
                                </div>
                                <p>Bursa Kerja Khusus SMK Muhammadiyah 2 Kuningan</p>
                                <ul class="ftr-list">
                                    <li>
                                        <p><span>Alamat :</span> Jl. Raya Cigugur No.28, Kuningan.</p>
                                    </li>
                                    <li>
                                        <p><span>Email :</span> smkm2.kng@gmail.com</p>
                                    </li>
                                    <li>
                                        <p><span>No Telepon :</span> (0232) 873475</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.566424198648!2d108.468639!3d-6.975874!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f142eef88290d%3A0x48dd360d8e6cbcb6!2sSMK%20Muhammadiyah%202%20Kuningan!5e0!3m2!1sen!2sid!4v1713579898866!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">

                <div class="footer-bottom-info">

                    <div class="footer-copy-right">
                        <span class="copyrights-text">Copyright © 2023 by thewebmax All Rights Reserved.</span>
                    </div>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/groups/680701442041622/?ref=share&mibextid=NSMWBT"
                                class="fab fa-facebook-f"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-tiktok"></a></li>
                        <li><a href="https://www.instagram.com/bkk_dosq28?igsh=bnk4NGtvYWF1MGkw"
                                class="fab fa-instagram"></a></li>
                        <li><a href="https://www.youtube.com/@smkmuhammadiyah2kuningan695" class="fab fa-youtube"></a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </footer>


    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('alumni/assets/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('alumni/assets/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('alumni/assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('alumni/assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('alumni/assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('alumni/assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('alumni/assets/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
    <script src="{{ asset('alumni/assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('alumni/assets/js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('alumni/assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('alumni/assets/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
    <script src="{{ asset('alumni/assets/js/lc_lightbox.lite.js') }}"></script><!-- IMAGE POPUP -->
    <script src="{{ asset('alumni/assets/js/bootstrap-select.min.js') }}"></script><!-- Form js -->
    <script src="{{ asset('alumni/assets/js/dropzone.js') }}"></script><!-- IMAGE UPLOAD  -->
    <script src="{{ asset('alumni/assets/js/jquery.scrollbar.js') }}"></script><!-- scroller -->
    <script src="{{ asset('alumni/assets/js/bootstrap-datepicker.js') }}"></script><!-- scroller -->
    <script src="{{ asset('alumni/assets/js/jquery.dataTables.min.js') }}"></script><!-- Datatable -->
    <script src="{{ asset('alumni/assets/js/dataTables.bootstrap5.min.js') }}"></script><!-- Datatable -->
    <script src="{{ asset('alumni/assets/js/chart.js') }}"></script><!-- Chart -->
    <script src="{{ asset('alumni/assets/js/bootstrap-slider.min.js') }}"></script><!-- Price range slider -->
    <script src="{{ asset('alumni/assets/js/swiper-bundle.min.js') }}"></script><!-- Swiper JS -->
    <script src="{{ asset('alumni/assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('alumni/assets/js/switcher.js') }}"></script><!-- SHORTCODE FUCTIONS  -->


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
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/pages/dropify.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- STYLE SWITCHER  ======= -->

</body>


<!-- Mirrored from thewebmax.org/jobzilla/candidate-jobs-applied.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 03:01:24 GMT -->

</html>
