@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Gudang</p>
        <p class="h5">Gudang / <a href="siswa">home</a></p>
    </div>
    <div>
        <a href="gudang/tambahGudang" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">No</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kapasitas (Box)</th>
                        <th scope="col">Foto Gudang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gudang as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->alamat }}</td>
                        <td>{{ $res->kapasitas }}</td>
                        <td><img src="{{ asset('gudangs_img/'.$res->pic) }}" class="img-table"></td>
                        <td class="action-table">
                            <a href="{{ url('gudang/editGudang/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('gudang/hapusGudang/'.$res->id) }}" onclick="return confirm('Konfirmasi hapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
