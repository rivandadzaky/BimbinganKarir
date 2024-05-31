<?php

namespace App\Http\Controllers;

use App\Models\periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function periksapasien(){
        $data = periksa::all();
        return view('periksapasien',compact('data'));
    }
}
