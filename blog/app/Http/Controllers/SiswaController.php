<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){

    	$siswa = DB::table('siswa')->get();
    	return view('index',['siswa'=>$siswa]);

    }

    public function tambah(){
    	return view('tambah');
    }

    public function store(Request $simpan){
    	DB::table('siswa')->insert([
    		'nama_siswa'=>$simpan->nama,
    		'alamat_siswa'=>$simpan->alamat,
    		'agama_siswa'=>$simpan->agama]);

    	return redirect('/siswa');
    }

    public function edit($id){
    	$siswa = DB::table('siswa')->where('id_siswa',$id)->get();
    	return view('edit',['siswa' =>$siswa]);
    }

    public function datbar(Request $datbar){
    	DB::table('siswa')->where('id_siswa',$datbar->id)->update([
    		'nama_siswa'=>$datbar->nama,
    		'alamat_siswa'=>$datbar->alamat,
    		'agama_siswa'=>$datbar->agama
    		]);
    	
		return redirect('/siswa');
    }

    public function hapus($id){
    	DB::table('siswa')->where('id_siswa',$id)->delete();
    		

    	return redirect('/siswa');
    }
}
