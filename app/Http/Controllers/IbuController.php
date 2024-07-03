<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibu;

class IbuController extends Controller
{
    public function index()
    {
        $ibus = Ibu::all();
        return view('ibu.index', compact('ibu'));
    }

    public function create()
    {
        return view('ortu.create-ibu');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ibu' => 'required',
            'status_ibu' => 'required',
            'tgl_lahir_ibu' => 'required|date',
            'telepon_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat_ibu' => 'required',
        ]);

        Ibu::create($request->all());

        return redirect()->route('ibu.index')
            ->with('success', 'Data Ibu berhasil ditambahkan.');
    }

    public function show($id)
    {
        $ibu = Ibu::findOrFail($id);
        return view('ibu.show', compact('ibu'));
    }

    public function edit($id)
    {
        $ibu = Ibu::findOrFail($id);
        return view('ibu.edit', compact('ibu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ibu' => 'required',
            'status_ibu' => 'required',
            'tgl_lahir_ibu' => 'required|date',
            'telepon_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat_ibu' => 'required',
        ]);

        $ibu = Ibu::findOrFail($id);
        $ibu->update($request->all());

        return redirect()->route('ibu.index')
            ->with('success', 'Data Ibu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $ibu = Ibu::findOrFail($id);
        $ibu->delete();

        return redirect()->route('ibu.index')
            ->with('success', 'Data Ibu berhasil dihapus.');
    }
}
