<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    protected $arrayMobil =[
        [
            'namaMobil'=>'Drey',
            'merkMobil'=>'Fuss',
            'cc'=>'300',
        ],
    ];
    function index()
    {
        $dataMobil = session()->get('dataMobilBaru') 
            ?? $this->arrayMobil;
        return view('mobil.index', compact('dataMobil'));
    }
    function create()
    {
        return view('mobil.form');
    }
    function store(Request $request)
    {
        $namaMobil = $request->nama_mobil;
        $merkMobil = $request->merk_mobil;
        $cc = $request->cc;

        $dataMobilBaru = [
            'namaMobil'=>$namaMobil,
            'merkMobil'=>$merkMobil,
            'cc'=>$cc,
        ];

        array_push($this->arrayMobil, $dataMobilBaru);
        return redirect()->to('/mobil')->with('dataMobilBaru', $this->arrayMobil);
    }
}
