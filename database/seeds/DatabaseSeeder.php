<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(SiswasTableSeeder::class);
         $this->call(PelanggaransTableSeeder::class);
         $this->call(PenilaiansTableSeeder::class);
    }
}
