@extends('admin.master')

@section('content')
    <main class="main-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h1>Detail Grub</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.grubs.index') }}">Data Grub</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Grub</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Detail Card -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Informasi Grub</div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Grub</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $grub->nama_grub }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Keberangkatan</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ \Carbon\Carbon::parse($grub->tanggal_keberangkatan)->format('d M Y') }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Lokasi Keberangkatan</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $grub->lokasi_keberangkatan }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kursi Tersedia</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $grub->seats_available }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kursi Terisi</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $grub->seats_booked }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kursi Kosong</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $grub->seats_available - $grub->seats_booked }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            @if($grub->status == 'proses')
                                <span class="badge bg-warning">Proses</span>
                            @elseif($grub->status == 'done')
                                <span class="badge bg-success">Selesai</span>
                            @else
                                <span class="badge bg-danger">Dibatalkan</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Dibuat Pada</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $grub->created_at->format('d M Y H:i') }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Diperbarui Pada</label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $grub->updated_at->format('d M Y H:i') }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <a href="{{ route('admin.grubs.edit', $grub->id) }}" class="btn btn-light me-2">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <a href="{{ route('admin.grubs.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection