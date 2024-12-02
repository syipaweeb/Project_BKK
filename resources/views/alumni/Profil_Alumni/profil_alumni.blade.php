@extends('layouts.landing_page_alumni')
@section('alumni')
    <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
        <div class="twm-right-section-panel site-bg-gray">
            <!-- Basic Information -->
            <div class="panel panel-default">
                <div class="panel-heading wt-panel-heading p-a20">
                    <h4 class="panel-tittle m-a0">Profil Saya</h4>
                </div>
                <div class="panel-body wt-panel-body p-a20 m-b30">
                    <div class="row">
                        <form action="{{ route('profil_alumni.update') }}" method="POST" enctype="multipart/form-data">
                            <!-- Formulir edit di sini -->
                            @csrf
                            @method('POST')
                            <div class="row">
                                <!-- Left column for image input -->
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Foto Profil</label>
                                        <input type="file" name="foto_profil" id="input-file-now-custom-2"
                                            class="dropify" data-height="200"
                                            value="{{ auth()->user()->profil->foto_profil }}">
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
                                        <input type="text" class="form-control" name="nomor_telepon"
                                            placeholder="Nomor Telepon" value="{{ auth()->user()->nomor_telepon }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- First column -->
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <!-- First form input -->
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email"
                                            value="{{ auth()->user()->email }}">
                                    </div>

                                    <!-- Second form input -->
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="jenis_kelamin"
                                            placeholder="Jenis Kelamin" value="{{ auth()->user()->profil->jenis_kelamin }}">
                                    </div>
                                </div>

                                <!-- Second column -->
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <!-- Third form input -->
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="lokasi" placeholder="Lokasi"
                                            value="{{ auth()->user()->profil->lokasi }}">
                                    </div>

                                    <!-- Third form input -->
                                    <div class="form-group" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="Bekerja">Bekerja</option>
                                            <option value="Melanjutkan Pendidikan">Melanjutkan Pendidikan</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <!-- Fourth form input -->
                                    <div class="form-group">
                                        <label>Profesi</label>
                                        <input type="text" class="form-control" name="profesi" placeholder="Profesi"
                                            value="{{ auth()->user()->profil->profesi }}">
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="text-left">
                                        <button type="submit" class="site-button">Simpan</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
