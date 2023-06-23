<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //memanggil form
    function index()
    {
        return view('pages.auth.register');
    }
    
    //memproses registrasi pengguna
    function register(Request $request)
    {
        //validasi data
        $validateUser = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'contact'=>'required',
            'password'=>'required'
        ]);
        //proses registrasi
        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->contact = $request->contact;
        $userData->password = bcrypt($request->password);
        $userData->save();
        //redirect
        return redirect()->to('/login')->with('sukses', 'registrasi berhasil');
    }
}