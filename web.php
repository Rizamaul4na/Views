<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/hello', function () {
    return'Helllo World';
}); */

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/mahasiswa', function () {
    return view('universitas.mahasiswa');
});


Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["mahasiswa01" => "Riza Maulana",
    "mahasiswa02" => "Danela Oktaviani",
    "mahasiswa03" => "Wila Azzahra",
    "mahasiswa04" => "Agris Rizal",
];
return view('universitas.mahasiswa', $arrMahasiswa);
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Riza Maualana","Danela Oktaviani","Wila Azzahra","Agris Rizal"];
    return view('universitas.mahasiswa',['mahasiswa' => $arrMahasiswa]);
});

/* Route::get('/personal', function () {
    return view('personal.blade');
}); */
