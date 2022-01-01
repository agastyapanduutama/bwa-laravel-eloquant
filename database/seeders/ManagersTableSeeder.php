<?php

namespace Database\Seeders;

use App\Models\Managers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('managers')->truncate();

            
        $managers = [[
            'clubs_id' => 1,
            'name' => 'Manager 1',
            'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
            'old' => 12,
            'nationality' => 'USA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 2,
            'name' => 'Manager 2',
            'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
            'old' => 12,
            'nationality' => 'USA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 3,
            'name' => 'Manager 3',
            'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
            'old' => 12,
            'nationality' => 'USA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 4,
            'name' => 'Manager 4',
            'photo' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
            'old' => 12,
            'nationality' => 'USA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]];

        Managers::insert($managers);
    }
}
