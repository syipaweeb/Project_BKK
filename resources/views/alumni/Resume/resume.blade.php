@extends('layouts.landing_page_alumni')

@section('alumni')

<div class="col-xl-9">

    <div class="card">

        <div class="card-body">

            <h4 class="mt-0 header-title">Upload CV Anda</h4>

            <p class="text-muted mb-4 font-13">You can set the height</p>

            <form action="{{ route('resume.update', ['resume' => $resume->id]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT') <!-- Tambahkan method spoofing -->

                <input type="file" name="file" id="input-file-now-custom-2" class="dropify" data-height="500">

                <!-- Tambahkan tombol button di sini -->

                <button type="submit" class="btn btn-primary mt-3" id="uploadButton">Upload</button>

            </form>

        </div>

    </div>

</div><!--end col-->



@endsection
