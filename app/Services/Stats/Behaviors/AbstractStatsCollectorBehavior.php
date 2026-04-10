<?php

namespace App\Services\Stats\Behaviors;

use App\Models\Appointment;
use App\Services\Stats\StatsCollector;

class AbstractStatsCollectorBehavior
{
    private StatsCollector $collector;

    public function setCollector(StatsCollector $collector): void
    {
        $this->collector = $collector;
    }

    public function doCollect(Appointment $appointment): void
    {
        if (!$this->collector) {
            throw new \Exception('Collector is not set');
        }

        // Do something
    }
}
