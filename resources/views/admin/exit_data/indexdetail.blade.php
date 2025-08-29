@extends('admin.master')

@section('content')
<main class="main-content">
    <div class="container-fluid">
        <!-- Header -->
        <div class="page-header d-flex justify-content-between align-items-center">
            <h1>Penumpang - {{ $grub->nama_grub }}</h1>
            <a href="{{ route('admin.exit-data.create', $grub->id) }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Penumpang
            </a>
        </div>

        <!-- Alert -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">{{ $message }}</div>
        @endif

        <!-- Table -->
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Booking</th>
                            <th>Agen</th>
                            <th>Nama</th>
                            <th>No Passport</th>
                            <th>Status</th>
                            <th>Nominal</th>
                            <th>Kursi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($exitData as $ed)
                        <tr>
                            <td>{{$loop->iteration}}.</td>
                            <td>{{ $ed->kode_booking }}</td>
                            <td>{{ $ed->agen->nama_agen }}</td>
                            <td>{{ $ed->nama }}</td>
                            <td>{{ $ed->no_passport }}</td>
                            <td><span class="badge bg-info">{{ ucfirst($ed->status_pembayaran) }}</span></td>
                            <td>{{ number_format($ed->nominal_pembayaran,0,',','.') }} SAR</td>
                            <td>{{ $ed->seat_number ?? '-' }}</td>
                            <td>
                                 <a href="{{ route('admin.exit-data.printTicket', $ed->id) }}" class="btn btn-sm btn-success" target="_blank">
        <i class="fas fa-print me-1"></i> Print Tiket
    </a>
                                <a href="{{ route('admin.exit-data.edit', [$grub->id, $ed->id]) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.exit-data.destroy', [$grub->id, $ed->id]) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada penumpang</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
