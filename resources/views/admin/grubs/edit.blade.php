@extends('admin.master')

@section('content')
    <main class="main-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h1>Edit Grub</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.grubs.index') }}">Data Grub</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Grub</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Form -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Form Edit Grub</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.grubs.update', $grub->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="nama_grub" class="col-sm-2 col-form-label">Nama Grub</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_grub" name="nama_grub" value="{{ $grub->nama_grub }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_keberangkatan" class="col-sm-2 col-form-label">Tanggal Keberangkatan</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_keberangkatan" name="tanggal_keberangkatan" value="{{ $grub->tanggal_keberangkatan->format('Y-m-d') }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lokasi_keberangkatan" class="col-sm-2 col-form-label">Lokasi Keberangkatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lokasi_keberangkatan" name="lokasi_keberangkatan" value="{{ $grub->lokasi_keberangkatan }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="seats_available" class="col-sm-2 col-form-label">Kursi Tersedia</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="seats_available" name="seats_available" value="{{ $grub->seats_available }}" min="1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="seats_booked" class="col-sm-2 col-form-label">Kursi Terisi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="seats_booked" name="seats_booked" value="{{ $grub->seats_booked }}" min="0" max="{{ $grub->seats_available }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="status" name="status" required>
                                    <option value="proses" {{ $grub->status == 'proses' ? 'selected' : '' }}>Proses</option>
                                    <option value="done" {{ $grub->status == 'done' ? 'selected' : '' }}>Selesai</option>
                                    <option value="cancel" {{ $grub->status == 'cancel' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('admin.grubs.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
<script>
    // Validasi agar seats_booked tidak melebihi seats_available
    document.getElementById('seats_available').addEventListener('change', function() {
        const seatsAvailable = parseInt(this.value);
        const seatsBooked = document.getElementById('seats_booked');
        
        if (parseInt(seatsBooked.value) > seatsAvailable) {
            seatsBooked.value = seatsAvailable;
        }
        
        seatsBooked.max = seatsAvailable;
    });
</script>
@endsection