<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\matches;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('matches')->truncate();

        $matches = [[
            'clubs_id' => 1,
            'rivals_id' => 2,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 3,
            'rivals_id' => 4,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 1,
            'rivals_id' => 3,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 1,
            'rivals_id' => 4,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 2,
            'rivals_id' => 3,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 2,
            'rivals_id' => 4,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 3,
            'rivals_id' => 1,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 3,
            'rivals_id' => 2,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'clubs_id' => 4,
            'rivals_id' => 1,
            'schedule' => '2020-01-01 00:00:00',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]
    ];


        Matches::insert($matches);
    }
}
