@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Profil BKK</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">BKK</a></li>
                            <li class="breadcrumb-item active">Profil BKK</li>
                        </ol>
                    </div>
                </div>
            </div>

            <form action="{{ route('profil_admin.update') }}" method="POST" enctype="multipart/form-data">
                <!-- Formulir edit di sini -->
                @csrf
                @method('POST')
                <div class="row">
                    <!-- Left column for image input -->
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Foto Profil</label>
                            <input type="file" name="foto_profil" id="input-file-now-custom-2" class="dropify"
                                data-height="200" value="{{ auth()->user()->profil->foto_profil }}">
                        </div>
                    </div>

                    <!-- Right column for form inputs -->
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!-- First form input -->
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama"
                                value="{{ auth()->user()->name }}">
                        </div>

                        <!-- Second form input -->
                        <div class="form-group py-3">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon"
                                value="{{ auth()->user()->nomor_telepon }}">
                        </div>

                        <!-- First form input -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email"
                                value="{{ auth()->user()->email }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    

                    <!-- Second column -->
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!-- Third form input -->
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi"
                                value="{{ auth()->user()->profil->lokasi }}">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="text-left">
                            <button type="submit" class="site-button">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
