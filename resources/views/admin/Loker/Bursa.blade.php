@extends('layouts.app')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Bursa Kerja</h4>
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">BKK</a></li>
                        <li class="breadcrumb-item"><a href="#">Bursa Kerja</a></li>
                    </ol>
                    <div class="btn-group float-right">
                        <a href="{{ route('loker.create') }}" class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i> Tambah</a>
                    </div>
                </div>
            </div>
        </div><!-- end page title end breadcrumb -->

        <div class="row py-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap text-center"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Perusahaan</th>
                                        <th scope="col">Nama Pekerjaan</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Banner</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Rentang Gaji</th>
                                        <th scope="col">Jadwal Tes</th>
                                        <th scope="col">Batas Awal</th>
                                        <th scope="col">Batas Akhir</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($lokers as $key => $Loker)
                                    <tr>
                                        <td>{{ $key+1 }}</td>

                                        <td>{{ $Loker->nama_perusahaan }}</td>
                                        <td>{{ $Loker->nama_pekerjaan }}</td>
                                        <td>{{ $Loker->deskripsi }}</td>
                                        <td>{{ $Loker->lokasi}}</td>

                                        <td><img src="{{ Storage::url('public/banner/') . $Loker->banner}}"

                                                class="rounded" style="width: 50px"></td>

                                        <td><img src="{{ Storage::url('public/logo/') . $Loker->logo}}"

                                                class="rounded" style="width: 50px"></td>

                                        <td>{{ $Loker->rentang_gaji}}</td>
                                        <td>{{ $Loker->jadwal_tes}}</td>
                                        <td>{{ $Loker->batas_awal}}</td>
                                        <td>{{ $Loker->batas_akhir}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('pelamar.index', $Loker->id) }}" class="btn btn-primary"><i class="bi bi-people"></i> Pelamar</a>
                                            <a href="{{ route('loker.edit', $Loker->id) }}" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('loker.destroy', $Loker->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- container -->
</div><!-- Page content Wrapper -->
@endsection
