<?php

namespace Database\Seeders;


use App\Models\answer;
use App\Models\counter;
use App\Models\User;
use App\Models\word;
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
