<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wali;

class WaliController extends Controller
{
    public function index()
    {
        $walis = Wali::all();
        return view('wali.index', compact('wali'));
    }

    public function create()
    {
        return view('ortu.create-wali');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wali' => 'required',
            'status_wali' => 'required',
            'tgl_lahir_wali' => 'required|date',
            'telepon_wali' => 'required',
            'pendidikan_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'penghasilan_wali' => 'required',
            'alamat_wali' => 'required',
        ]);

        Wali::create($request->all());

        return redirect()->route('wali.index')
            ->with('success', 'Data Wali berhasil ditambahkan.');
    }

    public function show($id)
    {
        $wali = Wali::findOrFail($id);
        return view('wali.show', compact('wali'));
    }

    public function edit($id)
    {
        $wali = Wali::findOrFail($id);
        return view('wali.edit', compact('wali'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_wali' => 'required',
            'status_wali' => 'required',
            'tgl_lahir_wali' => 'required|date',
            'telepon_wali' => 'required',
            'pendidikan_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'penghasilan_wali' => 'required',
            'alamat_wali' => 'required',
        ]);

        $wali = Wali::findOrFail($id);
        $wali->update($request->all());

        return redirect()->route('wali.index')
            ->with('success', 'Data Wali berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $wali = Wali::findOrFail($id);
        $wali->delete();

        return redirect()->route('wali.index')
            ->with('success', 'Data Wali berhasil dihapus.');
    }
}
