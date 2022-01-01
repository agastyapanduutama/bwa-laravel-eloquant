<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('matches')->truncate();

        $players = [[
            'clubs_id' => 1,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 1",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 1,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 2",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 2,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 3",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 2,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 4",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 3,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 5",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 3,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 6",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 4,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 7",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 4,
            'photo' => "https://resources.premierleague.com/premierleague/photos/players/250x250/p165153.png",
            'name' => "Palyer 8",
            'height' => "180",
            'Position' => "Forward",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]];

        Players::insert($players);
    }
}
