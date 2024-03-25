@extends('layouts.app')
@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Isi Untuk Menambah Bursa Kerja</h4>
                </div>
            </div>
        </div><!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('loker.update',$loker->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Perusahan</label>
                                <input type="text"
                                    class="form-control @error('nama_perusahaan') is-invalid @enderror"name="nama_perusahaan"
                                    value="{{ old('nama_perusahaan',$loker->nama_perusahaan) }}"
                                    placeholder="Masukkan Nama Perusahan">

                                @error('nama_perusahaan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Pekerjaan</label>
                                <input type="text"
                                class="form-control @error('nama_pekerjaan') is-invalid @enderror"name="nama_pekerjaan"
                                value="{{ old('nama_perusahaan',$loker->nama_pekerjaan) }}"
                                placeholder="Masukkan Nama pekerjaan">

                            @error('nama_pekerjaan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mt-3">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label">Deskripsi</label>
                                    <textarea type="text"
                                    class="form-control @error('deskripsi') is-invalid @enderror"name="deskripsi"
                                    value="{{ old('nama_perusahaan',) }}"
                                    placeholder="Masukkan Deskripsi">"{{ old('nama_perusahaan', $loker->deskripsi) }}"</textarea>

                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Masukan Banner</label>
                                <input class="form-control" type="file" id="formFile" name="banner">

                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Masukan logo</label>
                                <input class="form-control" type="file" id="formFile" name="logo">

                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Lokasi</label>
                                <input type="text"class="form-control @error('lokasi') is-invalid @enderror"
                                    name="lokasi" value="{{ old('lokasi',$loker->lokasi) }}"placeholder="Masukkan lokasi ">

                                <!-- error message untuk judul -->

                                @error('lokasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Rentang Gaji</label>
                                <input type="text"class="form-control @error('rentang_gaji') is-invalid @enderror"
                                name="rentang_gaji" value="{{ old('rentang_gaji',$loker->rentang_gaji) }}"placeholder="Masukkan Rentang gaji ">

                            <!-- error message untuk judul -->

                            @error('rentang_gaji')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jadwal Tes</label>
                                <input type="text"class="form-control @error('jadwal_tes') is-invalid @enderror"
                                name="jadwal_tes" value="{{ old('jadwal_tes', $loker->jadwal_tes) }}"placeholder="Masukkan Jadwal tes ">

                            <!-- error message untuk judul -->

                            @error('jadwal_tes')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group mb-0">
                                <h6 class="input-title mt-lg-3">Batas Awal Dan Batas Akhir</h6>
                                <div>
                                    <div class="" id="date-range">
                                        <input type="date"class="form-control @error('batas_awal') is-invalid @enderror"
                                name="batas_awal" value="{{ old('batas_awal', $loker->batas_awal) }}"placeholder="Masukkan batas awal ">

                            <!-- error message untuk judul -->

                            @error('batas_awal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror <input type="date"class="form-control @error('batas_akhir') is-invalid @enderror"
                            name="batas_akhir" value="{{ old('batas_akhir', $loker->batas_akhir) }}"placeholder="Masukkan Batas akhir ">

                        <!-- error message untuk judul -->

                        @error('batas_akhir')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>

                                <a href="{{ route('loker.index') }}" type="button"
                                    class="btn btn-outline-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- container -->
</div><!-- Page content Wrapper -->
@endsection
