<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('anggotas')->delete();

        \DB::table('anggotas')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nomor_anggota' => NULL,
                'nama' => 'Isep Lutpi Nur',
                'tanggal_lahir' => '2000-08-10',
                'jenis_kelamin' => 'laki-laki',
                'angkatan' => '2019',
                'province_id' => '32',
                'regency_id' => '3203',
                'district_id' => '3203051',
                'village_id' => '3203051006',
                'alamat_lengkap' => 'Samping SDN 1 Tipar, RT 012/RW 024',
                'bio' => 'Hidup ini seperti gulali, kadang manis, kadang kocak. Tapi ingat, kamu adalah si penuai gulali dalam hidupmu sendiri. Teruslah berjalan dengan senyuman!',
                'profesi' => 'Pelajar/Mahasiswa',
                'foto' => 'iseplutpinur20230618175649.png',
                'telepon' => '085798132505',
                'whatsapp' => '85798132505',
                'status' => 'ANGGOTA BIASA',
                'user_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-09-17 00:47:53',
            ),

    ));


    }
}
