<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert(array([
            'title' => 'What is Laravel 1',
            'description' => 'Laravel is a PHP framework 1...',
        ],
        [
            'title' => 'What is Laravel 2',
            'description' => 'Laravel is a PHP framework 2...',
        ],
        [
            'title' => 'What is Laravel 3',
            'description' => 'Laravel is a PHP framework 3...',
        ]
        ));
    }
}
