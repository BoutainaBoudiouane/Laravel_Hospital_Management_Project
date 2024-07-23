<?php

namespace Database\Factories;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Section;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Doctor::class;

    public function definition(): array
    {
        return [
            //
            
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$12$FKIOYCS2l8r3iktZ4fcKYehtQjZWXTwkM1Yh7uSocjnoYfeRlYo7W', // password
            'phone' => $this->faker->phoneNumber,
            'section_id' => Section::all()->random()->id,
            'number_of_statements' =>5,
        ];
    }
}
