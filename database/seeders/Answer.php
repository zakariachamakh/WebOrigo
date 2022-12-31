<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Answer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(answer::class, 50)->create();

    }
}
