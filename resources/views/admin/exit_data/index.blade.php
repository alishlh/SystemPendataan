@extends('admin.master')

@section('content')
<main class="main-content">
    <div class="container-fluid">
        <!-- Header -->
        <div class="page-header d-flex justify-content-between align-items-center">
            <div>
                <h1 class="mb-1">Data Bus pada Jadwal</h1>
                <small class="text-muted">Daftar bus yang sudah masuk ke dalam jadwal keberangkatan</small>
            </div>
            
        </div>

        <!-- Alert -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Card List -->
        <div class="row mt-4">
            @forelse($cardGrub as $bg)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 card-hover card-clickable" 
                         onclick="window.location='{{ route('admin.grubs.show', $bg->id) }}'">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-bus fa-2x text-primary me-3"></i>
                                <h5 class="card-title mb-0">{{ \Carbon\Carbon::parse($bg->tanggal_keberangkatan)->format('d M Y') }}</h5>
                            </div>
                            <p class="mb-1 text-muted">
                                <i class="fas fa-calendar-alt me-2"></i>
                                {{ $bg->lokasi_keberangkatan }} 
                            </p>
                            <p class="mb-1">
                                <strong></strong> {{ $bg->nama_grub }}
                            </p>
                            <div class="mt-3">
                                <span class="badge bg-success me-2">
                                    <i class="fas fa-chair me-1"></i> Tersedia: {{ $bg->seats_available }}
                                </span>
                                <span class="badge bg-danger">
                                    <i class="fas fa-user-check me-1"></i> Terisi: {{ $bg->seats_booked }}
                                </span>
                            </div>
                        </div>
                        <div class="card-footer bg-light d-flex justify-content-end">
                            <a href="{{ route('admin.exit-data.indexdetail', $bg->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-users me-1"></i> Lihat Penumpang
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Empty State -->
                <div class="col-12 text-center py-5">
                    <i class="fas fa-bus fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada data bus pada jadwal</h5>
                    <a href="" class="btn btn-outline-primary mt-2">
                        <i class="fas fa-plus me-2"></i> Tambah Bus Pertama
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</main>

{{-- Custom Hover Effect --}}
@push('styles')
<style>
    .card-hover {
        transition: all 0.2s ease-in-out;
        cursor: pointer;
    }
    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
</style>
@endpush
@endsection