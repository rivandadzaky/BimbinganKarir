<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function obat(){
        $data = Obat::all();
        // dd($data);
        return view('obat',compact('data'));
    }

    public function insertobat(Request $request){
        Obat::create($request->all());
        return redirect()->route('obat');
    }

    public function tampilobat($id){
        $data = Obat::find($id);

        return view('tampilobat',compact('data'));
    }

    public function editobat(Request $request, $id){
        $data= Obat::find($id);
        $data->update($request->all());

        return redirect()->route('obat');        
    }

    public function hapusobat($id){
        $data = Obat::find($id);
        $data->delete();

        return redirect()->route('obat');
    }

}