<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendSensusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('pend_sensus')->delete();

        \DB::table('pend_sensus')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nama' => 'Isep Lutpi Nur',
                'angkatan' => '2019',
                'email' => 'iseplutpinur7@gmail.com',
                'whatsapp' => '085798132505',
                'telepon' => '085798132505',
                'keterangan' => NULL,
                'status' => '1',
                'created_at' => '2022-05-06 20:24:03',
                'updated_at' => '2022-06-26 04:11:57',
            ),

        ));


    }
}
