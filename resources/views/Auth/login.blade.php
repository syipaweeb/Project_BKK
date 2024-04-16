@extends('layouts.auth')
@section('content')

<div class="section-full site-bg-white">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                <div class="twm-log-reg-media">
                    <div class="twm-l-media">
                        <img src="{{ asset('alumni/assest/images/login-bg.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7">
                <div class="twm-log-reg-form-wrap">
                    @if($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="twm-log-reg-logo-head">
                        <a href="index.html">
                            <img src="{{ asset('asset landing page/images/logo bkk.png') }}" alt=""
                                class="logo">
                        </a>
                    </div>

                    {{-- PESAN KONFIRMASI BERHASIL DAFTAR --}}
                    @if (session()->has('berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('berhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- =================================== --}}

                    {{-- PESAN KONFIRMASI GAGAL LOGIN --}}
                    @if (session()->has('gagal'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('gagal') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- =================================== --}}

                    <div class="twm-log-reg-inner">
                        <div class="twm-log-reg-head">
                            <div class="twm-log-reg-logo">
                                <span class="log-reg-form-title">Log In</span>
                            </div>
                        </div>
                        <div class="twm-tabs-style-2">

                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="twm-login-candidate">
                                    <div class="row">

                                        <form action="/login" method="POST">
                                            @csrf



                                            <div class="form-floating">
                                                <div class="form-group">
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" name="email"
                                                        placeholder="Email*">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-floating">
                                                <div class="form-group">
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" name="password"
                                                        placeholder="password*">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="twm-forgot-wrap">
                                                    <div class="form-group mb-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label rem-forgot"
                                                                for="Password4"><a href="javascript:;"
                                                                    class="site-text-primary">Lupa
                                                                    Sandi</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="site-button">Log
                                                        in</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="text-secondary text-center">Belum punya akun? <a
                                                href="/daftar">Daftar Disini! <i
                                                    class="bi bi-box-arow-in-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Section End -->

@endsection
