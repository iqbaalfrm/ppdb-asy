@extends('layouts.app')
@section('title', 'Data Siswa')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <a href="#listsiswa" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="listsiswa">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            </a>
            <div class="collapse show" id="listsiswa">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="DataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Data Siswa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                <tr>
                                    <td>1</td>
                                    <td>NISN</td>
                                    <td>{{ $siswa->nisn }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>No KK</td>
                                    <td>{{ $siswa->no_kk }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>NIK</td>
                                    <td>{{ $siswa->nik }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Nama Panggilan</td>
                                    <td>{{ $siswa->nama_panggilan }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Nama Peserta Didik</td>
                                    <td>{{ $siswa->nama_peserta_didik }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>No HP</td>
                                    <td>{{ $siswa->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Tempat Lahir</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Tanggal Lahir</td>
                                    <td>{{ $siswa->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Agama</td>
                                    <td>{{ $siswa->agama }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Jurusan</td>
                                    <td>{{ $siswa->jurusan }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Alamat Tinggal</td>
                                    <td>{{ $siswa->alamat_tinggal }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Provinsi Tinggal</td>
                                    <td>{{ $siswa->provinsi_tinggal }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Kab/Kota Tinggal</td>
                                    <td>{{ $siswa->kab_kota_tinggal }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Kecamatan Tinggal</td>
                                    <td>{{ $siswa->kecamatan_tinggal }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Kelurahan Tinggal</td>
                                    <td>{{ $siswa->kelurahan_tinggal }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Kode POS</td>
                                    <td>{{ $siswa->kode_pos }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Jarak ke Sekolah</td>
                                    <td>{{ $siswa->jarak_ke_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Riwayat Penyakit</td>
                                    <td>{{ $siswa->riwayat_penyakit }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
