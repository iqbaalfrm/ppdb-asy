@extends('layouts.app')

@section('title', 'Tambah Data Wali')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <a href="#createwali" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="createwali">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Wali</h6>
            </a>
            <div class="collapse show" id="createwali">
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
                    <form action="{{ route('wali.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_wali">Nama Wali</label>
                            <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Masukkan Nama Wali">
                        </div>
                        <div class="form-group">
                            <label for="status_wali">Status Wali</label>
                            <input type="text" class="form-control" id="status_wali" name="status_wali" placeholder="Masukkan Status Wali">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir_wali">Tanggal Lahir Wali</label>
                            <input type="date" class="form-control" id="tgl_lahir_wali" name="tgl_lahir_wali">
                        </div>
                        <div class="form-group">
                            <label for="telepon_wali">Telepon Wali</label>
                            <input type="text" class="form-control" id="telepon_wali" name="telepon_wali" placeholder="Masukkan Telepon Wali">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_wali">Pendidikan Terakhir Wali</label>
                            <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" placeholder="Masukkan Pendidikan Terakhir Wali">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                            <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali">
                        </div>
                        <div class="form-group">
                            <label for="penghasilan_wali">Penghasilan Wali</label>
                            <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Masukkan Penghasilan Wali">
                        </div>
                        <div class="form-group">
                            <label for="alamat_wali">Alamat Wali</label>
                            <textarea class="form-control" id="alamat_wali" name="alamat_wali" rows="3" placeholder="Masukkan Alamat Wali"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Data Wali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
