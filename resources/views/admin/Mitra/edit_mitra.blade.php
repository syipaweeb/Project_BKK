@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Isi Untuk Mengubah Mitra</h4>
                    </div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('data_mitra.update',$data_mitra->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Masukan logo</label>
                                    <input class="form-control" type="file" id="formFile" name="banner">

                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">banner</label>
                                    <input class="form-control" type="file" id="formFile" name="logo">
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Nama Perusahan</label>
                                    <input type="text"
                                        class="form-control @error('nama_perusahaan') is-invalid @enderror"name="nama_perusahaan"
                                        value="{{ old('nama_perusahaan',$data_mitra->nama_perusahaan) }}"
                                        placeholder="Masukkan Nama Perusahan">

                                    @error('nama_perusahaan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{--  --}}
                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea type="text"
                                        class="form-control @error('deskripsi_perusahaan') is-invalid @enderror"name="deskripsi_perusahaan"
                                        value="{{ old('deskripsi_perusahaan') }}" name="nama"
                                        placeholder="Masukkan Deskripsi Perusahaan">{{ old('deskripsi_perusahaan',$data_mitra->deskripsi_perusahaan) }}</textarea>

                                    @error('deskripsi_perusahaan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{--  --}}
                                <div class="form-group">
                                    <label class="font-weight-bold">No Telepon</label>
                                    <input type="text"class="form-control @error('nomor_telepon') is-invalid @enderror"
                                        name="nomor_telepon"
                                        value="{{ old('nomor_telepon',$data_mitra->nomor_telepon) }}"placeholder="Masukkan nomor telepon">

                                    <!-- error message untuk judul -->

                                    @error('nomor_telepon')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{--  --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="text"class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email', $data_mitra->email) }}"placeholder="Masukkan email ">

                                    <!-- error message untuk judul -->

                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Lokasi</label>
                                    <input type="text"class="form-control @error('lokasi') is-invalid @enderror"
                                        name="lokasi" value="{{ old('lokasi',$data_mitra->lokasi) }}"placeholder="Masukkan lokasi ">

                                    <!-- error message untuk judul -->

                                    @error('lokasi')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary">Simpan</button>

                                <a href="{{ route('data_mitra.index') }}" type="button"
                                    class="btn btn-outline-primary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- container -->
    </div><!-- Page content Wrapper -->
@endsection
