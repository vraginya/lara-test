<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the appointments table.
     */
    public function run(): void
    {
        $technicians = Technician::pluck('id')->toArray();
        $customers = Customer::pluck('id')->toArray();

        Appointment::factory(1000)
            ->sequence(function () use ($technicians, $customers) {
                return [
                    'technician_id' => $technicians[array_rand($technicians)],
                    'customer_id' => $customers[array_rand($customers)],
                ];
            })
            ->create();
    }
}


