<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('clubs')->truncate();

        $clubs = [[
            'stadiums_id' => 1,
            'name' => 'Club 1',
            'logo' => 'https://resources.premierleague.com/premierleague/badges/25/t36.png',
            'url' => 'https://www.premierleague.com/clubs/1/club-1',
            'thropy' => 16,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'stadiums_id' => 2,
            'name' => 'Club 2',
            'logo' => 'https://resources.premierleague.com/premierleague/badges/25/t31.png',
            'url' => 'https://www.premierleague.com/clubs/2/club-2',
            'thropy' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'stadiums_id' => 3,
            'name' => 'Club 3',
            'logo' => 'https://resources.premierleague.com/premierleague/badges/25/t33.png',
            'url' => 'https://www.premierleague.com/clubs/3/club-3',
            'thropy' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'stadiums_id' => 4,
            'name' => 'Club 4',
            'logo' => 'https://resources.premierleague.com/premierleague/badges/25/t34.png',
            'url' => 'https://www.premierleague.com/clubs/4/club-4',
            'thropy' => 13,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]];

        Clubs::insert($clubs);
    }
}
