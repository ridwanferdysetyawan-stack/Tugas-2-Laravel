@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card p-4 shadow-sm border-0">

        <!-- Header -->
        <div class="d-flex justify-content-between mb-1">

            <div>
                <h3>Todo List</h3>
                <p class="text-muted">Daftar tugas atau pekerjaan anda</p>
            </div>

        </div>

        <!-- Table -->
        <table class="table table-bordered align-middle">

            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kegiatan</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Checklist</th>
                    <th>Hapus</th>
                </tr>
            </thead>

            <tbody>

                @foreach($tasks as $task)

                <tr>

                    <!-- NAME -->
                    <td>{{ $task->name }}</td>

                    <!-- TASK -->
                    <td>{{ $task->tasks }}</td>

                    <!-- CATEGORY -->
                    <td>{{ $task->category }}</td>

                    <!-- DATE -->
                    <td>{{ $task->date }}</td>

                    <!-- CHECKBOX -->
                    <td>
                        <form action="/tasks/{{ $task->id }}/toggle"
                              method="POST"
                              style="display:inline;">

                            @csrf

                            <input type="checkbox"
                                   onChange="this.form.submit()"
                                   {{ $task->completed ? 'checked' : '' }}>

                        </form>
                    </td>

                    <!-- DELETE BUTTON (NO POPUP) -->
                    <td>
                        <form action="/tasks/{{ $task->id }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>

                        </form>
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection