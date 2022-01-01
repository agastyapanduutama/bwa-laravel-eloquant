<?php

namespace Database\Seeders;


use App\Models\Clubs;
use App\Models\Stadiums;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('stadiums')->truncate();
        
        $stadium = [[
            'name' => 'Stadium 1',
            'capacity' => '10000',
            'address' => 'Address 1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => 'Stadium 2',
            'capacity' => '20000',
            'address' => 'Address 2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => 'Stadium 3',
            'capacity' => '30000',
            'address' => 'Address 3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => 'Stadium 4',
            'capacity' => '40000',
            'address' => 'Address 4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]];


        Stadiums::insert($stadium);

    }
}
