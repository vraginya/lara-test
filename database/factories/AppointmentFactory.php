<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
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
        return [
            'technician_id' => 1,
            'customer_id' => 1,
            'started_at' => fake()->dateTimeBetween('-3 months', '+1 month'),
            'notes' => fake()->sentence(),
        ];
    }
}


