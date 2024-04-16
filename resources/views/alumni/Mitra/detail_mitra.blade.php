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
                    <h2 class="wt-title">Detail Mitra</h2>
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

                                            <div class="twm-jobs-category green"></div>
                                        </div>
                                        <td><img src="{{ Storage::url('public/logo/') . $data_mitra->logo}}"

                                            class="rounded" style="width: 100%"></td>


                                        <div class="twm-mid-content">

                                            <div class="twm-media">
                                                <td><img src="{{ Storage::url('public/banner/') . $data_mitra->banner}}"

                                                    class="rounded" style="width: 100px"></td>
                                            </div>

                                            <h4 class="twm-job-title">{{ $data_mitra->nama_perusahaan }}</h4>
                                            <p class="twm-job-address"><i class="feather-map-pin"></i>{{ $data_mitra->lokasi}}</p>
                                            <div class="twm-job-self-mid">
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>

                            <h4 class="twm-s-title">Deskripsi Pekerjaan</h4>

                            <h4 class="twm-s-title">{{ $data_mitra->deskripsi_perusahaan }}</h4>
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
                                                <i class="fas fa-phone"></i>
                                                <span class="twm-title">Nomor Telepon</span>
                                                <div class="twm-s-info-discription"> {{ $data_mitra->nomor_telepon }}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-envelope"></i>
                                                <span class="twm-title">Email</span>
                                                <div class="twm-s-info-discription">{{ $data_mitra->email}}</div>
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


</div>
<!-- CONTENT END -->

@endsection
