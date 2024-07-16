<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WhatsappBrodcastTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('whatsapp_brodcast')->delete();

        \DB::table('whatsapp_brodcast')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nama' => 'Kurasi tahap 2',
                'template' => 'Hallo Kak *__nama_anggota__* , Salam Cempor!
Terima kasih atas partisipasi Anda pada pendaftaran Pelatihan Dasar Woodcraft Cempor 2023,
Dispora Kota Bandung. Saat ini, tim kami masih dalam proses kurasi Tahap 2.',
                'created_at' => '2023-08-14 10:45:43',
                'updated_at' => '2023-08-14 10:45:43',
            ),

));


    }
}
