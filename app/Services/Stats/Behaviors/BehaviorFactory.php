<?php

namespace App\Services\Stats\Behaviors;

use App\Models\Appointment;
use App\Models\Technician;

class BehaviorFactory
{
    public function make(Technician $technician): AbstractStatsCollectorBehavior
    {
        return new DefaultStatsCollectorBehavior();
    }
}
