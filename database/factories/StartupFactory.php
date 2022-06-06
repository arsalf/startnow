<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Startup>
 */
class StartupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->company(),
            "email" => $this->faker->companyEmail(),
            "owner" => $this->getUsernameRand(),
            "thumbnail" => "202206051644LOC 2022.png",
            "deskripsi" => $this->faker->text(1000),
            "no_hp" => $this->faker->phoneNumber(),
            "tanggal_berdiri" => now(),
            "alamat" => $this->faker->address()            
        ];
    }

    public function getUsernameRand()
    {
        $username = ["admin", "zidan", "pollich.carole", "predovic.elnora"];

        return $username[mt_rand(0, count($username)-1)];
    }
}
