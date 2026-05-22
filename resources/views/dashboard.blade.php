@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div>
        <h3>Todo List</h3>
        <p class="text-muted">Mengelola tugas atau pekerjaan anda</p>
    </div>

    <div class="row g-4">

        <!-- Total Task -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5>Total List</h5>
                    <h2>{{ $totalTasks }}</h2>
                </div>
            </div>
        </div>

        <!-- Completed -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5>Selesai</h5>
                    <h2>{{ $completedTasks }}</h2>
                </div>
            </div>
        </div>

        <!-- Pending -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5>Belum Selesai</h5>
                    <h2>{{ $pendingTasks }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Pie Chart -->
    <div class="card shadow-sm border-0 rounded-4 mt-4">

        <div class="card-body">

            <h4 class="mb-4">
                Statistik Todo
            </h4>

            <div style="max-width: 400px;">
                <canvas id="todoChart"></canvas>
            </div>

        </div>

    </div>

</div>

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('todoChart');

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Selesai', 'Belum Selesai'],
        datasets: [{
            data: [
                {{ $completedTasks }},
                {{ $pendingTasks }}
            ],
            borderWidth: 1
        }]
    }
});

</script>

@endsection