@extends('admin.master')

@section('content')
    <!-- Page Header -->
     <main class="main-content">
        <div class="container-fluid">
    <div class="page-header">
        <div class="page-title">
            <h1>Detail Agen</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.agens.index') }}">Data Agen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Agen</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('admin.agens.edit', $agen->id) }}" class="btn btn-light me-2">
                <i class="fas fa-edit me-2"></i> Edit
            </a>
            <a href="{{ route('admin.agens.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-2"></i> Kembali
            </a>
        </div>
    </div>

    <!-- Detail Card -->
    <div class="card">
        <div class="card-header">
            <div class="card-title">Informasi Agen</div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-muted">Nama Agen</label>
                        <p class="fs-6 fw-semibold">{{ $agen->nama_agen }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Email</label>
                        <p class="fs-6">{{ $agen->email_agen }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-muted">Kontak</label>
                        <p class="fs-6">{{ $agen->kontak_agen }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Tanggal Dibuat</label>
                        <p class="fs-6">{{ $agen->created_at->format('d M Y, H:i') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="form-label text-muted">Alamat</label>
                    <p class="fs-6">{{ $agen->alamat_agen }}</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
@endsection