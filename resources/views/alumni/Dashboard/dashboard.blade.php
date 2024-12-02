@extends('layouts.landing_page_alumni')
@section('alumni')
    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
        <!-- Filter Short By -->
        <div class="twm-right-section-panel site-bg-gray">
            <div class="wt-admin-right-page-header fw-bold">
                @if (Auth::check())
                    <h2>{{ Auth::user()->name }}</h2>
                    <!-- Ganti 'name' dengan nama atribut yang sesuai dari model pengguna -->
                    <p>{{ auth()->user()->profil->profesi }}</p>
                @else
                    <h2>Ponda Hariri</h2>
                    <p>Software Engineer</p>
                @endif
            </div>


            <div class="twm-dash-b-blocks mb-5">
                <div class="row ">
                    <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                        <div class="panel panel-default">
                            <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                                <div class="wt-card-wrap-2">
                                    <div class="wt-card-icon-2"><i class="bi bi-buildings"></i></div>
                                    <div class="wt-card-right wt-total-listing-view counter">
                                        {{ $totalMitra }} <!-- Tampilkan jumlah mitra -->
                                    </div>
                                    <div class="wt-card-bottom-2">
                                        <h4 class="m-b0">Jumlah Mitra</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 mb-3">
                        <div class="panel panel-default ">
                            <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-4">
                                <div class="wt-card-wrap-2">
                                    <div class="wt-card-icon-2"><i class="bi bi-card-checklist"></i></div>
                                    <div class="wt-card-right wt-total-listing-bookmarked counter">
                                        {{ $totalLowongan }} <!-- Tampilkan total lowongan -->
                                    </div>
                                    <div class="wt-card-bottom-2">
                                        <h4 class="m-b0">Total Lowongan</h4>
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
