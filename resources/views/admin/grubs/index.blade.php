@extends('admin.master')

@section('content')
    <main class="main-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h1>Data Grub</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Grub</li>
                        </ol>
                    </nav>
                </div>
                <a href="{{ route('admin.grubs.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i> Tambah Grub
                </a>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Data Grub Table -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Daftar Grub</div>
                    <div class="card-action">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-container">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Grub</th>
                                    <th>Tanggal Keberangkatan</th>
                                    <th>Lokasi Keberangkatan</th>
                                    <th>Kursi Tersedia</th>
                                    <th>Kursi Terisi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grubs as $grub)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $grub->nama_grub }}</td>
                                    <td>{{ \Carbon\Carbon::parse($grub->tanggal_keberangkatan)->format('d M Y') }}</td>
                                    <td>{{ $grub->lokasi_keberangkatan }}</td>
                                    <td>{{ $grub->seats_available }}</td>
                                    <td>{{ $grub->seats_booked }}</td>
                                    <td>
                                        @if($grub->status == 'proses')
                                            <span class="badge bg-warning">Proses</span>
                                        @elseif($grub->status == 'done')
                                            <span class="badge bg-success">Selesai</span>
                                        @else
                                            <span class="badge bg-danger">Dibatalkan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.grubs.show', $grub->id) }}" class="btn btn-sm btn-icon btn-primary me-2">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.grubs.edit', $grub->id) }}" class="btn btn-sm btn-icon btn-light me-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.grubs.destroy', $grub->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-icon btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus grub ini?')">
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
                </div>
            </div>
        </div>
    </main>
@endsection