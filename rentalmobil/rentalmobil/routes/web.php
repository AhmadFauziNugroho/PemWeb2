<?php

namespace App\http\Controllers;

use App\Http\Controllers\MerkController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\TipeMobilController;
use App\Models\Merk;
use App\Models\TipeMobil;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/welcome', function () {
    echo "Selamat Datang di Laravel";
});

route::get('/greeting', function () {
    return view('greeting');
});

route::get('/mobil', [MobilController::class, 'index']);
route::get('/mobil/create', [MobilController::class, 'create']);
route::post('/mobil/simpanData', [MobilController::class, 'store']);

route::get('/merk', [MerkController::class, 'index']);
route::get('/merk/create', [MerkController::class, 'create']);
route::post('/merk/simpan-data', [MerkController::class, 'store']);
route::get('/merk/edit/{id}', [MerkController::class, 'edit']);
route::post('/merk/update/{id}', [MerkController::class, 'update']);
route::get('/merk/delete/{id}', [MerkController::class, 'delete']);

route::get('/tipemobil', [TipeMobilController::class, 'index']);
route::get('/tipemobil/create', [TipeMobilController::class, 'create']);
route::post('/tipemobil/simpan-data',[TipeMobilController::class, 'store']);
route::get('/tipemobil/edit/{id}',[TipeMobilController::class, 'edit']);
route::post('/tipemobil/update/{id}', [TipeMobilController::class, 'update']);
route::get('/tipemobil/delete/{id}',[TipeMobilController::class, 'delete']);