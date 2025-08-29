<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grub;
use Illuminate\Http\Request;

class GrubController extends Controller
{
    public function index()
    {
        $grubs = Grub::all();
        return view('admin.grubs.index', compact('grubs'));
    }

    public function create()
    {
        return view('admin.grubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_grub' => 'required|string|max:255',
            'tanggal_keberangkatan' => 'required|date',
            'lokasi_keberangkatan' => 'required|string|max:255',
            'seats_available' => 'required|integer|min:1',
            'status' => 'required|in:cancel,proses,done',
        ]);

        Grub::create($request->all());

        return redirect()->route('admin.grubs.index')
            ->with('success', 'Grub berhasil ditambahkan.');
    }

    public function show(Grub $grub)
    {
        return view('admin.grubs.show', compact('grub'));
    }

    public function edit(Grub $grub)
    {
        return view('admin.grubs.edit', compact('grub'));
    }

    public function update(Request $request, Grub $grub)
    {
        $request->validate([
            'nama_grub' => 'required|string|max:255',
            'tanggal_keberangkatan' => 'required|date',
            'lokasi_keberangkatan' => 'required|string|max:255',
            'seats_available' => 'required|integer|min:1',
            'seats_booked' => 'required|integer|min:0',
            'status' => 'required|in:cancel,proses,done',
        ]);

        // Validasi agar seats_booked tidak melebihi seats_available
        if ($request->seats_booked > $request->seats_available) {
            return back()->withErrors(['seats_booked' => 'Kursi terisi tidak boleh melebihi kursi tersedia.']);
        }

        $grub->update($request->all());

        return redirect()->route('admin.grubs.index')
            ->with('success', 'Grub berhasil diperbarui.');
    }

    public function destroy(Grub $grub)
    {
        $grub->delete();

        return redirect()->route('admin.grubs.index')
            ->with('success', 'Grub berhasil dihapus.');
    }
}
