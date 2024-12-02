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
                                <li class="breadcrumb-item"><a href="#">Manajemen Mitra</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Manajemen Mitra</h4>
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
                                        <a href="{{ route('data_mitra.create') }}" type="button"
                                            class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div style="overflow-y: scroll; max-height: 400px;">
                                <!-- Tambahkan div dengan style overflow-y: scroll -->
                                <table id="datatable" class="table table-bordered dt-responsive nowrap text-center"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                        <tr>
                                            <th scope="col">N0</th>
                                            <th scope="col">logo</th>
                                            <th scope="col">banner</th>
                                            <th scope="col">Nama Perusahaan</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Nomer Telepon</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data_mitras as $key => $DataMitra)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><img src="{{ Storage::url('public/banner/') . $DataMitra->banner }}"
                                                        class="rounded" style="width: 50px"></td>
                                                <td><img src="{{ Storage::url('public/logo/') . $DataMitra->logo }}"
                                                        class="rounded" style="width: 50px"></td>

                                                <td>{{ $DataMitra->nama_perusahaan }}</td>
                                                <td>{{ $DataMitra->deskripsi_perusahaan }}</td>
                                                <td>{{ $DataMitra->nomor_telepon }}</td>
                                                <td>{{ $DataMitra->email }}</td>
                                                <td>{{ $DataMitra->lokasi }}</td>

                                                <td>
                                                    <a href="{{ route('data_mitra.edit', $DataMitra->id) }}" type="button"
                                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                                    
                                                    
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" id="sa-warning" data-toggle="modal" data-target="#confirmationModal">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Hapus</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah Anda yakin ingin menghapus data ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                        <!-- Form untuk menghapus data -->
                                                                        <form id="deleteForm" action="{{ route('data_mitra.destroy', $DataMitra->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                </td>

                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div> <!-- Tutup div dengan style overflow-y: scroll -->
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- container -->
    </div><!-- Page content Wrapper -->
@endsection
