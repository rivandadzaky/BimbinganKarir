<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function dokter(){
        $data = Dokter::all();
        //dd($data);
        return view('dokter',compact('data'));
    }

    public function insertdokter(Request $request){
        Dokter::create($request->all());
        return redirect()->route('dokter');
    }

    public function tampildokter($id){
        $data = Dokter::find($id);

        return view('tampildokter',compact('data'));
    }

    public function editdokter(Request $request, $id){
        $data= Dokter::find($id);
        $data->update($request->all());

        return redirect()->route('dokter');
    }

    public function hapusdokter($id){
        $data = Dokter::find($id);
        $data->delete();

        return redirect()->route('dokter');
    }

}