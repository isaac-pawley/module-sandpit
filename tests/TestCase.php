<?php

namespace IsaacPawley\ModuleSandpit\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Inertia\Inertia;
use Inertia\ServiceProvider as InertiaTestingServiceProvider;
use IsaacPawley\ModuleSandpit\ModuleSandpitServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            ModuleSandpitServiceProvider::class,
            InertiaTestingServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        Inertia::setRootView('welcome');
        config()->set('inertia.testing.ensure_pages_exist', false);
        config()->set('inertia.testing.page_paths', [realpath(__DIR__), realpath('./resources/vue')]);

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'IsaacPawley\\ModuleSandpit\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/2022_08_25_225100_create_contacts_table.php';
        $migration->up();
    }

    protected function makeMockRequest($view)
    {
        app('router')->get('/example-url', function () use ($view) {
            return $view;
        });

        return $this->get('/example-url');
    }
}
