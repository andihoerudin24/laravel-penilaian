<?php

use Illuminate\Database\Seeder;

class PelanggaransTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggarans=[
            [
                'nama'=>'PARAH',
                'bobot'=>'30',
            ],
            [
                'nama'=>'SEDANG',
                'bobot'=>'50',
            ],
            [
                'nama'=>'BIASA',
                'bobot'=>'10',
            ]
        ];
        DB::table('pelanggarans')->insert($pelanggarans);
    }
}
