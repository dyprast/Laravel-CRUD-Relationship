@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Barang</p>
        <p class="h5">Barang / <a href="siswa">home</a></p>
    </div>
    <div>
        <a href="barang/tambahBarang" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Berat (KG)</th>
                        <th scope="col">Alamat Gudang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->nama }}</td>
                        <td>{{ $res->berat }}</td>
                        <td>{{ $res->gudang->alamat }}</td>
                        <td class="action-table">
                            <a href="{{ url('barang/editBarang/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('barang/hapusBarang/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
