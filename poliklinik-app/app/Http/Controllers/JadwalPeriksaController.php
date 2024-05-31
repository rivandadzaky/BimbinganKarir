<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal_periksa;

class JadwalPeriksaController extends Controller
{
    public function jadwalperiksa(){
        $data = jadwal_periksa::all();
        //dd($data);
        return view('jadwalperiksa',compact('data'));
    }

    public function tambahjadwalperiksa(){
        return view('tambahjadwal');
    }

    public function tampiljadwal(){
        return view('tampiljadwal');
    }

    // public function insertjadwal(Request $request){
    //     jadwal_periksa::create($request->all());
    //     return redirect()->route('jadwalperiksa');
    // }
}