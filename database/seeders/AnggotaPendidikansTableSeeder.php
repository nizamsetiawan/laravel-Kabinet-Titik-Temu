<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaPendidikansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('anggota_pendidikans')->delete();

        \DB::table('anggota_pendidikans')->insert(array (
            0 =>
            array (
                'id' => '1',
                'jenis_id' => '2',
                'anggota_id' => '1',
                'dari' => '2007',
                'sampai' => '2013',
                'instansi' => 'SD Negeri 1 Tipar',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
        ));


    }
}
