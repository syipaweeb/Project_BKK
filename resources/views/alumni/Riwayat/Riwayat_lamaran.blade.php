@extends('layouts.landing_page_alumni')
@section('alumni')
<div class="col-xl-9 col-lg-8 col-md-12 m-b30">
    <div class="twm-right-section-panel candidate-save-job site-bg-gray">
        <!-- Filter Short By -->
        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
            <span class="woocommerce-result-count-left">Melamar 25 pekerjaan</span>
        </div>

        <!-- Riwayat Section -->
        <div class="twm-jobs-list-wrap">
            <ul>
                @forelse ($pelamars as $pelamar)
                <li>
                    <div class="twm-jobs-list-style1 mb-5">
                        <div class="twm-media">
                            <!-- Change the src attribute to the appropriate image path -->
                            <img class="img-fluid" style="width: 100%" src="{{ Storage::url('public/logo/') . $pelamar->loker->logo}}" alt="">
                        </div>
                        <div class="twm-mid-content">
                            <a href="" class="twm-job-title">
                                <h4>{{ $pelamar->loker->nama_perusahaan }}</h4>

                                <p class="twm-job-address">{{ $pelamar->loker->lokasi }}
                                    </p>
                            </a>
                        </div>
                        <div class="twm-right-content">
                            <div class="twm-jobs-category green">
                                <span class="twm-bg-green">New</span>
                            </div>
                        </div>
                    </div>
                </li>
                @empty

                 <li>No riwayat found</li>
                @endforelse

            </ul>
        </div>

        <!-- Pagination -->
        <div class="pagination-outer">
            <!-- Pagination code goes here -->
        </div>
    </div>
</div>

@endsection
