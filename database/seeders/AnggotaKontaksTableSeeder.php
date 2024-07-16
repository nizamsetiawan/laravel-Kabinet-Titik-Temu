<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaKontaksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('anggota_kontaks')->delete();

        \DB::table('anggota_kontaks')->insert(array (
            0 =>
            array (
                'id' => '1',
                'jenis_id' => '1',
                'anggota_id' => '1',
                'nilai' => 'https://facebook.com/iseplutpinur7/',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            1 =>
            array (
                'id' => '2',
                'jenis_id' => '5',
                'anggota_id' => '1',
                'nilai' => 'https://www.instagram.com/iseplutpinur/',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            2 =>
            array (
                'id' => '3',
                'jenis_id' => '5',
                'anggota_id' => '3',
                'nilai' => 'https://www.instagram.com/hasnhaaa_nita',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
        ));


    }
}
