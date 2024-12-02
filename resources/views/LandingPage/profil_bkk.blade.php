@extends('layouts.landing_page')

@section('content')
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('alumni/assets/images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Profil BKK</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-full p-t120 p-b90 bg-white">
    <div class="container">
        <!-- BLOG SECTION START -->
        <div class="section-content">
            <div class="row d-flex justify-content-center">
                @forelse ($profil_b_k_k_s as $key => $ProfilBKK)
                <div class="col-lg-8 col-md-12">
                    <!-- Candidate detail START -->
                    <div class="cabdidate-de-info">
                        <div class="twm-candi-self-wrap overlay-wraper" style="background-image:url({{ Storage::url('public/bannerProfile/' . $ProfilBKK->banner) }});">
                            <div class="overlay-main site-bg-primary opacity-01"></div>
                            <div class="twm-candi-self-info">
                                <div class="twm-candi-self-top">
                                    <div class="twm-media"></div>
                                    <div class="twm-mid-content">
                                        <h4 class="twm-job-title">BKK DOSQ</h4>
                                        <p>SMK Muhammadiyah 2 Kuningan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="twm-s-title">Tentang Kami</div>
                        <p>{{ $ProfilBKK->tentang_bkk }}</p>
                        <div class="twm-s-title">Visi</div>
                        <p>{{ $ProfilBKK->visi }}</p>
                        <div class="twm-s-title">Misi</div>
                        <p>{{ $ProfilBKK->misi }}</p>
                        <div class="twm-s-title">Tujuan</div>
                        <p>{{ $ProfilBKK->tujuan }}</p>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
