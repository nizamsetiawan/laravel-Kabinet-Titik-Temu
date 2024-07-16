<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaPengalamanOrganisasisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('anggota_pengalaman_organisasis')->delete();

        \DB::table('anggota_pengalaman_organisasis')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nama' => 'Palang Merah Remaja',
                'dari' => '2017',
                'sampai' => '2018',
                'jabatan' => 'Anggota',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),

        ));


    }
}
