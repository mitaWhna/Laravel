<?php

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

//route Basic
Route::get('/about',function(){
	return '<h1>Halo</h1>'.
	       'Selamat datang di webapp saya<br>'.
	       'Laravel, emang keren.';
});

// Route::get('profil',function()
// {
// 	return view('biodata');
// });

// Route::get('menu',function()
// {
// 	return view('makanan');
// });

// Route::get('sekolah',function()
// {
// 	return view('profil');
// });

// Route::get('barang',function()
// {
// 	return view('baju');
// });

// Route::get('perpustakaan',function()
// {
// 	return view('buku');
// });

// Route Parameter

// Route::get('pesan/{makan}',function($mkn){
// 	return 'makanan Yang saya pesan adalah <br>'.$mkn.'</b>';
// });

Route::get('pesan/{makan}/{minum}/{harga}',function($mkn,$mnm,$hrg){
	return 'makanan Yang saya pesan adalah '.$mkn
	       .'<br>minuman yang saya pesan adalah '.$mnm
	       .'<br>Total Harganya adalah '.$hrg;
});


