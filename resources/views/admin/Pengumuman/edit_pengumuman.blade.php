@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Isi Untuk Mengubah Pengumuman</h4>
                    </div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('pengumuman_admin.update', $pengumuman_admin->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Masukan Foto</label>
                                        <input class="form-control" type="file" id="formFile" name="poto"
                                            class="form-control @error('poto') is-invalid @enderror"name="poto"
                                            value="{{ old('poto', $pengumuman_admin->poto) }}" name="poto" placeholder="Masukkan Nama Perusahan">
    
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
                                            value="{{ old('judul', $pengumuman_admin->judul) }}"
                                            placeholder="Masukkan Nama Perusahan">

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
                                                    <textarea class="summernote" id="summernote" type="text"
                                                        class="form-control @error('deskripsi') is-invalid @enderror"name="deskripsi" value="{{ old('deskripsi', $pengumuman_admin->deskrifsi) }}"
                                                        name="deskripsi">Tuliskan Surat Atau Pemberitahuan Hasil Lamaran</textarea>
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
                                            value="{{ old('tanggal', $pengumuman_admin->tanggal) }}" name="tanggal"
                                            placeholder="Masukkan Nama Perusahan">

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
    </div><!-- Page content Wrapper -->
@endsection
