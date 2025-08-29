<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agen;
use App\Models\BusGrub;
use App\Models\ExitData;
use App\Models\Grub;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ExitDataController extends Controller
{
    public function index()
    {
        $cardGrub = Grub::get();
        return view('admin.exit_data.index', compact('cardGrub'));
    }
    public function indexdetail($grub_id)
    {
        $grub = Grub::findOrFail($grub_id);

        $exitData = ExitData::with('agen')
            ->where('grub_id', $grub->id)
            ->get();

        return view('admin.exit_data.indexdetail', compact('grub', 'exitData'));
    }

    // Create form
    public function create($grub_id)
    {
        $grub = Grub::findOrFail($grub_id);
        $agens = Agen::all();

        return view('admin.exit_data.create', compact('grub', 'agens'));
    }

    // Store
    public function store(Request $request, $grub_id)
    {
        $request->validate([
            'nama' => 'required',
            'no_passport' => 'required',
            'status_pembayaran' => 'required|in:lunas,dp,belum',
            'nominal_pembayaran' => 'numeric|min:0',
        ]);

        $grub = Grub::findOrFail($grub_id);

        // Generate kode booking unik
        do {
            $kode_booking = strtoupper(Str::random(3)) . rand(10000, 99999);
        } while (ExitData::where('kode_booking', $kode_booking)->exists());

        ExitData::create([
            'grub_id' => $grub->id,
            'agen_id' => $request->agen_id,
            'kode_booking' => $kode_booking,
            'nama' => $request->nama,
            'no_passport' => $request->no_passport,
            'status_pembayaran' => $request->status_pembayaran,
            'nominal_pembayaran' => $request->nominal_pembayaran,
            'seat_number' => $request->seat_number,
        ]);

        // update kursi
        $grub->increment('seats_booked');

        return redirect()->route('admin.exit-data.indexdetail', $grub->id)
            ->with('success', 'Penumpang berhasil ditambahkan');
    }

    // Edit form
    public function edit($grub_id, $id)
    {
        $grub = Grub::findOrFail($grub_id);
        $agens = Agen::all();
        $exitData = ExitData::findOrFail($id);

        return view('admin.exit_data.edit', compact('grub', 'agens', 'exitData'));
    }

    // Update
    public function update(Request $request, $grub_id, $id)
    {
        $exitData = ExitData::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'no_passport' => 'required',
            'status_pembayaran' => 'required|in:lunas,dp,belum',
            'nominal_pembayaran' => 'numeric|min:0',
        ]);

        $exitData->update($request->all());

        return redirect()->route('admin.exit-data.indexdetail', $grub_id)
            ->with('success', 'Penumpang berhasil diupdate');
    }

    // Delete
    public function destroy($grub_id, $id)
    {
        $exitData = ExitData::findOrFail($id);
        $grub = Grub::findOrFail($grub_id);

        $exitData->delete();
        $grub->decrement('seats_booked');

        return redirect()->route('admin.exit-data.indexdetail', $grub_id)
            ->with('success', 'Penumpang berhasil dihapus');
    }
    public function printTicket($id)
    {
        $exitData = ExitData::findOrFail($id);
        $grub = $exitData->grub; // relasi exit_data -> grub

        $pdf = Pdf::loadView('admin.exit_data.ticket', compact('exitData', 'grub'))
            ->setPaper('A6', 'portrait'); // ukuran tiket kecil A6

        return $pdf->download('tiket-' . $exitData->kode_booking . '.pdf');
    }
}
