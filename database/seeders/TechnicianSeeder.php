<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicianSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the technicians table.
     */
    public function run(): void
    {
        Technician::factory(100)->create();
    }
}

