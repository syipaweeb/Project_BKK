@extends('layouts.landing_page')
@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center"
            style="background-image:url({{ asset('alumni/images/banner/1.jpg') }});">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">Profil Saya</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Beranda</a></li>
                            <li>Profil Saya</li>
                        </ul>
                    </div>
                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- OUR BLOG START -->
        <div class="section-full p-t120  p-b90 site-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                        <div class="side-bar-st-1">

                            <div class="twm-candidate-profile-pic">

                                <img src="{{asset('alumni/assets/images/user-avtar/pic4.jpg')}}" alt="">
                                <div class="upload-btn-wrapper">

                                    <div id="upload-image-grid"></div>
                                    <button class="site-button button-sm">Upload Photo</button>
                                    <input type="file" name="myfile" id="file-uploader"
                                        accept=".jpg, .jpeg, .png">
                                </div>

                            </div>

                            <div class="twm-mid-content text-center">
                                <a href="candidate-detail.html" class="twm-job-title">
                                    <h4>Randall Henderson </h4>
                                </a>
                                <p>IT Contractor</p>
                            </div>

                            <div class="twm-nav-list-1">
                                <div class="twm-nav-list-1">
                                    <ul>
                                        <li class="active"><a href="candidate-dashboard.html"><i
                                                    class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                        <li><a href="candidate-profile.html"><i class="fa fa-user"></i> Profil
                                                Saya</a></li>
                                        <li><a href="candidate-jobs-applied.html"><i
                                                    class="fa fa-suitcase"></i>Riwayat Lamaran</a></li>
                                        <li><a href="candidate-my-resume.html"><i class="fa fa-receipt"></i>
                                                Resume</a></li>
                                        <li><a href="candidate-change-password.html"><i
                                                    class="fa fa-fingerprint"></i> Ganti Password</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                        <div class="twm-right-section-panel site-bg-gray">
                            <!-- Basic Information -->
                            <div class="panel panel-default">
                                <div class="panel-heading wt-panel-heading p-a20">
                                    <h4 class="panel-tittle m-a0">Profil Saya</h4>
                                </div>
                                <div class="panel-body wt-panel-body p-a20 m-b30">
                                    <div class="row">
                                        @if (!$profil_alumnis->isEmpty())
                                            <form action="{{ route('profil_alumni.edit', $profil_alumnis->first()->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <!-- Formulir edit di sini -->
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            name="nama"
                                                            value="{{ old('nama', $profil_alumnis->first()->nama) }}"
                                                            placeholder="Nama">
                                                        @error('nama')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>No Telepon</label>
                                                        <input type="text"
                                                            class="form-control @error('nomor_telepon') is-invalid @enderror"
                                                            name="nama"
                                                            value="{{ old('nomor_telepon', $profil_alumnis->first()->nama) }}"
                                                            placeholder="Nama">
                                                        @error('nomor_telepon')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email"
                                                            value="{{ old('email', $profil_alumnis->first()->email) }}"
                                                            placeholder="Nama">
                                                        @error('email')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <input type="text"
                                                            class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                                            name="jenis_kelamin"
                                                            value="{{ old('jenis_kelamin', $profil_alumnis->first()->jenis_kelamin) }}"
                                                            placeholder="Nama">
                                                        @error('jenis_kelamin')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            name="nama"
                                                            value="{{ old('nama', $profil_alumnis->first()->nama) }}"
                                                            placeholder="Nama">
                                                        @error('nama')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Lokasi</label>
                                                        <input type="text"
                                                            class="form-control @error('lokasi') is-invalid @enderror"
                                                            name="lokasi"
                                                            value="{{ old('lokasi', $profil_alumnis->first()->lokasi) }}"
                                                            placeholder="Nama">
                                                        @error('lokasi')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- Tambahkan input untuk bidang lainnya di sini -->
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--Social Network-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0">Sosial Media</h4>
                                                </div>
                                                <div class="panel-body wt-panel-body p-a20 m-b30 ">

                                                    <div class="row">

                                                        <div class="col-xl-4 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Facebook</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control wt-form-control" name="company_name"
                                                                        type="text" placeholder="https://www.facebook.com/">
                                                                    <i class="fs-input-icon fab fa-facebook-f"></i>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="col-xl-4 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>linkedin</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control wt-form-control" name="company_name"
                                                                        type="text" placeholder="https://in.linkedin.com/">
                                                                    <i class="fs-input-icon fab fa-linkedin-in"></i>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="col-xl-4 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Instagram</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control wt-form-control" name="company_name"
                                                                        type="text" placeholder="https://www.instagram.com/">
                                                                    <i class="fs-input-icon fab fa-instagram"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="text-left">
                                                                <button type="submit" class="site-button">Simpan</button>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                            @else
                                                <p>Profil tidak ditemukan.</p>
                                            @endif
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

    <!-- FOOTER START -->
    <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
        <!-- Footer content here -->
    </footer>
    <!-- FOOTER END -->


    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    <!--Model Popup Section Start-->

    <!--Signup popup -->
    <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>

                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                        <p>Sign Up and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <!--Signup Candidate-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate"
                                        type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                </li>
                                <!--Signup Employer-->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer"
                                        type="button"><i class="fas fa-building"></i>Employer</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!--Signup Candidate Content-->
                                <div class="tab-pane fade show active" id="sign-candidate">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required="" class="form-control"
                                                    placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Email*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Phone*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree1">
                                                    <label class="form-check-label" for="agree1">I agree to
                                                        the <a href="javascript:;">Terms and
                                                            conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2"
                                                            data-bs-toggle="modal" data-bs-dismiss="modal">Log
                                                            in
                                                            here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Sign Up</button>
                                        </div>

                                    </div>
                                </div>
                                <!--Signup Employer Content-->
                                <div class="tab-pane fade" id="sign-Employer">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required=""
                                                    class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Email*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="phone" type="text" class="form-control" required=""
                                                    placeholder="Phone*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="agree2">
                                                    <label class="form-check-label" for="agree2">I agree to
                                                        the <a href="javascript:;">Terms and
                                                            conditions</a></label>
                                                    <p>Already registered?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2"
                                                            data-bs-toggle="modal" data-bs-dismiss="modal">Log
                                                            in
                                                            here</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Sign Up</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                            <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a>
                            </li>
                        </ul>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!--Login popup -->
    <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form>
                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                        <p>Login and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                <!--Login Candidate-->
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#login-candidate" type="button"><i
                                            class="fas fa-user-tie"></i>Candidate</button>
                                </li>
                                <!--Login Employer-->
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer"
                                        type="button"><i class="fas fa-building"></i>Employer</button>
                                </li>

                            </ul>

                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="login-candidate">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required=""
                                                    class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*">
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="Password3">
                                                    <label class="form-check-label rem-forgot" for="Password3">Remember me
                                                        <a href="javascript:;">Forgot
                                                            Password</a></label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Log in</button>
                                            <div class="mt-3 mb-3">Don't have an account ?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Sign
                                                    Up</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--Login Employer Content-->
                                <div class="tab-pane fade" id="login-Employer">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="username" type="text" required=""
                                                    class="form-control" placeholder="Usearname*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <input name="email" type="text" class="form-control" required=""
                                                    placeholder="Password*">
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <div class=" form-check">
                                                    <input type="checkbox" class="form-check-input" id="Password4">
                                                    <label class="form-check-label rem-forgot" for="Password4">Remember me
                                                        <a href="javascript:;">Forgot
                                                            Password</a></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="site-button">Log in</button>
                                            <div class="mt-3 mb-3">Don't have an account ?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">Sign
                                                    Up</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                            <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Model Popup Section End-->
@endsection
