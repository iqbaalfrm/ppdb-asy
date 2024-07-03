<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all(); 
        return view('siswa.index', ['siswas' => $siswas]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'no_kk' => 'required',
            'nik' => 'required',
            'nama_panggilan' => 'required',
            'nama_peserta_didik' => 'required',
            'no_hp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'jurusan' => 'required',
            'alamat_tinggal' => 'required',
            'provinsi_tinggal' => 'required',
            'kab_kota_tinggal' => 'required',
            'kecamatan_tinggal' => 'required',
            'kelurahan_tinggal' => 'required',
            'kode_pos' => 'required',
            'jarak_ke_sekolah' => 'required',
            'riwayat_penyakit' => 'nullable',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('msg', 'Siswa berhasil ditambahkan');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nisn' => 'required',
            'no_kk' => 'required',
            'nik' => 'required',
            'nama_panggilan' => 'required',
            'nama_peserta_didik' => 'required',
            'no_hp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'jurusan' => 'required',
            'alamat_tinggal' => 'required',
            'provinsi_tinggal' => 'required',
            'kab_kota_tinggal' => 'required',
            'kecamatan_tinggal' => 'required',
            'kelurahan_tinggal' => 'required',
            'kode_pos' => 'required',
            'jarak_ke_sekolah' => 'required',
            'riwayat_penyakit' => 'nullable',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('msg', 'Siswa berhasil diperbarui');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('msg', 'Siswa berhasil dihapus');
    }

    public function cetakSurat($id)
{
    $siswa = Siswa::find($id);
    if (!$siswa) {
        abort(404);
    }

    $data = [
        'siswa' => $siswa,
    ];

    $pdf = new Dompdf();
    $pdf->loadHtml(view('siswa.cetak_surat', $data)); // Sesuaikan dengan nama view PDF Anda
    $pdf->setPaper('A4', 'portrait');

    $pdf->render();

    return $pdf->stream('surat-pendaftaran.pdf'); // Nama file PDF yang dihasilkan
}
}
