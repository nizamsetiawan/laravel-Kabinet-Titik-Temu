<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'foto' => 'iseplutpinur20230618175649.png',
                'username' => 'iseplutpinur',
                'email_verified_at' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'active' => '1',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => 'ugbylFRJxyNM03zBrJ3sCWXrZhrAwenMa69ROt6r3Og31HTPUEjhPhSaBQz5',
                'created_at' => NULL,
                'updated_at' => '2023-06-18 17:56:49',
            ),

        ));


    }
}
