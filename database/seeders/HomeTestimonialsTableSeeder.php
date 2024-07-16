<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeTestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('home_testimonials')->delete();

        \DB::table('home_testimonials')->insert(array (
            0 =>
            array (
                'id' => '1',
                'urutan' => '1',
                'nama' => 'Taufiq',
                'sebagai' => 'Product Designer',
                'foto' => '20230418133444.jpg',
                'testimoni' => 'Saya sangat senang dengan hasil desain yang dibuat oleh tim cempor digital. Mereka mengerti apa yang saya inginkan dan mampu memberikan solusi yang sempurna untuk kebutuhan desain saya. Proses komunikasi dan kerjasama dengan timnya sangat lancar dan mereka selalu mengakomodasi setiap permintaan perubahan dari saya. Saya sangat merekomendasikan jasa desain ini kepada siapa saja yang mencari desain berkualitas tinggi dan layanan yang baik.',
                'tampilkan' => 'Ya',
                'created_at' => '2023-04-13 13:00:59',
                'updated_at' => '2023-04-18 13:34:44',
            ),

        ));


    }
}
