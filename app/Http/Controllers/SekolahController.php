<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function hallo()
    {
    	return "Hallo dunia";
    }
    public function negara()
    {
    	return "selamat datang di negara saya";
    }
    public function kucing()
    {
    	return "ini hewan kesayangan saya";
    }
    public function sekolah()
    {
    	return "ini tempat sekolah saya";
    }
    public function wortel()
    {
    	return "ini sayur kesukaan saya";
    }
    public function buku()
    {
    	return "ini buku yang sering saya baca";
    }

    public function jeniskucing($warna= null)
    {
    	if (!$warna){
    	// return "warna kucing kamu : " . $warna;
    	return "warna belum di pilih";
    }else{
    	return "warna kucing kamu : ". $warna;

    }

    }

    public function penjualan($beli=null)
    {
    	if (!$beli){
    		return "silahkan masukan item terlebih dahulu";
    	}else{
    		return "anda membeli :".$beli;
    	}

    }
}
