<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Gudang;

class BarangController extends Controller
{
    public function index(){
    	$data['barang'] = Barang::all();
    	return view('barang.index')->with($data);
    }
    public function add(){
    	$data['gudang'] = Gudang::all();
    	return view('barang.add')->with($data);
    }
    public function save(Request $r){
    	$barang = new Barang;
    	$barang->gudang_id = $r->input('gudang_id');
    	$barang->nama = $r->input('nama');
    	$barang->berat = $r->input('berat');

    	$barang->save();
    	return redirect()->route('barang_home');
    }
    public function edit($id){
    	$data['barang'] = Barang::find($id);
    	$data['gudang'] = Gudang::all();
    	return view('barang.edit')->with($data);
    }
    public function update(Request $r, $id){
    	$barang = Barang::find($id);
    	$barang->gudang_id = $r->input('gudang_id');
    	$barang->nama = $r->input('nama');
    	$barang->berat = $r->input('berat');

    	$barang->save();
    	return redirect()->route('barang_home');
    }
    public function delete($id){
    	Barang::find($id)->delete();
    	return redirect()->route('barang_home');
    }
}
