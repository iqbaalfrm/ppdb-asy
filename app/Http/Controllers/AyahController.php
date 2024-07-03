<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayah;

class AyahController extends Controller
{
    public function index()
    {
        $ayahs = Ayah::all();
        return view('ayah.index', compact('ayah'));
    }

    public function create()
    {
        return view('ortu.create-ayah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ayah' => 'required',
            'status_ayah' => 'required',
            'tgl_lahir_ayah' => 'required|date',
            'telepon_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'alamat_ayah' => 'required',
        ]);

        Ayah::create($request->all());

        return redirect()->route('ayah.index')
            ->with('success', 'Data Ayah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $ayah = Ayah::findOrFail($id);
        return view('ayah.show', compact('ayah'));
    }

    public function edit($id)
    {
        $ayah = Ayah::findOrFail($id);
        return view('ayah.edit', compact('ayah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ayah' => 'required',
            'status_ayah' => 'required',
            'tgl_lahir_ayah' => 'required|date',
            'telepon_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'alamat_ayah' => 'required',
        ]);

        $ayah = Ayah::findOrFail($id);
        $ayah->update($request->all());

        return redirect()->route('ayah.index')
            ->with('success', 'Data Ayah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $ayah = Ayah::findOrFail($id);
        $ayah->delete();

        return redirect()->route('ayah.index')
            ->with('success', 'Data Ayah berhasil dihapus.');
    }
}
