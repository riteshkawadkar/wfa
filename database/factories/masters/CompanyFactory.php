<?php

namespace Database\Factories\masters;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      return [
        'name' => $this->faker->company,
        'short_name' => 'TEST',
        'email' => $this->faker->unique()->companyEmail,
        'domain' => 'example.com',
        'company_url' => $this->faker->url,
        'company_logo' => $this->faker->imageUrl,
        'phone_number' => $this->faker->numerify('##########'),
        'address' => $this->faker->address,
        'city' => $this->faker->city,
        'state' => 'Bhopal',
        'zip_code' => $this->faker->numerify('######'),
        'country' => $this->faker->country,
        'gstin' => $this->faker->regexify('^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[0-9]{1}[A-Z]{1}[0-9]{1}$'),
        'pan' => $this->faker->regexify('^[A-Z]{5}[0-9]{4}[A-Z]{1}$'), // Generate a random PAN with the format "ABCDE1234F"
        'status' => $this->faker->boolean(100),
      ];
    }
}
