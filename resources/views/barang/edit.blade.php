@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Barang</p>
        <p class="h5">Barang / <a href="#">editBarang</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('barang/updateBarang/'.$barang->id) }}">
                        @csrf
                        <div class="form-group">
                            <label>Alamat Gudang</label>
                            <select name="gudang_id" class="form-control">
                                <option value="{{ $barang->gudang->id }}" style="background-color: #111;color: #fff;">{{ $barang->gudang->alamat }}</option>
                                @foreach($gudang as $res)
                                <option value="{{ $res->id }}">{{ $res->alamat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{ $barang->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Berat (KG)</label>
                            <input type="number" name="berat" class="form-control" required value="{{ $barang->berat }}">
                        </div>
                        <div class="action-form">
                            <button type="submit" class="btn btn-primary borderrad">Simpan</button>
                        </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection