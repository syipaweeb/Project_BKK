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
                            <form action="{{ route('data_siswa.update',$data_siswa->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                
                                

                                {{--  --}}
                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
                                    <textarea type="text"
                                        class="form-control @error('nama') is-invalid @enderror"name="nama"
                                        value="{{ old('nama') }}" name="nama"
                                        placeholder="Masukkan Deskripsi Perusahaan">{{ old('nama',$data_siswa->nama) }}</textarea>

                                    @error('nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{--  --}}
                                <div class="form-group">
                                    <label class="font-weight-bold">Nomer Telepon</label>
                                    <input type="text"class="form-control @error('nomor_telepon') is-invalid @enderror"
                                        name="nomor_telepon"
                                        value="{{ old('nomor_telepon',$data_siswa->nomor_telepon) }}"placeholder="Masukkan nomor telepon">

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
                                        name="email" value="{{ old('email', $data_siswa->email) }}"placeholder="Masukkan email ">

                                    <!-- error message untuk judul -->

                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Status</label>
                                    <input type="text"class="form-control @error('status') is-invalid @enderror"
                                        name="status" value="{{ old('status',$data_siswa->status) }}"placeholder="Masukkan status ">

                                    <!-- error message untuk judul -->

                                    @error('status')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary">Simpan</button>

                                <a href="{{ route('data_siswa.index') }}" type="button"
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
