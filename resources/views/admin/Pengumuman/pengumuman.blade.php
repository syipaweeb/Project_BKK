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
                                <li class="breadcrumb-item"><a href="#">Pengumuman</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Pengumuman</h4>
                    </div>
                </div>
            </div><!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href="#"></a>
                                        </form>
                                    </div>
                                    <div class="col-md-4 col-lg-3 mt-3 mt-md-0">
                                        <a href="{{ route('pengumuman_admin.create') }}" type="button"
                                            class="btn btn-outline-primary btn-block"><i class="bi bi-plus-lg"></i> Tambah
                                            Pengumuman</a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive py-4">
                                <table id="my-table" class="table table-bordered dt-responsive nowrap text-center"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Poto</th>
                                            <th>Judul</th>
                                            <th>Deskrifsi</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pengumumens as $key => $Pengumuman)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td><img src="{{ Storage::url('public/poto/') . $Pengumuman->poto }}"
                                                        class="rounded" style="width: 50px"></td>
                                                <td>{{ $Pengumuman->judul }}</td>
                                                <td>{{ $Pengumuman->deskrifsi }}</td>
                                                <td>{{ $Pengumuman->tanggal }}</td>
                                                <td>
                                                    <a href="{{ route('pengumuman_admin.edit', $Pengumuman->id) }}" type="button"
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
                                                                        <form id="deleteForm" action="{{ route('pengumuman_admin.destroy', $Pengumuman->id) }}" method="POST">
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
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- container -->
    </div><!-- Page content Wrapper -->
@endsection
