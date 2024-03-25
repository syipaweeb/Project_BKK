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
        </div><!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <form role="search" class=""><input type="text"
                                            placeholder="Search..." class="form-control"> <a
                                            href="#"></a></form>
                                </div>
                            </div>
                        </div>

                        <table class="table mb-0 mt-3 text-center" id="my-table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pekerjaan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">CV</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pelamars as $key => $Pelamar)
                                <tr>
                                    <td>{{ $key+1 }}</td>

                                    <td>{{ $Pelamar->nama_pelamar }}</td>
                                    <td>{{ $Pelamar->nama_pekerjaan }}</td>
                                    <td>{{ $Pelamat->alamat }}</td>
                                    <td>{{ $Pelamar->cv}}</td>
                                <tr>

                                    <td>
                                        <button type="button" class="btn btn-primary"><i
                                                class="bi bi-download"></i></button>

                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success">LIhat Detail
                                            Pelamar</button>
                                    </td>

                                    @empty
                                    @endforelse
                            </tbody>
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
                        </table>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- container -->
</div><!-- Page content Wrapper -->

@endsection
