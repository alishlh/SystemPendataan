@extends('admin.master')

@section('content')
    <!-- Page Header -->
     <main class="main-content">
        <div class="container-fluid">
    <div class="page-header">
        <div class="page-title">
            <h1>Edit Data Agen</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.agens.index') }}">Data Agen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Agen</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('admin.agens.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i> Kembali
        </a>
    </div>

    <!-- Form Card -->
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Edit Agen</div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.agens.update', $agen->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nama_agen" class="form-label">Nama Agen <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_agen') is-invalid @enderror" 
                               id="nama_agen" name="nama_agen" value="{{ old('nama_agen', $agen->nama_agen) }}" required>
                        @error('nama_agen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email_agen" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email_agen') is-invalid @enderror" 
                               id="email_agen" name="email_agen" value="{{ old('email_agen', $agen->email_agen) }}" required>
                        @error('email_agen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="kontak_agen" class="form-label">Kontak <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('kontak_agen') is-invalid @enderror" 
                               id="kontak_agen" name="kontak_agen" value="{{ old('kontak_agen', $agen->kontak_agen) }}" required>
                        @error('kontak_agen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="no_rekening" class="form-label">No Rekening <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('no_rekening') is-invalid @enderror" 
                               id="no_rekening" name="no_rekening" value="{{ old('no_rekening', $agen->no_rekening) }}" required>
                        @error('no_rekening')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="alamat_agen" class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('alamat_agen') is-invalid @enderror" 
                                  id="alamat_agen" name="alamat_agen" rows="3" required>{{ old('alamat_agen', $agen->alamat_agen) }}</textarea>
                        @error('alamat_agen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i> Perbarui
                </button>
                <a href="{{ route('admin.agens.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times me-2"></i> Batal
                </a>
            </form>
        </div>
    </div>
    </div>
    </main>
@endsection