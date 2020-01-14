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

    
    public function penjualan($mkn=null,$hrg=null)
    {
    	if(!$mkn){
    		$a = "anda membeli $mkn";
    		echo $a;
    	}
    	if($hrg){
    		if($hrg>= 15000){
    			echo "anda membeli $mkn dengan ukuran jumbo";
    		}
    		elseif($hrg < 15000 && $hrg >= 7500){
    			echo "anda membeli $mkn dengan ukuran medium";
    		}
    		elseif($hrg < 7500) {
    			echo "anda membeli $mkn dengan ukuran small";
    		}	
    	}
    		if(!$mkn){
    			return "silahkan masukan item terlebih dahulu";

    		}
    	}
    }	