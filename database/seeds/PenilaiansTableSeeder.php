<?php

use Illuminate\Database\Seeder;

class PenilaiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penilaians=[
            [
                'id_siswa'       => '1',
                'id_pelanggaran' => '2',
                'keterangan'     =>'keteraluan',
            ],
            [
                'id_siswa'       => '2',
                'id_pelanggaran' => '2',
                'keterangan'     => 'sangat nakal',
            ]
        ];
        DB::table('penilaians')->insert($penilaians);
    }
}
