<?php

namespace App\Services\Stats\Behaviors;

use App\Models\Appointment;

class DefaultStatsCollectorBehavior extends AbstractStatsCollectorBehavior
{
    public function doCollect(Appointment $appointment): void
    {
        // Implement the default statistics collection logic here
        // For example, you could collect general statistics about appointments, users, etc.
    }
}
