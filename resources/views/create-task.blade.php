@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h4 class="mb-4 text-center">Tambahkan Tugas atau Pekerjaan Baru</h4>

                    <form action="/create-task" method="POST">

                        @csrf

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                        </div>

                        <!-- TASK / KEGIATAN -->
                        <div class="mb-3">
                            <label class="form-label">Kegiatan</label>
                            <input type="text" name="tasks" class="form-control" placeholder="Enter task/activity" required>
                        </div>

                        <!-- CATEGORY -->
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="text" name="category" class="form-control" placeholder="Example: Work, Study" required>
                        </div>

                        <!-- DATE -->
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <!-- BUTTON -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Simpan Tugas atau Pekerjaan 
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection