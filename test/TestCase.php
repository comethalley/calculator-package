<?php

namespace Comethalley\CalculatorPackage\Test;

use Comethalley\CalculatorPackage\CalculatorServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            CalculatorServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
