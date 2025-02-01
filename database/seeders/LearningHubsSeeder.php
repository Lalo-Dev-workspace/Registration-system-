<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearningHubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('learning_hubs')->insert([
            ['name' => 'LaloDev Online'],
            ['name' => 'LaloDev In-Person'],
            ['name' => 'LaloDev Hybrid'],
        ]);
    }

}
