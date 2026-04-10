<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\Services\Stats\StatsCollector;
use app\Services\Stats\Behaviors\AbstractStatsCollectorBehavior;
use app\Services\Stats\Behaviors\DefaultStatsCollectorBehavior;
use app\Services\Stats\Behaviors\BehaviorFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the BehaviorFactory
        $this->app->singleton(BehaviorFactory::class);

        // Bind the AbstractStatsCollectorBehavior to DefaultStatsCollectorBehavior
        $this->app->bind(AbstractStatsCollectorBehavior::class, DefaultStatsCollectorBehavior::class);

        // Bind the StatsCollector
        $this->app->singleton(StatsCollector::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
