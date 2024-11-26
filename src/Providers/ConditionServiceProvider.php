<?php
namespace Aleks\LaravelConditions\Providers;
use Illuminate\Support\ServiceProvider;

use Aleks\LaravelConditions\ConditionService;
use Aleks\LaravelConditions\Contracts\ConditionServiceContract;

class ConditionServiceProvider  extends ServiceProvider {
    
    public function boot()
    {

    }
    public function register()
    {
        $this->app->bind(ConditionServiceContract::class, ConditionService::class);
    }
}

?>