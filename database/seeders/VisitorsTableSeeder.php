<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('visitors')->delete();

        \DB::table('visitors')->insert(array (
            0 =>
            array (
                'id' => '1',
                'ip' => '114.124.131.102',
                'date' => '2023-03-14',
                'time' => '01:51:51',
                'platform' => 'Android',
                'browser' => 'MiuiBrowser',
                'browser_version' => '13.22.1',
            'user_agent' => 'Mozilla/5.0 (Linux; U; Android 12; en-gb; POCO M3 Build/SKQ1.211202.001) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/100.0.4896.127 Mobile Safari/537.36 XiaoMi/MiuiBrowser/13.22.1-gn',
                'hits' => '3',
                'has_detail' => '1',
            ),

        ));


    }
}
