<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KataAlumnisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kata_alumnis')->delete();

        \DB::table('kata_alumnis')->insert(array (
            0 =>
            array (
                'id' => '1',
                'user_id' => '1',
                'sebagai' => 'Kominfo 2021-2023',
                'deskripsi' => 'Saya khusus mendedikasikan waktu saya untuk belajar ngoding. Di Dicoding belajarnya step by step, library-nya up-to-date. Kalau ada eror, nggak bingung. Di sini saya juga belajar untuk nggak asal coding. CV pun jadi bagus. Saya jadi percaya diri.',
                'sequence' => '2',
                'profesi' => 'Junior Programmer Di Shopee',
                'status' => '1',
                'created_at' => '2022-08-09 15:11:08',
                'updated_at' => '2022-08-18 15:03:10',
            ),

        ));


    }
}
