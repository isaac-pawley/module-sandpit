<?php

namespace IsaacPawley\ModuleSandpit;

use IsaacPawley\ModuleSandpit\Commands\ModuleSandpitCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ModuleSandpitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('module-sandpit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_module-sandpit_table')
            ->hasCommand(ModuleSandpitCommand::class);
    }
}
