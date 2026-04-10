<?php

namespace App\Services\Stats\Behaviors;

use App\Services\Stats\StatsCollector;

class AbstractStatsCollectorBehavior
{
    private StatsCollector $collector;

    public function setCollector(StatsCollector $collector): void
    {
        $this->collector = $collector;
    }

    public function doCollect(): void
    {
        if (!$this->collector) {
            throw new \Exception('Collector is not set');
        }

        // Do something
    }
}
