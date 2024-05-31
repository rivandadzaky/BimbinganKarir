<?php

namespace App\Http\Controllers;

use App\Models\Daftar_Poli;
use Illuminate\Http\Request;

class DaftarPoliController extends Controller
{
    public function daftarpoli(){
        $data = Daftar_Poli::all();
        //dd($data);
        return view('daftarpoli',compact('data'));
    }
}