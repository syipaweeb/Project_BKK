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
                                    <div class="col-5">
                                        <form role="search" class=""><input type="text" placeholder="Search..."
                                                class="form-control"> <a href="#"></a></form>
                                    </div>

                                </div>
                            </div>

                            <table id="my-table" class="table table-bordered dt-responsive nowrap text-center"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomer Telepon</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ auth()->user()->name }}</td>
                                        <td>{{ auth()->user()->nomor_telepon }}</td>
                                        <td>{{ auth()->user()->email }}</td>
                                        <td>{{ auth()->user()->status }}</td>
                                    </tr>

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
