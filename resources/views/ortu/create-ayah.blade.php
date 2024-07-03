@extends('layouts.app')
@section('title', 'Tambah Data Ayah')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <a href="#createsiswa" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="createsiswa">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Ayah</h6>
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
                    <form action="{{ route('ayah.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah">
                </div>
                <div class="form-group">
                    <label for="status_ayah">Status Ayah</label>
                    <input type="text" class="form-control" id="status_ayah" name="status_ayah" placeholder="Masukkan Status Ayah">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir_ayah">Tanggal Lahir Ayah</label>
                    <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah">
                </div>
                <div class="form-group">
                    <label for="telepon_ayah">Telepon Ayah</label>
                    <input type="text" class="form-control" id="telepon_ayah" name="telepon_ayah" placeholder="Masukkan Telepon Ayah">
                </div>
                <div class="form-group">
                    <label for="pendidikan_ayah">Pendidikan Terakhir Ayah</label>
                    <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" placeholder="Masukkan Pendidikan Terakhir Ayah">
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
                </div>
                <div class="form-group">
                    <label for="penghasilan_ayah">Penghasilan Ayah</label>
                    <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Masukkan Penghasilan Ayah">
                </div>
                <div class="form-group">
                    <label for="alamat_ayah">Alamat Ayah</label>
                    <textarea class="form-control" id="alamat_ayah" name="alamat_ayah" rows="3" placeholder="Masukkan Alamat Ayah"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data Ayah</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop



































