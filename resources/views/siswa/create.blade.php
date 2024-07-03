@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <a href="#createsiswa" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="createsiswa">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Siswa</h6>
            </a>
            <div class="collapse show" id="createsiswa">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" class="form-control" value="{{ old('nisn') }}">
                        </div>
                        <div class="form-group">
                            <label for="no_kk">No KK</label>
                            <input type="text" name="no_kk" class="form-control" value="{{ old('no_kk') }}">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" value="{{ old('nik') }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_panggilan">Nama Panggilan</label>
                            <input type="text" name="nama_panggilan" class="form-control" value="{{ old('nama_panggilan') }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_peserta_didik">Nama Peserta Didik</label>
                            <input type="text" name="nama_peserta_didik" class="form-control" value="{{ old('nama_peserta_didik') }}">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" class="form-control" value="{{ old('agama') }}">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan') }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_tinggal">Alamat Tinggal</label>
                            <input type="text" name="alamat_tinggal" class="form-control" value="{{ old('alamat_tinggal') }}">
                        </div>
                        <div class="form-group">
                            <label for="provinsi_tinggal">Provinsi Tinggal</label>
                            <input type="text" name="provinsi_tinggal" class="form-control" value="{{ old('provinsi_tinggal') }}">
                        </div>
                        <div class="form-group">
                            <label for="kab_kota_tinggal">Kab/Kota Tinggal</label>
                            <input type="text" name="kab_kota_tinggal" class="form-control" value="{{ old('kab_kota_tinggal') }}">
                        </div>
                        <div class="form-group">
                            <label for="kecamatan_tinggal">Kecamatan Tinggal</label>
                            <input type="text" name="kecamatan_tinggal" class="form-control" value="{{ old('kecamatan_tinggal') }}">
                        </div>
                        <div class="form-group">
                            <label for="kelurahan_tinggal">Kelurahan Tinggal</label>
                            <input type="text" name="kelurahan_tinggal" class="form-control" value="{{ old('kelurahan_tinggal') }}">
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">Kode POS</label>
                            <input type="text" name="kode_pos" class="form-control" value="{{ old('kode_pos') }}">
                        </div>
                        <div class="form-group">
                            <label for="jarak_ke_sekolah">Jarak ke Sekolah</label>
                            <input type="text" name="jarak_ke_sekolah" class="form-control" value="{{ old('jarak_ke_sekolah') }}">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_penyakit">Riwayat Penyakit</label>
                            <input type="text" name="riwayat_penyakit" class="form-control" value="{{ old('riwayat_penyakit') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
