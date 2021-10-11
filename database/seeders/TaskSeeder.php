<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++)
        {
            DB::table('tasks')->insert([
                'task' => " Task: " . $i,
                'board_id' => rand(1,9)
            ]);
        }
       //
    }
}
