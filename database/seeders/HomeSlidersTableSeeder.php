<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeSlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('home_sliders')->delete();

        \DB::table('home_sliders')->insert(array (
            0 =>
            array (
                'id' => '3',
                'urutan' => '1',
                'nama' => 'Utama',
                'foto' => '20230419133545.png',
                'judul' => 'Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan Berkualitas.',
                'keterangan' => 'Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk kebutuhan promosi dan branding bisnis mereka',
                'tombol_judul' => 'Get Started',
                'tombol_link' => '__base_url__/contact',
                'tombol_video_judul' => NULL,
                'tombol_video_link' => NULL,
                'tampilkan' => 'Ya',
                'created_at' => '2023-01-17 22:39:36',
                'updated_at' => '2023-04-19 13:58:23',
            ),

        ));


    }
}
