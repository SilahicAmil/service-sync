<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new fakeCar($this->faker));
        $vehicle = $this->faker->vehicleArray();
        return [
            'user_id' => User::factory(), // Use User::factory() to create a related user
            'vehicle_make' => $vehicle['brand'],
            'vehicle_model' => $vehicle['model'],
            'vehicle_year' => $this->faker->numberBetween(2000, 2023),
            'vehicle_miles' => $this->faker->numberBetween(0, 100000),
            'vehicle_vin' => $this->faker->vin,
            'service_name' => $this->faker->randomElement([
                'Oil Change',
                'Brake Inspection',
                'Tire Rotation',
                'Engine Tune-Up',
                // Add More eventually
            ]),
            'service_date' => $this->faker->date(),
            'service_price' => $this->faker->randomFloat(2, 20, 1000),
            'additional_notes' => $this->faker->sentence,
            // Add other appointment attributes as needed
        ];
    }
}
