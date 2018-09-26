<?php

use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas=[
            [
                'nama'   => 'andihoerudin',
                'alamat' => 'cibinog bogor',
                'nis'    => '065115114',
                'foto'   =>'foto'
            ],
            [
                'nama'   => 'hoerudin',
                'alamat' => 'bogor',
                'nis'    => '065115115',
                'foto'   =>'foto hoerudin'
            ],
        ];
        DB::table('siswas')->insert($siswas);
    }
}
