<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaHobisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('anggota_hobis')->delete();

        \DB::table('anggota_hobis')->insert(array (
            0 =>
            array (
                'id' => '9',
                'nama' => 'Sepakbola',
                'anggota_id' => '88',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => '10',
                'nama' => 'Volly',
                'anggota_id' => '88',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
