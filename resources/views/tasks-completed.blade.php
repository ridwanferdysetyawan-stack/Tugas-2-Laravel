@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card p-4 shadow-sm border-0">

        <div class="d-flex justify-content-between mb-1">

            <div>
                <h3>Completed Task</h3>
                <p class="text-muted">Daftar tugas atau pekerjaan yang sudah selesai</p>
            </div>

        </div>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kegiatan</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>

                @foreach($tasks as $task)

                <tr>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->tasks }}</td>
                    <td>{{ $task->category }}</td>
                    <td>{{ $task->date }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection