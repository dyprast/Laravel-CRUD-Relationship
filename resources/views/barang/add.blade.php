@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Barang</p>
        <p class="h5">Barang / <a href="#">tambahBarang</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('barang_save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Alamat Gudang</label>
                            <select name="gudang_id" class="form-control">
                                <option value="" style="background-color: #111;"></option>
                                @foreach($gudang as $res)
                                <option value="{{ $res->id }}">{{ $res->alamat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Berat (KG)</label>
                            <input type="number" name="berat" class="form-control" required>
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