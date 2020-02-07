<?php

use Illuminate\Database\Seeder;
Use App\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(LatihansTableSeeder::class); 

        // $this->call(CrudSeeder::class); 
        factory(Barang::class,100)->create();
    }
}

