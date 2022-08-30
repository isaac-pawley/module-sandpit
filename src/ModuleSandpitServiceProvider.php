<?php

namespace IsaacPawley\ModuleSandpit;

use IsaacPawley\ModuleSandpit\Commands\ModuleSandpitCommand;
use IsaacPawley\ModuleSandpit\Contracts\ContactsRepositoryInterface;
use IsaacPawley\ModuleSandpit\Services\ContactsRepository;
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
            ->hasRoute('web')
            ->hasCommand(ModuleSandpitCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->bind(ContactsRepositoryInterface::class, ContactsRepository::class);
    }

    public function bootingPackage()
    {
        parent::bootingPackage();
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
