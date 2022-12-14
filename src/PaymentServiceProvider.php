<?php

namespace MichaelNabil230\Payment;

use MichaelNabil230\Payment\Commands\PaymentCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PaymentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-payments')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-payments_table')
            ->hasCommand(PaymentCommand::class);
    }
}
