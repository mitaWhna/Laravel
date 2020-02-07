<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
    	$a = "Aku Cinta Bandung";
    	return view('latihan',compact('a'));
    }

    public function pass1()
    {
    	$data = [
    		['nama' => 'Ucup','kelas' => 'RPL 2'],
    		['nama' => 'Icip','kelas' => 'RPL1'],
    		['nama' => 'Ecep','kelas' => 'RPL3'],
    	];
    	return view('latihan1', ['siswa' => $data]);
    }

    public function gaji()
    {
    	$data = [
    		['nama' => 'Mita','nip' => '1234','agama'=>'islam','jk' => 'perempuan','jabatan'=>'Manager',
    		'jam_kerja' => '100'],
    		['nama' => 'Siva','nip' => '1234','agama'=>'islam','jk' => 'perempuan','jabatan'=>'sekretaris',
    		'jam_kerja' => '180'],

    		];
    		return view('gaji',compact('data'));
    }
}

