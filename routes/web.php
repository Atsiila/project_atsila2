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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $nama = "Atsiila";
    $jenis_k = "Laki-laki";
    $p_terakhir = "SMK";
    $pekerjaan = "Programing";
    $alamat = "sukamenak";

    return view('data_diri', compact('nama','jenis_k','p_terakhir','pekerjaan','alamat'));
});

// menggunakan Variabel
Route::get('/bio', function () {

    $a = "Atsiila Khairil Djakwan";
    $b = "30 september 2005";
    $c = "Kab.Bandung, kec.sukamenak";
    $d = "Programing";
    $e = "Gamers";
    $f = "08*******";
    $g = "Islam";
    $h = "Smk";

    return view('bio', compact('a','b','c','d','e','f','g','h'));
});

// Menggunakan Parameter
Route::get('/about2/{nama}/{jk}/{pk}/{pekerja}/{almt}', function (Request $request, $nama, $jk, $pk, $pekerja, $almt) {
    $nama2 = $nama;
    $jk2 = $jk;
    $pendidikan = $pk;
    $p = $pekerja;
    $alamat = $almt;


    return view('biodata2', compact('nama2','jk2','pendidikan','p','alamat'));
});