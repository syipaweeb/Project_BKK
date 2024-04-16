@extends('layouts.landing_page')
@section('content')
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('alumni/assets/images/banner/1.jpg')}});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Riwayat Lamaran</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.html">Beranda</a></li>
                        <li>Riwayat Lamaran</li>
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

                            <img src="{{asset('alumni/assets/images/user-avtar/pic4.jpg')}}" alt="">
                            <div class="upload-btn-wrapper">

                                <div id="upload-image-grid"></div>
                                <button class="site-button button-sm">Upload Photo</button>
                                <input type="file" name="myfile" id="file-uploader"
                                    accept=".jpg, .jpeg, .png">
                            </div>

                        </div>

                        <div class="twm-mid-content text-center">
                            <a href="candidate-detail.html" class="twm-job-title">
                                <h4>Randall Henderson </h4>
                            </a>
                            <p>IT Contractor</p>
                        </div>

                        <div class="twm-nav-list-1">
                            <div class="twm-nav-list-1">
                                <ul>
                                    <li class="active"><a href="candidate-dashboard.html"><i
                                                class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                    <li><a href="candidate-profile.html"><i class="fa fa-user"></i> Profil
                                            Saya</a></li>
                                    <li><a href="candidate-jobs-applied.html"><i
                                                class="fa fa-suitcase"></i>Riwayat Lamaran</a></li>
                                    <li><a href="candidate-my-resume.html"><i class="fa fa-receipt"></i>
                                            Resume</a></li>
                                    <li><a href="candidate-change-password.html"><i
                                                class="fa fa-fingerprint"></i> Ganti Password</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                    <div class="twm-right-section-panel candidate-save-job site-bg-gray">
                        <!--Filter Short By-->
                        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                            <span class="woocommerce-result-count-left">Melamar 25 pekerjaan</span>
                            </form>

                        </div>

                        <div class="twm-jobs-list-wrap">
                            <ul>
                                <li>
                                    <li>
                                        <div class="twm-jobs-list-style1 mb-5">
                                            <div class="twm-media">
                                                <img class="img-fluid" style="width: 100%" src="{{ asset('alumni/assets/images/jobs-company/ahm.png')}}" alt="">
                                            </div>
                                            <div class="twm-mid-content">
                                                <a href="job-detail.html" class="twm-job-title">
                                                    <h4>Honda<span class="twm-job-post-duration"></span></h4>
                                                </a>
                                                <p class="twm-job-address">Jl. Laksda Yos Sudarso - Sunter 1 Jakarta 14350, Indonesia</p>

                                            </div>
                                            <div class="twm-right-content">

                                                <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>

                                            </div>
                                        </div>
                                    </li>
                            </ul>
                        </div>

                        <div class="pagination-outer">
                            <div class="pagination-style1">
                                <ul class="clearfix">
                                    <li class="prev"><a href="javascript:;"><span> <i
                                                    class="fa fa-angle-left"></i> </span></a></li>
                                    <li><a href="javascript:;">1</a></li>
                                    <li class="active"><a href="javascript:;">2</a></li>
                                    <li><a href="javascript:;">3</a></li>
                                    <li><a class="javascript:;" href="javascript:;"><i
                                                class="fa fa-ellipsis-h"></i></a></li>
                                    <li><a href="javascript:;">5</a></li>
                                    <li class="next"><a href="javascript:;"><span> <i
                                                    class="fa fa-angle-right"></i> </span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- OUR BLOG END -->

        <!-- FOOTER START -->
        <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
            <div class="container">

                <!-- NEWS LETTER SECTION START -->
                <div class="ftr-nw-content">
                    <div class="row">

                        <div class="col-md-12">
                            <form>
                                <div class="ftr-nw-form">
                                    <input name="news-letter" class="form-control" placeholder="Enter Your Email"
                                        type="text">
                                    <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- NEWS LETTER SECTION END -->
                <!-- FOOTER BLOCKES START -->
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-6 col-md-12">

                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index.html"><img src="{{ asset('alumni/assets/images/logo bkk.png')}}" alt=""></a>
                                </div>
                                <p>Bursa Kerja Khusus SMK Muhammadiyah 2 Kuningan</p>
                                <ul class="ftr-list">
                                    <li>
                                        <p><span>Alamat :</span> Jl. Raya Cigugur No.28,Kuningan. </p>
                                    </li>
                                    <li>
                                        <p><span>Email :</span> smkm2.kng@gmail.com</p>
                                    </li>
                                    <li>
                                        <p><span>No Telepon :</span>: (0232) 873475</p>
                                    </li>
                                </ul>
                            </div>

                        </div>



                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">

                    <div class="footer-bottom-info">

                        <div class="footer-copy-right">
                            <span class="copyrights-text"> 2023 Bursa kerja kusus</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="assets/javascript:void(0);"
                                    class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-tiktok"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </footer>
        <!-- FOOTER END -->
</div>
<!-- CONTENT END -->
@endsection
