<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('artikel')->delete();

        \DB::table('artikel')->insert(array (
            0 =>
            array (
                'id' => '27',
                'nama' => 'Perempuan berhak menjadi manusia sepenuhnya',
                'slug' => 'perempuan-berhak-menjadi-manusia-sepenuhnya',
                'foto' => '/assets/artikel/perempuan-16502068100.png',
            'detail' => '<p style="text-align: center; "><img style="width: 399.4px; height: 399.4px;" data-bs-filename="243879440_1199208743908116_8009084175971361223_n.jpg" src="/assets/artikel/perempuan-16502068100.png"><p style="text-align: center; "><img style="width: 400.4px; height: 400.4px;" data-bs-filename="243879440_1199208743908116_8009084175971361223_n.jpg" src="/assets/artikel/perempuan-16502068101.png"><br></p><p>"Kita dapat menjadi manusia sepenuhnya, tanpa berhenti menjadi wanita sepenuhnya. RA Kartini"<br style=""><br style="">Perempuan berhak menjadi manusia sepenuhnya, sesuai apa yang diinginkan. Mengejar keinginan dan cita-cita tanpa harus melupakan peran utamanya sebagai Ibu dan istri nantinya.<br style=""><br style="">Join Us:<br style="">}Youtube (Orda Karmapack)<br style=""><a href="https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg" target="_blank">https://youtube.com/channel/UCYLkZIjHmDkQH7j7qfVIHbg</a><br style="">}Instagram (orda_karmapack)<br style=""><a href="https://instagram.com/orda_karmapack?utm_medium=copy_link" target="_blank">https://instagram.com/orda_karmapack?utm_medium=copy_link</a><br style="">}Facebook (Orda Karmapack)<br style=""><a href="https://www.facebook.com/karmapack.id" target="_blank">https://www.facebook.com/karmapack.id</a><br style=""><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/ordakarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#ordakarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/halingkuaing/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#halingkuaing</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/inicianjurkidul/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#inicianjurkidul</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/infocianjur24jam/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#infocianjur24jam</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackkabinetmasagi/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapackkabinetmasagi</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/keperempuanankarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#keperempuanankarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/perempuanbersatukarmapackmaju/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#perempuanbersatukarmapackmaju</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/kominfokarmapack/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#kominfokarmapack</a><br style=""><a class=" xil3i" href="https://www.instagram.com/explore/tags/karmapackmengudara/" tabindex="0" style="border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; overflow-wrap: break-word;">#karmapackmengudara</a><br></p><p></p><p></p></p>
',
                'excerpt' => '“Kita dapat menjadi manusia sepenuhnya, tanpa berhenti menjadi wanita sepenuhnya.” RA Kartini',
                'counter' => '98',
                'date' => '2021-09-01',
                'status' => '1',
                'created_at' => '2022-04-17 14:46:50',
                'updated_at' => '2023-10-29 18:25:23',
                'user_id' => '1',
            ),

        ));


    }
}
