@extends('master')

@section('title','Dashboard')
@section('judul','Dashboard')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">

        <!-- Kartu Jumlah Film -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Film</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahFilm }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-film fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu Jumlah Pengunjung -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pengunjung</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPengunjung }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu Jumlah Staf -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Staf</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahStaf }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jadwal Tayang Hari Ini -->
    <div class="row mt-4">
       <div class="col-xl-12 col-lg-12">
           <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Jadwal Tayang Hari Ini</h6>
                </div>
                <div class="card-body">
                    @if($jadwalHariIni->isEmpty())
                        <p class="text-muted">Belum ada film yang tayang hari ini.</p>
                    @else
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Judul Film</th>
                                    <th>Ruangan</th>
                                    <th>Jam Tayang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwalHariIni as $jadwal)
                                    <tr>
                                        <td>{{ $jadwal->film->title ?? 'Tanpa Judul' }}</td>
                                        <td>{{ $jadwal->ruangan }}</td>
                                        <td>{{ \Carbon\Carbon::parse($jadwal->show_time)->format('H:i') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Pie Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Waktu Tayang</h6>
                </div>
                <!-- Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Pagi
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Siang
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Malam
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End of Page Content -->

<!-- Chart Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById("myPieChart").getContext('2d');
    const myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Pagi", "Siang", "Malam"],
            datasets: [{
                data: [{{ $pagi }}, {{ $siang }}, {{ $malam }}],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                borderColor: '#e3e6f0'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 20
                }
            }
        }
    });
</script>
@endsection
