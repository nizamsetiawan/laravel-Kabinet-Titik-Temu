<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeProgramPembelajaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('home_program_pembelajaran')->delete();

        \DB::table('home_program_pembelajaran')->insert(array (
            0 =>
            array (
                'id' => 5,
                'nama' => 'Tahfizh Quran',
                'foto' => '20230326130805.png',
                'keterangan' => 'Menghafal al-Quran dan Belajar Tahsin',
                'urutan' => 1,
                'created_at' => '2023-03-26 13:08:05',
                'updated_at' => '2023-03-27 16:59:19',
            ),

        ));


    }
}
