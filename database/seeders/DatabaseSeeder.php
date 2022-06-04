<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\User;
use App\Models\Profile;
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
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
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
=======
       $users= User::factory()->count(5)->create();
       $profiles= Profile::factory()->count(5)->create();
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
    }
}
