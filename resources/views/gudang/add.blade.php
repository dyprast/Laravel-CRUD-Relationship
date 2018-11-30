@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">Gudang</p>
        <p class="h5">Gudang / <a href="#">tambahGudang</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('gudang_save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea style="height: 100px;" class="form-control" id="alamat" placeholder="Alamat" required name="alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kapasitas</label>
                            <input type="number" name="kapasitas" placeholder="Kapasitas" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Foto Gudang</label>
                            <input type="file" name="pic" class="form-control" required>
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