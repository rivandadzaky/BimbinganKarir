<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function poli(){
        $data = Poli::all();
        // dd($data);
        return view('poli',compact('data'));
    }

    public function insertpoli(Request $request){
        Poli::create($request->all());
        return redirect()->route('poli');
    }

    public function tampilpoli($id){
        $data = Poli::find($id);

        return view('tampilpoli',compact('data'));
    }

    public function editpoli(Request $request, $id){
        $data= Poli::find($id);
        $data->update($request->all());

        return redirect()->route('poli');        
    }

    public function hapuspoli($id){
        $data = Poli::find($id);
        $data->delete();

        return redirect()->route('poli');
    }
}