<?php

namespace App\Services\Stats;

use App\Models\Appointment;
use App\Services\Stats\Behaviors\AbstractStatsCollectorBehavior;

class StatsCollector
{

    public function __construct(private AbstractStatsCollectorBehavior $behavior)
    {
    }

    public function collect(Appointment $appointment): void
    {
        if (!$this->behavior) {
            throw new \Exception('Behavior is not set');
        }

        $this->behavior->doCollect($appointment);
    }
}
