@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{ route('mahasiswa-create') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Jenis Kelamin</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                                $no =1;
                            @endphp

                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$mhs->npm}}</td>
                                <td>{{$mhs->user->name}}</td>
                                <td>{{$mhs->tempat_lahir.', '.$mhs->tgl_lahir}}</td>
                                <td>{{$mhs->jenis_kelamin == 'L'? 'Laki-laki' : 'Perempuan'}}</td>
                                <td>{{$mhs->telepon}}</td>
                                <td>{{$mhs->alamat}}</td>
                                <td>
                                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('mahasiswa.delete', $mhs->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
