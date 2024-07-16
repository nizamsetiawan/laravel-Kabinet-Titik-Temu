<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sessions')->delete();

        \DB::table('sessions')->insert(array (
            0 =>
            array (
                'id' => '0EbcHZQSDHI6e8ZNCCCeID909dGTVWNV1LL0c58b',
                'user_id' => NULL,
                'ip_address' => '54.36.148.219',
            'user_agent' => 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVBmTFVwWXY3R1RwVVpiVW9BWm5leUJKUTFtbk1qUXRaRk1GdDB4eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg4OiJodHRwOi8va2FybWFwYWNrLmlkL2xvYWRlci9qcy9wYWdlcy9mcm9udGVuZC9mcm9udGVuZD9ocHU9dGVudGFuZyUyRmtlcGVuZ3VydXNhbiUyRmJpZGFuZyUyRjIwMjEtMjAyMi1wZW5nZW1iYW5nYW4ta29kZS1ldGlrLWRhbi1ha2hsYWt1bC1rYXJpbWFoJms9Q1VyOEJaZ0E0cjJnbzh6M2hVOUJDZk9nZE5UZTB1NW1lMjBPcHdyYiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
                'last_activity' => '1698817297',
            )
        ));


    }
}
