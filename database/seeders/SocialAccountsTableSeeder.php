<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialAccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('social_accounts')->delete();

        \DB::table('social_accounts')->insert(array (
            0 =>
            array (
                'id' => '3',
                'user_id' => '113',
                'provider_id' => '103853047478079863516',
                'provider_name' => 'google',
                'provider_data' => '{"id":"103853047478079863516","nickname":null,"name":"Faisal Akbar","email":"faisal7794akbar@gmail.com","avatar":"https:\\/\\/lh3.googleusercontent.com\\/a\\/AGNmyxbNyr3rnmlMmPAoCVJuX8w_WPEMlcX3Um8GOYoKqg=s96-c","user":{"sub":"103853047478079863516","name":"Faisal Akbar","given_name":"Faisal","family_name":"Akbar","picture":"https:\\/\\/lh3.googleusercontent.com\\/a\\/AGNmyxbNyr3rnmlMmPAoCVJuX8w_WPEMlcX3Um8GOYoKqg=s96-c","email":"faisal7794akbar@gmail.com","email_verified":true,"locale":"id","id":"103853047478079863516","verified_email":true,"link":null},"attributes":{"id":"103853047478079863516","nickname":null,"name":"Faisal Akbar","email":"faisal7794akbar@gmail.com","avatar":"https:\\/\\/lh3.googleusercontent.com\\/a\\/AGNmyxbNyr3rnmlMmPAoCVJuX8w_WPEMlcX3Um8GOYoKqg=s96-c","avatar_original":"https:\\/\\/lh3.googleusercontent.com\\/a\\/AGNmyxbNyr3rnmlMmPAoCVJuX8w_WPEMlcX3Um8GOYoKqg=s96-c"},"token":"ya29.a0AVvZVsoq80MVn5HoHqDg4vEx_9tZBLTL19Rwg2Kv33tcngqy3sDytdJbkXZRflZoNsuYt6VusxPo3oRyVH4T8psfKzqJzOoQhbn6HXPVOoavYMPJ7BrZSaN4h-7B2BExZowqxzAPLofb3pzQBNsiBfLdB-DfaCgYKAXISARMSFQGbdwaIfjf1OEXvkIJFLA4tqnBneA0163","refreshToken":null,"expiresIn":3599,"approvedScopes":["openid","https:\\/\\/www.googleapis.com\\/auth\\/userinfo.email","https:\\/\\/www.googleapis.com\\/auth\\/userinfo.profile"]}',
                'created_at' => '2023-03-16 16:20:21',
                'updated_at' => '2023-03-16 16:20:21',
            ),

        ));


    }
}
