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
                    <h4 class="page-title">Manajemen Siswa</h4>
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

                        <table class="table mb-0 mt-3" id="my-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fahri</td>
                                    <td>+99 6876 8274 </td>
                                    <td>smkm@gmail.com</td>
                                    <td>Jomblo</td>
                                    <td>
                        <button type="button" class="btn btn-sm btn-danger" id="hapusButton">HAPUS</button>

                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title fs-5" id="exampleModalToggleLabel">Konfirmasi Hapus</h4>
                                <div type="button" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></div>
                            </div>
                            <div class="modal-body">
                                                                            Anda yakin ingin menghapus?
                                                                            </div>
                            <div class="modal-footer">
                                <form id="deleteForm" action="/hapus" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>





</form>
                                       
                                    </td>
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
<script> document.getElementById('hapusButton').addEventListener('click', function() {$('#exampleModalToggle').modal('show'); });</script>

    </div><!-- container -->
</div><!-- Page content Wrapper -->
@endsection