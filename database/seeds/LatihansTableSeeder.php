<?php

use Illuminate\Database\Seeder;

class LatihansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = [
        	['nama'=>'mita', 'jabatan'=>'manager','jk'=>'perempuan',
             'alamat'=>'cianjur','agama'=>'islam','total_gaji'=>'5.000.000'],
            ['nama'=>'natan','jabatan'=>'administrasi','jk'=>'perempuan',
             'alamat'=>'rancamanyar','agama'=>'islam','total_gaji'=>'5.000.000'],
            ['nama'=>'siva','jabatan'=>'staf','jk'=>'perempuan',
             'alamat'=>'parunghalang','agama'=>'islam','total_gaji'=>'5.000.000'],
            ['nama'=>'rena','jabatan'=>'OB','jk'=>'perempuan',
             'alamat'=>'cianjur','agama'=>'islam','total_gaji'=>'5.000.000'],
            ['nama'=>'abin','jabatan'=>'bendahara','jk'=>'perempuan',
             'alamat'=>'cianjur','agama'=>'islam','total_gaji'=>'5.000.000']

        ];


        DB::table('latihans')->insert($a);
    }
}
