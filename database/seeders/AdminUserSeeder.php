<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Marcelox',
            'email' => 'marcelo@moksha.net.ar',
            'password' => bcrypt('sistemas'),
            'current_team_id' => 1,
        ]);

        Team::create([
            'name' => "marcelox's Team",
            'personal_team' => 1,
            'user_id' => 1,
        ]);

    }
}
