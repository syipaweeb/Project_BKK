@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Profil BKK</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">BKK</a></li>
                    <li class="breadcrumb-item active">Profil BKK</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dt-responsive nowrap text-center" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">Banner</th>
                                    <th scope="col">Tentang BKK</th>
                                    <th scope="col">Visi</th>
                                    <th scope="col">Misi</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($profil_b_k_k_s as $Profil)
                                <tr>
                                    <td><img src="{{ Storage::url('public/bannerProfile/' . $Profil->banner) }}" class="rounded img-fluid" style="max-width: 100px;"></td>
                                    <td>{{ \Illuminate\Support\Str::limit($Profil->tentang_bkk, 100, $end='...') }}</td>
                                    <td>{{ $Profil->visi }}</td>
                                    <td>
                                        @if(is_array($Profil->misi))
                                            @foreach ($Profil->misi as $index => $misi)
                                                {{ $index + 1 }}. {{ \Illuminate\Support\Str::limit($misi, 50, $end='...') }} <br>
                                            @endforeach
                                        @else
                                            {{ \Illuminate\Support\Str::limit($Profil->misi, 50, $end='...') }} <!-- Ini adalah contoh jika $Profil->misi adalah string -->
                                        @endif
                                    </td>
                                    <td>{{ $Profil->tujuan }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('profil_bkk.edit', $Profil->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">No records found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container-fluid -->
@endsection
