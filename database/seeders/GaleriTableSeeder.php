<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GaleriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('galeri')->delete();

        \DB::table('galeri')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nama' => 'Poesaka 2021 HP',
                'foto' => '2022-02-04_06-42-23_karmapack_image_WhatsApp_Image_2022-02-02_at_10_49_38_PM.jpeg',
                'foto_id_gdrive' => '101IqEbeTRlQjpM8_zsxRL17oLtN9Ys4d',
                'id_gdrive' => '1F1QK4DlfRtA-N4cwWqozhsC3bEXQVkYw',
                'slug' => 'poesaka-2021-hp',
                'tanggal' => '2021-11-18',
                'lokasi' => 'lokasi',
                'keterangan' => 'Poesaka 2021',
                'status' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

        ));


    }
}
