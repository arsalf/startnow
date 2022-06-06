<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductDetail>
 */
class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "deskripsi" => $this->faker->text(1000), 
            "proposal_files" => ["202206060602Proposal.pdf"],
            "modal" => $this->decimalRand(100000, 10000000, 100000)
        ];
    }

    function decimalRand($iMin, $iMax, $fSteps = 0.5)
    {
        $a = range($iMin, $iMax, $fSteps);

        return $a[mt_rand(0, count($a)-1)];
    }
}
