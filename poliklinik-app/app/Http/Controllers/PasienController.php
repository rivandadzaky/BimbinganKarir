<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function pasien(){
        $data = Pasien::all();
        // dd($data);
        return view('pasien',compact('data'));
    }

    public function insertpasien(Request $request){
        Pasien::create($request->all());
        return redirect()->route('pasien');
    }

    public function tampilpasien($id){
        $data = Pasien::find($id);

        return view('tampilPasien',compact('data'));
    }

    public function editpasien(Request $request, $id){
        $data= Pasien::find($id);
        $data->update($request->all());

        return redirect()->route('pasien');        
    }

    public function hapuspasien($id){
        $data = Pasien::find($id);
        $data->delete();

        return redirect()->route('pasien');
    }

}