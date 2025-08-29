@extends('admin.master')

@section('content')
<main class="main-content">
    <div class="container-fluid">

        <div class="page-header d-flex justify-content-between align-items-center">
            <h1>Tambah Penumpang - {{ $grub->nama_grub }}</h1>
            <a href="{{ route('admin.exit-data.indexdetail', $grub->id) }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('admin.exit-data.store', $grub->id) }}" method="POST">
                    @csrf

                    <div class="mb-3">
    <label class="form-label">Kode Booking</label>
    <input type="text" name="kode_booking" class="form-control" value="(otomatis)" readonly>
</div>


                    <div class="mb-3">
                        <label class="form-label">Agen</label>
                        <select name="agen_id" class="form-select">
                            <option value="">-- Pilih Agen --</option>
                            @foreach($agens as $a)
                                <option value="{{ $a->id }}">{{ $a->nama_agen }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Penumpang</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Passport</label>
                        <input type="text" name="no_passport" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Pembayaran</label>
                        <select name="status_pembayaran" class="form-select" required>
                            <option value="belum">Belum</option>
                            <option value="dp">DP</option>
                            <option value="lunas">Lunas</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nominal Pembayaran</label>
                        <input type="number" name="nominal_pembayaran" class="form-control" min="0" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Kursi</label>
                        <input type="number" name="seat_number" class="form-control" min="1">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('admin.master')

@section('content')
<main class="main-content">
    <div class="container-fluid">

        <div class="page-header d-flex justify-content-between align-items-center">
            <h1>Tambah Penumpang - {{ $grub->nama_grub }}</h1>
            <a href="{{ route('admin.exit-data.indexdetail', $grub->id) }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('admin.exit-data.store', $grub->id) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Kode Booking</label>
                        <input type="text" name="kode_booking" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Agen</label>
                        <select name="agen_id" class="form-select">
                            <option value="">-- Pilih Agen --</option>
                            @foreach($agens as $a)
                                <option value="{{ $a->id }}">{{ $a->nama_agen }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Penumpang</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Passport</label>
                        <input type="text" name="no_passport" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Pembayaran</label>
                        <select name="status_pembayaran" class="form-select" required>
                            <option value="belum">Belum</option>
                            <option value="dp">DP</option>
                            <option value="lunas">Lunas</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nominal Pembayaran</label>
                        <input type="number" name="nominal_pembayaran" class="form-control" min="0" step="1000">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Kursi</label>
                        <input type="number" name="seat_number" class="form-control" min="1">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
