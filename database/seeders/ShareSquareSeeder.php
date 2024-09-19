<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShareSquareSeeder extends Seeder
{
    public function run()
    {
        DB::table('sharesquares')->insert([
            'planid' => 1,
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@example.com',
            'kpi' => 'KPI Value',
            'value' => 100,
            'date' => now(),
        ]);
    }
}

