@extends('layouts.app')

@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">BKK</a></li>
                            <li class="breadcrumb-item"><a href="#">Bursa Kerja</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Bursa kerja</h4>
                </div>
            </div>
        </div><!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-1">
                                    <a href="{{ route('loker.create') }}" type="button"
                                        class="btn btn-outline-primary"><i class="bi bi-plus-lg">Tambah
                                        </i></a>
                                </div>
                            </div>
                        </div>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap text-center"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Perusahan</th>
                                    <th scope="col">Nama Pekerjaan</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Banner</th>
                                    <th scope="col">logo</th>
                                    <th scope="col">Rentang Gaji</th>
                                    <th scope="col">Jadwal tes</th>
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
                                            <a href="{{ route('pelamar.index')}}" type="button" class="btn btn-primary">Pelamar</a>
                                            <form onsubmit="retrun confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('loker.destroy', $Loker->id) }}" method="POST">
                                            <a href="{{route('loker.edit', $Loker->id)}}" class="btn btn-sm btn-primary">edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- container -->
</div><!-- Page content Wrapper -->
@endsection
