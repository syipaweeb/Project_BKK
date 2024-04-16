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
                        <h2 class="wt-title">Mitra</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->


    <!-- Employer Grid START -->
    <div class="section-full p-t120  p-b90 site-bg-white">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 rightSidebar">

                    <div class="side-bar">

                        <div class="sidebar-elements search-bx">

                            <form>
                                <div class="form-group mb-4">
                                    <h4 class="section-head-small mb-4">Cari Mitra</h4>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukan Kata Kunci Pekerjaan">
                                        <button class="btn" type="button"><i class="feather-search"></i></button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-12">
                    <!--Filter Short By-->
                    <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
                        <span class="woocommerce-result-count-left">Menampilakan Pekerjaan</span>

                    </div>

                    <div class="twm-employer-list-wrap">
                        <div class="row">


                            @forelse ($data_mitras as $key => $DataMitra)

                            <div class="col-lg-6 col-md-6">
                                <div class="twm-employer-grid-style1 mb-5">
                                    <div class="twm-media">
                                        <img src="{{ Storage::url('public/banner/') . $DataMitra->banner}}"

                                        class="rounded" style="width: 100">
                                    </div>
                                    <div class="twm-mid-content">
                                        <a href="{{ route('mitra_alumni.detail', $DataMitra->id) }}" class="twm-job-title">
                                            <h4>{{ $DataMitra->nama_perusahaan }}</h4>
                                        </a>
                                        <p class="twm-job-address">{{ $DataMitra->lokasi}}</p>
                                        <a href="{{ route('mitra_alumni.detail', $DataMitra->id) }}" class="twm-job-websites site-text-primary">Lihat detail</a>
                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse






                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <!-- Employer Grid END -->


</div>
<!-- CONTENT END -->

@endsection
