@extends('layouts.app')
@section('content')
    <div class="content"><!-- Top Bar Start -->
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">BKK</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div><!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="icon-contain">
                                            <div class="row">
                                                <div class="col-2 align-self-center"><i class="bi bi-mortarboard"></i>
                                                </div>
                                                <div class="col-12 text-right">
                                                    <h1 class="mt-3 mb-2 fw-bold">{{ $totalSiswa }}</h1>
                                                    <p class="mb-0 font-12 text-muted">Lulusan 3 tahun</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body justify-content-center">
                                        <div class="icon-contain">
                                            <div class="row">
                                                <div class="col-2 align-self-center"><i class="bi bi-building"></i>
                                                </div>
                                                <div class="col-12 text-right">
                                                    <h1 class="mt-3 mb-2 fw-bold">{{ $totalMitra }}</h1>
                                                    <p class="mb-0 font-12 text-muted">Jumlah mitra </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="icon-contain">
                                            <div class="row">
                                                <div class="col-2 align-self-center"><i class="bi bi-briefcase"></i>
                                                </div>
                                                <div class="col-12 text-right">
                                                    <h1 class="mt-3 mb-2 fw-bold">{{ $totalLowongan }}</h1>
                                                    <p class="mb-0 font-12 text-muted">Total Loker</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mb-4 mt-3">BMW</h5>
                                <div><canvas id="dash-doughnut" height="200"></canvas></div>
                                <hr>
                                <!-- List untuk presentase -->
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Bekerja
                                        <span class="badge badge-primary badge-pill" id="percentageBekerja"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Melanjutkan Studi
                                        <span class="badge badge-primary badge-pill" id="percentageMelanjutkan"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wirausaha
                                        <span class="badge badge-primary badge-pill" id="percentageWirausaha"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


            </div><!-- container -->
        </div><!-- Page content Wrapper -->
    </div><!-- End Right content here -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data presentase untuk tiga kategori
        const bekerjaPercentage = 50;
        const melanjutkanPercentage = 30;
        const wirausahaPercentage = 20;

        // Ambil elemen canvas untuk grafik donat
        const ctx = document.getElementById('dash-doughnut').getContext('2d');

        // Buat grafik donat
        const myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Bekerja', 'Melanjutkan', 'Wirausaha'],
                datasets: [{
                    data: [bekerjaPercentage, melanjutkanPercentage, wirausahaPercentage],
                    backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.parsed + '%';
                                return label;
                            }
                        }
                    }
                }
            }
        });

        // Tampilkan presentase di dalam list
        document.getElementById('percentageBekerja').innerText = bekerjaPercentage + '%';
        document.getElementById('percentageMelanjutkan').innerText = melanjutkanPercentage + '%';
        document.getElementById('percentageWirausaha').innerText = wirausahaPercentage + '%';
    </script>


@endsection
