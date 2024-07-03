@extends('layouts.app')

@section('title', 'Tambah Data Ibu')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <a href="#createibu" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="createibu">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Ibu</h6>
            </a>
            <div class="collapse show" id="createibu">
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
                    <form action="{{ route('ibu.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label for="status_ibu">Status Ibu</label>
                            <input type="text" class="form-control" id="status_ibu" name="status_ibu" placeholder="Masukkan Status Ibu">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir_ibu">Tanggal Lahir Ibu</label>
                            <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu">
                        </div>
                        <div class="form-group">
                            <label for="telepon_ibu">Telepon Ibu</label>
                            <input type="text" class="form-control" id="telepon_ibu" name="telepon_ibu" placeholder="Masukkan Telepon Ibu">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_ibu">Pendidikan Terakhir Ibu</label>
                            <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" placeholder="Masukkan Pendidikan Terakhir Ibu">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
                        </div>
                        <div class="form-group">
                            <label for="penghasilan_ibu">Penghasilan Ibu</label>
                            <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Masukkan Penghasilan Ibu">
                        </div>
                        <div class="form-group">
                            <label for="alamat_ibu">Alamat Ibu</label>
                            <textarea class="form-control" id="alamat_ibu" name="alamat_ibu" rows="3" placeholder="Masukkan Alamat Ibu"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Data Ibu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
