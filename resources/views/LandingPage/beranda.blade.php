@extends('layouts.landing_page')
@section('content')
    <div class="page-content">
        <!-- Banner Start -->
        <div class="twm-home3-banner-section site-bg-white bg-cover"
            style="background-image:url({{ asset('assets/images/banner.png') }})">
            <div class="twm-home3-inner-section">
                <div class="twm-bnr-mid-section text-center">
                    <h1 class="twm-bnr-title-large text-secondary fw-bold mb-3">BKK <span class="text-primary">DOSQ</span>-28
                    </h1>
                    <p class="twm-bnr-title-light text-muted">SMK Muhammadiyah 2 Kuningan</p>
                    <hr style="border-top: 2px solid #ddd; width: 50%; margin: 20px auto;">
                    <address style="font-style: italic;">
                        Alamat: Jl. Raya Cigugur No.28, Kuningan, Kabupaten Kuningan, Jawa Barat
                        
                    </address>
                </div>
            </div>
        </div>


        <!-- Banner End -->

        <div class="section-full p-t120 p-b90 site-bg-white twm-companies-wrap">
            <!-- Mitra Section Start -->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>MITRA</div>
                </div>
                <h2 class="wt-title">Mitra Industri Kami</h2>
            </div>
            <div class="container">
                <div class="section-content">
                    <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">
                        @forelse ($data_mitras as $DataMitra)
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="employer-list.html"><img
                                                src="{{ Storage::url('public/banner/') . $DataMitra->banner }}"
                                                class="rounded" style="width: 100px;"></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- Mitra Section End -->

            <!-- Statistics Section Start -->
            <div class="twm-company-approch2-outer">
                <div class="twm-company-approch2">
                    <div class="row">
                        <div class="col-lg-6 col-md-4">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-black">
                                        <span class="counter">{{ $totalMitra }}</span> <!-- Added missing closing tag -->
                                    </div>
                                    <p class="icon-content-info">Jumlah Mitra Industri</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="counter-outer-two">
                                <div class="icon-content">
                                    <div class="tw-count-number site-text-black">
                                        <span class="counter">{{ $totalLowongan }}</span> <!-- Added missing closing tag -->
                                    </div>
                                    <p class="icon-content-info">Jumlah Loker Yang Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Statistics Section End -->

            <!-- Job Post Section Start -->
            <div class="section-full p-t120 p-b90 site-bg-gray twm-bg-ring-wrap2 py-5">
                <div class="twm-bg-ring-right"></div>
                <div class="twm-bg-ring-left"></div>
                <div class="container">
                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div>Semua Pekerjaan</div>
                                    </div>
                                    <h2 class="wt-title">Temukan Karir Anda Layak mendapatkannya</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                                <a href="{{ route('loker_alumni') }}" class="site-button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="twm-jobs-grid-wrap">
                            <div class="row">
                                @foreach ($lokers as $key => $Loker)
                                    @if ($key < 4)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="twm-jobs-grid-style1 m-b30">
                                                <div class="twm-media py-4 mt-4">
                                                    <img src="{{ Storage::url('public/logo/') . $Loker->logo }}"
                                                        class="rounded" style="width: 100%">
                                                </div>
                                                <span class="twm-job-post-duration"></span>
                                                <div class="twm-jobs-category green"><span class="twm-bg-green"></span>
                                                </div>
                                                <div class="twm-mid-content">
                                                    <a href="job-detail.html" class="twm-job-title">
                                                        <h4>{{ $Loker->nama_pekerjaan }}</h4>
                                                    </a>
                                                    <p class="twm-job-address">{{ $Loker->lokasi }}</p>
                                                </div>
                                                <div class="twm-right-content">
                                                    <a href="{{ route('loker_alumni.detail', ['id' => $Loker->id]) }}"
                                                        class="twm-jobs-browse site-text-primary">Lihat Lebih Lanjut</a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                    @break

                                    <!-- Pause loop after 4 iterations -->
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Post Section End -->
    </div>
</div>
@endsection
