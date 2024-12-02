@extends('layouts.Landing_page')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('alumni/assets/images/banner/1.jpg')}});">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">Pengumuman</h2>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- OUR BLOG START -->
        <div class="container">
            <div class="section-content">
                <div class="row">
                    @foreach ($pengumumans as $key => $Pengumuman)
                        @if ($key < 9)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="blog-post twm-blog-post-1-outer">
                                    <div class="wt-post-media">
                                        <img src="{{ Storage::url('public/poto/') . $Pengumuman->poto}}" class="rounded img-fluid lazyload" alt="Pengumuman Image" loading="lazy">
                                    </div>                                                                        
                                    <div class="wt-post-info">
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-date">{{ $Pengumuman->tanggal }}</li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title">
                                            <h4 class="post-title">
                                                <a href="blog-single.html">{{ $Pengumuman->judul }}</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>Deskripsi</p>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="{{ route('pengumuman.detail', $Pengumuman->id) }}" class="site-button-link site-text-primary">Klik untuk melihat detail pengumuman</a>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div>
                        @endif
                    @endforeach 
                </div>
            </div>   
        </div>
        <!-- OUR BLOG END -->

        <!-- Pagination -->
        <div class="container">
            <div class="pagination-outer">
                <div class="pagination-style1">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Pagination End -->
    </div>
    <!-- CONTENT END -->
@endsection
