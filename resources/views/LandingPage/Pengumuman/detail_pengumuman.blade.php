@extends ('layouts.Landing_page')
@section ('content')

<!-- CONTENT START -->
<div class="page-content">

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('alumni/assets/images/banner/1.jpg')}});">
<div class="overlay-main site-bg-white opacity-01"></div>
<div class="container">
    <div class="wt-bnr-inr-entry">
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
                                        <td><img src="{{ Storage::url('public/poto/' . $pengumuman->foto) }}"
                                     class="rounded" style="width: 100px"></td>
                                    </div>


                                    <div class="twm-mid-content">

                                    

                                        <h4 class="twm-job-title">{{ $pengumuman->judul }}</h4>
                                        <div class="twm-job-self-mid">
                                        </div>

                                        
                                    </div>
                                </div>

                            </div>
                        </div>

                        <h4 class="twm-s-title">Deskripsi</h4>

                        <p>{{ $pengumuman->deskripsi}}
                        </p>
                        

                        <h4 class="twm-s-title">
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 rightSidebar">

                    <div class="side-bar mb-4">
                        <div class="twm-s-info2-wrap mb-5">
                            <div class="twm-s-info2">
                                <h4 class="section-head-small mb-4">Tanggal</h4>
                                <ul class="twm-job-hilites2">

                                    <li>
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span class="twm-title">Tanggal Diterbitkan</span>
                                            <div class="twm-s-info-discription">{{ $pengumuman->tanggal }}</div>
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