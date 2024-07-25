<?php

namespace Comethalley\CalculatorPackage\Providers;

use Comethalley\CalculatorPackage\Calculator;
use Comethalley\CalculatorPackage\Commands\InstallCalculatorPackage;
use Illuminate\Support\ServiceProvider;


class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/calculator-package.php',
            'calculator-package'
        );

        $this->app->bind('calculator', function ($app) {
            return new Calculator();
        });
    }

    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCalculatorPackage::class,
            ]);

            $this->publishes([
                __DIR__ . '/../../config/calculator-package.php' => config_path('calculator-package.php'),
            ], 'calculator-package');
        }
    }
}
