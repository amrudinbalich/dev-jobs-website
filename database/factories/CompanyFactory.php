<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'description' => fake()->paragraph(2),
            'size' => fake()->randomElement([
                '1-10', '11-50', '51-200', '201-500', '501-1000', '1001-5000'
            ]),
            'logo_url' => fake()->optional()->imageUrl(150, 50, 'business', true),
            'website_url' => fake()->optional()->url()
        ];
    }
}
