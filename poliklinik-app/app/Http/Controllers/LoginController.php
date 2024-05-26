<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dokter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // login admin
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request){
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/');
        }

        return \redirect('login');
    }

    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return \redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return \redirect('login');
    }


    // login dokter
    public function logindokter(){
        return view('logindokter');
    }

    public function logindokterproses(Request $request){
        if(Auth::attempt($request->only('name','password'))){
            return redirect ('/dokterpage');
        }

        return \redirect('logindokter');
    }

    public function registerdokter(){
        return view('registerdokter');
    }

    public function registerdokters(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return \redirect('/logindokter');
    }











    // public function registerdokters(Request $request){
    //     // dd($request->all());
    //     Dokter::create([
    //         'id_poli' => $request->id_poli,
    //         'nama' => $request->nama,
    //         'alamat' => bcrypt($request->alamat),
    //         'no_hp' => $request->no_hp,
    //         // 'remember_token' => Str::random(50);
    //     ]);

    //     return \redirect('/logindokter');
    // }
}