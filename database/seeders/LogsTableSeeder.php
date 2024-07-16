<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('logs')->delete();

        \DB::table('logs')->insert(array (
            0 =>
            array (
                'id' => '5',
                'user_id' => '1',
                'log_date' => '2023-03-18 13:41:15',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.130.37","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.41"}',
            ),

        ));


    }
}
