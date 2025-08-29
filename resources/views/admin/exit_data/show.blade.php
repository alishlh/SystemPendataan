@extends('admin.master')

@section('content')
<main class="main-content">
    <div class="container-fluid">
        <!-- Header -->
        <div class="page-header d-flex justify-content-between align-items-center">
            <div>
                <h1 class="mb-1">Detail Grub: {{ $grub->nama_grub }}</h1>
                <small class="text-muted">Data penumpang dan informasi grub</small>
            </div>
            <a href="{{ route('admin.exit-data.create', $grub->id) }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Tambah Penumpang
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Informasi Grub -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Informasi Grub</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><strong>Nama Grub:</strong></label>
                            <p>{{ $grub->nama_grub }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Tanggal Keberangkatan:</strong></label>
                            <p>{{ \Carbon\Carbon::parse($grub->tanggal_keberangkatan)->format('d M Y') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><strong>Lokasi Keberangkatan:</strong></label>
                            <p>{{ $grub->lokasi_keberangkatan }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Status:</strong></label>
                            <span class="badge 
                                @if($grub->status == 'proses') bg-warning
                                @elseif($grub->status == 'done') bg-success
                                @else bg-danger @endif">
                                {{ ucfirst($grub->status) }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h3 class="text-success">{{ $grub->seats_available }}</h3>
                                <p class="mb-0">Kursi Tersedia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h3 class="text-primary">{{ $grub->seats_booked }}</h3>
                                <p class="mb-0">Kursi Terisi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h3 class="text-info">{{ $grub->seats_available - $grub->seats_booked }}</h3>
                                <p class="mb-0">Kursi Kosong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Exit Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Data Penumpang</h5>
                <small>Total: {{ $exitData->count() }} penumpang</small>
            </div>
            <div class="card-body">
                @if($exitData->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Booking</th>
                                    <th>Nama</th>
                                    <th>No Passport</th>
                                    <th>Status Pembayaran</th>
                                    <th>Nominal Pembayaran</th>
                                    <th>Nomor Kursi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exitData as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <span class="badge bg-secondary">{{ $data->kode_booking }}</span>
                                    </td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->no_passport }}</td>
                                    <td>
                                        @if($data->status_pembayaran == 'lunas')
                                            <span class="badge bg-success">Lunas</span>
                                        @elseif($data->status_pembayaran == 'dp')
                                            <span class="badge bg-warning">DP</span>
                                        @else
                                            <span class="badge bg-danger">Belum</span>
                                        @endif
                                    </td>
                                    <td>Rp {{ number_format($data->nominal_pembayaran, 0, ',', '.') }}</td>
                                    <td>
                                        @if($data->seat_number)
                                            <span class="badge bg-info">Kursi {{ $data->seat_number }}</span>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.grubs.exit-data.edit', [$grub->id, $data->id]) }}" 
                                               class="btn btn-sm btn-icon btn-light me-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.grubs.exit-data.destroy', [$grub->id, $data->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-icon btn-danger" 
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-users fa-3x text-muted mb-3"></i>
                        <h5 class="text-muted">Belum ada data penumpang</h5>
                        <a href="{{ route('admin.grubs.exit-data.create', $grub->id) }}" class="btn btn-primary mt-2">
                            <i class="fas fa-plus me-2"></i> Tambah Penumpang Pertama
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('admin.grubs.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar Grub
            </a>
        </div>
    </div>
</main>
@endsection