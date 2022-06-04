<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::factory()->count(5)->create();
    }
}
