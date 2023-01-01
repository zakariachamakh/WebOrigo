<?php

namespace Database\Seeders;


use App\Models\Answer;
use App\Models\Counter;
use App\Models\User;
use App\Models\Word;
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

        User::factory()->count(100)->create();
        Word::factory()->count(100)->create();
        Answer::factory()->count(100)->create();
        Counter::factory()->count(100)->create();




    }
}
