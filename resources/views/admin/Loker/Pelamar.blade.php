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
                                <li class="breadcrumb-item"><a href="#">Manajemen Siswa</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title"></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <form role="search" class=""><input type="text" placeholder="Search..."
                                                class="form-control"> <a href="#"></a></form>
                                    </div>
                                </div>
                            </div>

                            <table class="table mb-0 mt-3 text-center" id="my-table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pelamar</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No Telepon</th>
                                        <th scope="col">CV</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pelamars as $key => $Pelamar)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $Pelamar->nama_pelamar }}</td>
                                            <td>{{ $Pelamar->alamat }}</td>
                                            <td>{{ $Pelamar->nomor_telepon }}</td>
                                            <td><img src="{{ Storage::url('public/cv/') . $Pelamar->cv }}" class="rounded"
                                                    style="width: 50px"></td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">Lihat Detail Pelamar
                                                    </button>

                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4>Detail Pelamar</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <ul class="list-group list-group-flush mb-3">
                                                                            <li class="list-group-item">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                <span><i class="bi bi-person"></i></span>{{ $Pelamar->nama_pelamar }}</h6>
    
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <span><i class="bi bi-telephone"></i></span>
                                                                                    <span>{{ $Pelamar->nomor_telepon }}</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <span><i class="bi bi-geo-alt"></i></span>
                                                                                    <span>{{ $Pelamar->alamat }}</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <span><i class="bi bi-download"></i></span>
                                                                                    <a href="{{ Storage::url('public/cv/') . $Pelamar->cv }}" download>Download</a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <img src="{{ Storage::url('public/cv/') . $Pelamar->cv }}" class="card-img-top rounded" alt="CV Image" style="width: 100px;">
                                                                    </div>
                                                                </div>
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
