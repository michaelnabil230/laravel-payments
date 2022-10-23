<?php

namespace MichaelNabil230\Payment\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MichaelNabil230\Payment\PaymentServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MichaelNabil230\\Payment\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            PaymentServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-payments_table.php.stub';
        $migration->up();
        */
    }
}
