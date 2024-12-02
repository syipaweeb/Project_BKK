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
                        <h2 class="wt-title">Loker</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->


    <!-- OUR BLOG START -->
    <div class="section-full p-t120  p-b90 site-bg-white">


        <div class="container">
            <div class="row">


                <div class="col-lg-4 col-md-12 rightSidebar">

                    <div class="side-bar">

                        <div class="sidebar-elements search-bx">

                            <form>

                                <div class="form-group mb-4">
                                    <h4 class="section-head-small mb-4">Kata kunci</h4>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukan Kata Kunci Pekerjaan">
                                        <button class="btn" type="button"><i class="feather-search"></i></button>
                                    </div>
                                </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-8 col-md-12">
                    <!--Filter Short By-->
                    <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
                        <span class="woocommerce-result-count-left">Menampilakan Pekerjaan</span>


                    </div>

                    <div class="row">

                       @forelse ($lokers as $key => $Loker)


                        <!--Block one-->
                        <div class="col-lg-6 col-md-12 m-b30">

                            <div class="twm-jobs-grid-style1">
                                <div class="twm-media">
                                    <img src="{{ Storage::url('public/logo/') . $Loker->logo}}"

                                            class="rounded" style="width: 100%">
                                </div>

                                <div class="twm-jobs-category green"><span class="twm-bg-green"></span></div>
                                <div class="twm-mid-content">
                                    <a href="{{ route('loker_alumni.detail', $Loker->id) }}" class="twm-job-title">
                                        <h4><td>{{ $Loker->nama_perusahaan }}</td></h4>
                                    </a>
                                    <p class="twm-job-address">{{ $Loker->nama_pekerjaan }}</p>

                                </div>
                                <div class="twm-right-content">


                                    <a href="{{ route('loker_alumni.detail', $Loker->id) }}" class="twm-jobs-browse site-text-primary">Telusuri Pekerjaan</a>
                                </div>
                            </div>

                        </div>
                        <!--Block 2-->



                        @empty

                        @endforelse
                    </div>

                    <div class="pagination-outer">
                        <div class="pagination-style1">
                            <ul class="clearfix">
                                <li class="prev"><a href="javascript:;"><span> <i class="fa fa-angle-left"></i> </span></a></li>
                                <li><a href="javascript:;">1</a></li>
                                <li class="active"><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li class="next"><a href="javascript:;"><span> <i class="fa fa-angle-right"></i> </span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    



</div>
<!-- CONTENT END -->

@endsection
