@extends('layouts.app')

@section('title', 'Data Orang Tua')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <a href="#listayah" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="listayah">
                <h6 class="m-0 font-weight-bold text-primary">Data Ayah</h6>
            </a>
            <div class="collapse show" id="listayah">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('ayah.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Data Ayah</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nama Ayah</td>
                                    <td>{{ $ayah->nama_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Status Ayah</td>
                                    <td>{{ $ayah->status_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanggal Lahir Ayah</td>
                                    <td>{{ $ayah->tgl_lahir_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Telepon Ayah</td>
                                    <td>{{ $ayah->telepon_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pendidikan Terakhir Ayah</td>
                                    <td>{{ $ayah->pendidikan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Pekerjaan Ayah</td>
                                    <td>{{ $ayah->pekerjaan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Penghasilan Ayah</td>
                                    <td>{{ $ayah->penghasilan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Alamat Ayah</td>
                                    <td>{{ $ayah->alamat_ayah }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <a href="#listibu" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="listibu">
                <h6 class="m-0 font-weight-bold text-primary">Data Ibu</h6>
            </a>
            <div class="collapse show" id="listibu">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('ibu.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Data Ibu</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nama Ibu</td>
                                    <td>{{ $ibu->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Status Ibu</td>
                                    <td>{{ $ibu->status_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanggal Lahir Ibu</td>
                                    <td>{{ $ibu->tgl_lahir_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Telepon Ibu</td>
                                    <td>{{ $ibu->telepon_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pendidikan Terakhir Ibu</td>
                                    <td>{{ $ibu->pendidikan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Pekerjaan Ibu</td>
                                    <td>{{ $ibu->pekerjaan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Penghasilan Ibu</td>
                                    <td>{{ $ibu->penghasilan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Alamat Ibu</td>
                                    <td>{{ $ibu->alamat_ibu }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <a href="#listwali" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="listwali">
                <h6 class="m-0 font-weight-bold text-primary">Data Wali</h6>
                <small>Harap Diisi Bila Ada Wali!</small>
            </a>
            <div class="collapse show" id="listwali">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('wali.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Data Wali</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nama Wali</td>
                                    <td>{{ $wali->nama_wali }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Status Wali</td>
                                    <td>{{ $wali->status_wali }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanggal Lahir Wali</td>
                                    <td>{{ $wali->tgl_lahir_wali }}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Telepon Wali</td>
                                    <td>{{ $wali->telepon_wali }}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pendidikan Terakhir Wali</td>
                                    <td>{{ $wali->pendidikan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Pekerjaan Wali</td>
                                    <td>{{ $wali->pekerjaan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Penghasilan Wali</td>
                                    <td>{{ $wali->penghasilan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Alamat Wali</td>
                                    <td>{{ $wali->alamat_wali }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
