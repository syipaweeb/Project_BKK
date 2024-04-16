@extends('layouts.auth')
@section('content')

<div class="section-full site-bg-white">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-6 col-lg-5 twm-log-reg-media-wrap">
                <div class="twm-log-reg-media">
                    <div class="twm-l-media">
                        <img src="{{ asset('asset landing page/images/login-bg.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7">
                <div class="twm-log-reg-form-wrap">
                    <div class="twm-log-reg-logo-head">
                        <a href="index.html">
                            <img src="{{ asset('asset landing page/images/logo bkk.png') }}" alt=""
                                class="logo">
                        </a>
                    </div>

                    <div class="twm-log-reg-inner">
                        <div class="twm-log-reg-head">
                            <div class="twm-log-reg-logo">
                                <span class="log-reg-form-title">Register</span>
                            </div>
                        </div>
                        <div class="twm-tabs-style-2">

                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="twm-login-candidate">
                                    <div class="row">
                                        @if($errors->any())
                                        <div class="alert alert-danger mt-3">
                                            <ul class="list-unstyled">
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                        <form action="{{ route('daftar-store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            {{-- name --}}
                                            <div class="form-floating">
                                                <div class="form-group">
                                                    <input name="name" type="text"
                                                        class="form-control rounded-top @error('name') is-invalid @enderror"
                                                        placeholder="name*" required>
                                                    <label for="name"></label>
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- nomer telepon --}}
                                            <div class="form-floating">
                                                <div class="form-group">
                                                    <input name="nomor_telepon" type="text"
                                                        class="form-control rounded-top @error('nomor_telepon') is-invalid @enderror"
                                                        placeholder="Nomor Telepon*">
                                                    <label for="nomor_telepon"></label>
                                                    @error('nomor_telepon')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- email --}}
                                            <div class="form-floating">
                                                <div class="form-group">
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" name="email"
                                                        value="{{ old('email') }}" placeholder="Email*">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- password --}}
                                            <div class="form-floating">
                                                <div class="form-group">
                                                    <input type="text"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" name="password"
                                                        value="{{ old('password') }}" placeholder="Password*">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="site-button">Register</button>
                                                </div>
                                            </div>
                                            <p class="text-secondary text-center">Sudah punya akun? <a href="/login">Login Disini! <i class="bi bi-box-arow-in-right"></i></a></p>
                                        </form>
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

@endsection
