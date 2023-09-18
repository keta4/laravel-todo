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
        //
        DB::table('tasks')->insert([
            [
                'id' => 1,
                'name' => 'task1',
                'content' => 'content1'
            ],
            [
                'id' => 2,
                'name' => 'task2',
                'content' => 'content2'
            ],
            [
                'id' => 3,
                'name' => 'task3',
                'content' => 'content3'
            ]
        ]);
    }
}
