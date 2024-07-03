@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <a href="#detailsiswa" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="detailsiswa">
                <h6 class="m-0 font-weight-bold text-primary">Detail Siswa</h6>
            </a>
            <div class="collapse show" id="detailsiswa">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr><th>NISN</th><td>{{ $siswa->nisn }}</td></tr>
                                <tr><th>No KK</th><td>{{ $siswa->no_kk }}</td></tr>
                                <tr><th>NIK</th><td>{{ $siswa->nik }}</td></tr>
                                <tr><th>Nama Panggilan</th><td>{{ $siswa->nama_panggilan }}</td></tr>
                                <tr><th>Nama Peserta Didik</th><td>{{ $siswa->nama_peserta_didik }}</td></tr>
                                <tr><th>No HP</th><td>{{ $siswa->no_hp }}</td></tr>
                                <tr><th>Tempat Lahir</th><td>{{ $siswa->tempat_lahir }}</td></tr>
                                <tr><th>Tanggal Lahir</th><td>{{ $siswa->tanggal_lahir }}</td></tr>
                                <tr><th>Jenis Kelamin</th><td>{{ $siswa->jenis_kelamin }}</td></tr>
                                <tr><th>Agama</th><td>{{ $siswa->agama }}</td></tr>
                                <tr><th>Jurusan</th><td>{{ $siswa->jurusan }}</td></tr>
                                <tr><th>Alamat Tinggal</th><td>{{ $siswa->alamat_tinggal }}</td></tr>
                                <tr><th>Provinsi Tinggal</th><td>{{ $siswa->provinsi_tinggal }}</td></tr>
                                <tr><th>Kab/Kota Tinggal</th><td>{{ $siswa->kab_kota_tinggal }}</td></tr>
                                <tr><th>Kecamatan Tinggal</th><td>{{ $siswa->kecamatan_tinggal }}</td></tr>
                                <tr><th>Kelurahan Tinggal</th><td>{{ $siswa->kelurahan_tinggal }}</td></tr>
                                <tr><th>Kode POS</th><td>{{ $siswa->kode_pos }}</td></tr>
                                <tr><th>Jarak ke Sekolah</th><td>{{ $siswa->jarak_ke_sekolah }}</td></tr>
                                <tr><th>Riwayat Penyakit</th><td>{{ $siswa->riwayat_penyakit }}</td></tr>
                            </table>
                        </div>
                    </div>
                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
