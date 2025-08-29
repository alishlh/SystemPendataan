@extends('admin.master')

@section('content')
    <main class="main-content">
        <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-title">
            <h1>Data Agen</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Agen</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('admin.agens.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Tambah Agen
        </a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Data Agen Table -->
    <div class="card">
        <div class="card-header">
            <div class="card-title">Daftar Agen</div>
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
                            <th>Nama Agen</th>
                            <th>Kontak</th>
                            <th>No Rekening</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agens as $agen)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $agen->nama_agen }}</td>
                            <td>{{ $agen->kontak_agen }}</td>
                            <td>{{ $agen->no_rekening }}</td>
                            <td>{{ $agen->email_agen }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.agens.show', $agen->id) }}" class="btn btn-sm btn-icon btn-primary me-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.agens.edit', $agen->id) }}" class="btn btn-sm btn-icon btn-light me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.agens.destroy', $agen->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-icon btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus agen ini?')">
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