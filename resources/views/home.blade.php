@extends('layouts.app')

@section('content')
<div class="indicators">
    <p class="h1">Dashboard</p>
    <p class="h5">Dashboard</p>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-4">
            <a href="{{ url('gudang') }}" style="text-decoration: none;"><div class="card-dashboard">
                <i class="fas fa-warehouse"></i>
                <p class="h3">Gudang</p>
            </div></a>
        </div>
        <div class="col-md-8">
            <a href="{{ url('barang') }}" style="text-decoration: none;"><div class="card-dashboard">
                <i class="fas fa-shopping-cart"></i>
                <p class="h3">Barang</p>
            </div></a>
        </div>
    </div>
    <div class="copyright-dashboard">
        <p>Copyright © 2018, RPL SMKN 10 Jakarta</p>
    </div>
</div>
@endsection
