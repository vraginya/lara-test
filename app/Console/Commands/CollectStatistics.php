<?php

namespace App\Console\Commands;

use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Technician;
use App\Services\Stats\Behaviors\BehaviorFactory;
use App\Services\Stats\StatsCollector;
use Illuminate\Console\Command;

class CollectStatistics extends Command
{
    public function __construct(private BehaviorFactory $behaviorFactory)
    {
        parent::__construct();
    }

    protected $signature = 'collect:statistics';

    protected $description = 'Collect statistics from the application';

    public function handle(): void
    {
        $this->info('Collecting statistics...');

        $appointments = Appointment::all();

        foreach ($appointments as $appointment) {
            $technician = Technician::find($appointment->technician_id);
            $customer = Customer::find($appointment->customer_id);

            $behavior = $this->behaviorFactory->make($technician);
            $collector = new StatsCollector($behavior);
            $behavior->setCollector($collector);

            $collector->collect($appointment);

            $this->info('Collecting statistics for appointment #: ' . $appointment->id
                . ' with technician: ' . $technician->name
                . ' and customer: ' . $customer->name
            );
        }

        $this->info('Statistics collected successfully!');
    }
}

