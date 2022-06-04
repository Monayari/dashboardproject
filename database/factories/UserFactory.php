<?php

namespace Database\Factories;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
=======
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496

class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
=======
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
<<<<<<< HEAD
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
=======
        $roles = [
            'admin','user','architect'
        ];
        return [
            'name' => $this->faker->name,
           'email'=> $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone_number'=> $this->faker->phoneNumber,
            'role'=> $this->faker->randomElement($roles),
            'remember_token' => Str::random(10),
            
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
<<<<<<< HEAD
=======

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (!Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name . '\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
}
