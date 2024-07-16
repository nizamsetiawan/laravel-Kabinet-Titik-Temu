<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('contact_list')->delete();

        \DB::table('contact_list')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nama' => 'Location',
                'icon' => 'fas fa-map-marker-alt',
                'url' => 'https://goo.gl/maps/5r4WzKbNY89GSHHe6',
                'order' => '1',
                'keterangan' => 'Cianjur Selatan<br> Jawa Barat 43272, Indonesia.',
                'status' => '1',
                'created_at' => '2022-08-21 08:34:56',
                'updated_at' => '2023-06-18 19:06:11',
            ),
        ));


    }
}
