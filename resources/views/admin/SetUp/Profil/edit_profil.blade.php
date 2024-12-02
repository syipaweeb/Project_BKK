@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Isi Untuk Edit profil</h4>
                    </div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">PUT
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('profil_bkk.update', $profil_bkk->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Masukan Banner</label>
                                    <input class="form-control" type="file" id="formFile" name="banner">

                                    {{--  --}}
                                    <div class="mt-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Tentang BKK</label>
                                        <textarea type="text" class="form-control @error('tentang_bkk') is-invalid @enderror"name="tentang_bkk"
                                            value="{{ old('tentang_bkk') }}" name="tentang_bkk" placeholder="Masukkan Tentang BKK ">{{ old('tentang_bkk', $profil_bkk->tentang_bkk) }}</textarea>

                                        @error('tentang_bkk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Visi</label>
                                        <input type="text"
                                            class="form-control @error('visi') is-invalid @enderror"name="visi"
                                            value="{{ old('visi', $profil_bkk->visi) }}"
                                            placeholder="Masukkan s">
                                    @error('visi')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                        <label class="font-weight-bold">Misi</label>
                                        <input type="text"
                                            class="form-control @error('misi') is-invalid @enderror"name="misi"
                                            value="{{ old('misi', $profil_bkk->misi) }}" placeholder="Masukkan Misi">

                                        @error('misi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Tujuan</label>
                                        <input type="text"
                                            class="form-control @error('tujuan') is-invalid @enderror"name="tujuan"
                                            value="{{ old('tujuan', $profil_bkk->tujuan) }}" placeholder="Masukkan Tujuan">

                                        @error('tujuan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                    <a href="{{ route('profil_bkk.index') }}" type="button"
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
