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

Route::get('profil',function()
{
	return view('biodata');
});

Route::get('menu',function()
{
	return view('makanan');
});

Route::get('sekolah',function()
{
	return view('profil');
});

Route::get('barang',function()
{
	return view('baju');
});

Route::get('perpustakaan',function()
{
	return view('buku');
});

//Route Parameter

// Route::get('pesan/{makan}',function($mkn){
// 	return 'makanan Yang saya pesan adalah <br>'.$mkn.'</b>';
// });

// Route opsional paramter
Route::get('halo/{nama?}',function($nama='Nurhadi'){
	return 'halo nama saya adalah '.$nama;
});

Route::get('pesan/{a?}/{b?}/{c?}',function($mkn=null,$minum=null,$harga=null){
	if(isset($mkn)){
		$mkn = "Anda Memesan $mkn";
		echo $mkn;
	}
	if(isset($minum)){
		$minum = " & $minum";
		echo $minum;
	}
	if(isset($harga)){
		$harga = " dengan harga $harga";
		echo $harga;
	}
	if(!$mkn && !$minum && !$harga){
		return " Anda Belum Memesan Sesuatu";
	}

});


Route::get('/testmodel',function(){
	$query = App\Post::all();
	return $query;
});

// mencari semua model
Route::get('/testmodel1',function(){
	$query = App\Post::all();
	return $query;
});

// mencari model berdasarkan id
Route::get('/testmodel2',function(){
	$query = App\Post::find(1);
	return $query;
});

// mencari model berdasrkan title
Route::get('/testmodel3',function(){
	$query = App\Post::where('title','like','%cepet nikah%')->get();
	return $query;
});

// mengubah record, (hapus semua isi function)
Route::get('/testmodel4',function(){
$post = App\Post::find(1);
$post ->title = "Ciri Keluarga Sakinah";
$post->save();
return $post;	
});

// menghapus record, (hapus semua isi function)
Route::get('/testmodel5',function(){
	$post = App\Post::find(1);
	$post->delete();
});

// menambah record (hapus semua isi function)
Route::get('/testmodel6',function(){
	$post = new App\Post;
	$post->title= "7 Amalan Pembuka Jodoh";
	$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
	$post->save();
	return $post;
});

Route::get('/latihan',function(){
	$query = App\Latihan::all();
	return $query;
});