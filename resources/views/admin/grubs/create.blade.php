@extends('admin.master')

@section('content')
    <main class="main-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h1>Tambah Grub</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.grubs.index') }}">Data Grub</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Grub</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Form -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Form Tambah Grub</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.grubs.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="nama_grub" class="col-sm-2 col-form-label">Nama Grub</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_grub" name="nama_grub" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_keberangkatan" class="col-sm-2 col-form-label">Tanggal Keberangkatan</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_keberangkatan" name="tanggal_keberangkatan" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lokasi_keberangkatan" class="col-sm-2 col-form-label">Lokasi Keberangkatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lokasi_keberangkatan" name="lokasi_keberangkatan" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="seats_available" class="col-sm-2 col-form-label">Kursi Tersedia</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="seats_available" name="seats_available" min="1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="status" name="status" required>
                                    <option value="proses" selected>Proses</option>
                                    <option value="done">Selesai</option>
                                    <option value="cancel">Dibatalkan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('admin.grubs.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection