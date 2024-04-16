@extends('layouts.landing_page')
@section('content')

<div class="page-content">




    <!-- INNER PAGE BANNER -->
 <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('alumni/assets/images/banner/1.jpg')}});">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">~
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Detail Loker</h2>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

    <!-- OUR BLOG START -->
    <div class="section-full  p-t120 p-b90 bg-white">
        <div class="container">

            <!-- BLOG SECTION START -->
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-8 col-md-12">
                        <!-- Candidate detail START -->
                        <div class="cabdidate-de-info">
                            <div class="twm-job-self-wrap">
                                <div class="twm-job-self-info">
                                    <div class="twm-job-self-top">

                                        <div class="twm-media-bg">
                                            <img src="{{ Storage::url('public/banner/') . $loker->banner}}"

                                            class="rounded" style="width: 100%">
                                            <div class="twm-jobs-category green"></div>
                                        </div>


                                        <div class="twm-mid-content">

                                            <div class="twm-media">
                                                <img src="{{ Storage::url('public/logo/') . $loker->logo}}"

                                            class="rounded" style="width: 100%">
                                            </div>

                                            <h4 class="twm-job-title">{{ $loker->nama_perusahaan }}</h4>
                                            <div class="twm-job-self-mid">
                                            </div>

                                            <div class="twm-job-self-bottom">
                                                <a class="site-button" data-bs-toggle="modal"
                                                    href="#apply_job_popup" role="button">
                                                    Ajukan Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <h4 class="twm-s-title">Deskripsi Pekerjaan</h4>

                            <p>{{ $loker->deskripsi }}
                            </p>

                            <h4 class="twm-s-title">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 rightSidebar">

                        <div class="side-bar mb-4">
                            <div class="twm-s-info2-wrap mb-5">
                                <div class="twm-s-info2">
                                    <h4 class="section-head-small mb-4">Informasi Pekerjaan</h4>
                                    <ul class="twm-job-hilites2">

                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-calendar-alt"></i>
                                                <span class="twm-title">Jadwal Tes</span>
                                                <div class="twm-s-info-discription">April 22, 2024</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span class="twm-title">Lokasi</span>
                                                <div class="twm-s-info-discription">{{ $loker->lokasi}}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-user-tie"></i>
                                                <span class="twm-title">Nama Pekerjaan</span>
                                                <div class="twm-s-info-discription"><td>{{ $loker->nama_pekerjaan }}</td></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-clock"></i>
                                                <span class="twm-title">Awal Batas akhir</span>
                                                <div class="twm-s-info-discription">{{ $loker->batas_awal}}</div>
                                                <div class="twm-s-info-discription">{{ $loker->batas_akhir}}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-suitcase"></i>
                                                <span class="twm-title">Rentang Gaji</span>
                                                <div class="twm-s-info-discription">{{ $loker->rentang_gaji}}</div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- OUR BLOG END -->
    <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
        <div class="container">

            <!-- NEWS LETTER SECTION START -->
            <div class="ftr-nw-content">
                <div class="row">

                    <div class="col-md-12">
                        <form>
                            <div class="ftr-nw-form">
                                <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
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
                                <a href="index.html"><img src="{{ asset('alumni/assetsimages/logo bkk.png')}}" alt=""></a>
                            </div>
                            <p>Bursa Kerja Khusus SMK Muhammadiyah 2 Kuningan</p>
                            <ul class="ftr-list">
                                <li><p><span>Alamat :</span> Jl. Raya Cigugur No.28,Kuningan. </p></li>
                                <li><p><span>Email :</span> smkm2.kng@gmail.com</p></li>
                                <li><p><span>No Telepon :</span>: (0232) 873475</p></li>
                            </ul>
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
                        <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-tiktok"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                    </ul>

                </div>

            </div>

        </div>

    </footer>
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    <!--apply job popup -->
    <div class="modal fade" id="apply_job_popup" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="sign_up_popupLabel">Lamar Pekerjaan Ini</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="apl-job-inpopup">
                        <!--Basic Information-->
                        <div class="panel panel-default">

                            <div class="panel-body wt-panel-body p-a20 ">

                                <form action="{{ route('loker.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                <div class="twm-tabs-style-1">

                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Nama pelamar</label>
                                                <input type="text"
                                                class="form-control @error('nama_pelamar') is-invalid @enderror"name="nama_pelamar"
                                                value="{{ old('nama_pelamar') }}" name="nama"
                                                placeholder="Masukkan Nama pelamar">

                                            @error('nama_pelamar')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text"
                                                class="form-control @error('alamat') is-invalid @enderror"name="alamat"
                                                value="{{ old('alamat') }}" name="nama"
                                                placeholder="Masukkan alamat">

                                            @error('alamat')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="font-weight-bold">No Telepon</label>
                                                <input type="text"class="form-control @error('nomor_telepon') is-invalid @enderror"
                                                    name="nomor_telepon"
                                                    value="{{ old('nomor_telepon') }}"placeholder="Masukkan nomor telepon">

                                                <!-- error message untuk judul -->

                                                @error('nomor_telepon')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Masukan banner</label>
                                            <input class="form-control" type="file" id="formFile" name="cv">
                                        </div>

                                       <!---- <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Unggah Resume</label>
                                                <form action="https://thewebmax.org/jobzilla/upload.php"
                                                    class="dropzone dz-clickable">
                                                    <div class="dz-default dz-message"><span><i
                                                                class="sl sl-icon-plus"></i> Klik di sini atau drop
                                                                file untuk diunggah</span></div>
                                                </form>
                                                <small>Jika Anda tidak memiliki dokumen resume, Anda dapat menulis
                                                    Profil Profesional Singkat <a class="site-text-primary"
                                                        href="javascript:void(0);">here</a></small>
                                            </div>
                                        </div>--->



                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="text-left">
                                                <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

@endsection
