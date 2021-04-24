<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            'title' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'description' => Str::random(50),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
