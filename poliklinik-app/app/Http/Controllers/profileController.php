<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class ProfileController extends Controller
{
    public function profile(){
        $data = Dokter::all();
        // dd($data);
        return view('profile',compact('data'));
    }

    public function editprofil(Request $request, $id){
        $data= Dokter::find($id);
        $data->update($request->all());

        return redirect()->route('profile');        
    }
}