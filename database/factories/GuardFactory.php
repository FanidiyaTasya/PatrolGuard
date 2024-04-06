<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GuardFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $faker = fake('id_ID');
        return [
            'nik' => $faker->unique()->numerify('################'),
            'fullname_guard' => $faker->name,
            'birth_date' => $faker->date,
            'email_guard' => $faker->unique()->safeEmail,
            'password_guard' => bcrypt('guard123'),
            'phone_number' => $faker->regexify('08[0-9]{9}'),
            'address' => $faker->address,
            'photo' => null,
        ];
    }
}
