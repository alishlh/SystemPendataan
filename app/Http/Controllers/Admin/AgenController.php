<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agen;
use Illuminate\Http\Request;

class AgenController extends Controller
{
    public function index()
    {
        $agens = Agen::all();
        return view('admin.agens.index', compact('agens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_agen' => 'required|unique:agens',
            'kontak_agen' => 'required',
            'email_agen' => 'required|email|unique:agens'
        ]);

        Agen::create($request->all());

        return redirect()->route('admin.agens.index')
            ->with('success', 'Agen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agen $agen)
    {
        return view('admin.agens.show', compact('agen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agen $agen)
    {
        return view('admin.agens.edit', compact('agen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agen $agen)
    {
        $request->validate([
            'nama_agen' => 'required|unique:agens,nama_agen,' . $agen->id,
            'kontak_agen' => 'required',
            'email_agen' => 'required|email|unique:agens,email_agen,' . $agen->id
        ]);

        $agen->update($request->all());

        return redirect()->route('admin.agens.index')
            ->with('success', 'Agen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agen $agen)
    {
        $agen->delete();

        return redirect()->route('admin.agens.index')
            ->with('success', 'Agen berhasil dihapus.');
    }
}
