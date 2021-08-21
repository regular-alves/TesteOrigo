<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'title' => 'Free',
                'price' => 0,
            ],
            [
                'title' => 'Basic',
                'price' => 100,
            ],
            [
                'title' => 'Plus',
                'price' => 187,
            ]
        ]);
    }
}
