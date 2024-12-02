@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Isi Untuk Menambah Pengumuman</h4>
                    </div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('pengumuman_admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Masukan Foto</label>
                                    <input class="form-control" type="file" id="formFile" name="poto"
                                        class="form-control @error('poto') is-invalid @enderror"name="poto"
                                        value="{{ old('poto') }}" name="poto" placeholder="Masukkan Nama Perusahan">

                                    @error('poto')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label class="font-weight-bold">Judul</label>
                                    <input type="text"
                                        class="form-control @error('judul') is-invalid @enderror"name="judul"
                                        value="{{ old('judul') }}" name="judul" placeholder="Masukkan Nama Perusahan">

                                    @error('judul')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{--  --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="font-weight-bold">Deskripsi</label>
                                                <!-- Tambahkan atribut name pada div summernote -->
                                                <textarea class="summernote" id="summernote" type="text" class="form-control @error('deskripsi') is-invalid @enderror"name="deskripsi"
                                                value="{{ old('deskripsi') }}" name="deskripsi">Tuliskan Surat Atau Pemberitahuan Hasil Lamaran</textarea>
                                                @error('deskripsi')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->

                                {{--  --}}
                                <div class="form-group">
                                    <label class="font-weight-bold">Tanggal</label>
                                    <input type="date"
                                        class="form-control @error('tanggal') is-invalid @enderror"name="tanggal"
                                        value="{{ old('tanggal') }}" name="tanggal" placeholder="Masukkan Nama Perusahan">

                                    @error('tanggal')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary">Simpan</button>

                                <a href="{{ route('pengumuman_admin.index') }}" type="button"
                                    class="btn btn-outline-primary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- container -->
    </div><!-- page-content-wrapper -->
@endsection
