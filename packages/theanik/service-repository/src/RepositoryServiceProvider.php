<?php

namespace Theanik\RepositoryService;

use Illuminate\Support\ServiceProvider;
use Theanik\RepositoryService\Commands\CreateRepositoryCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            CreateRepositoryCommand::class
        ]);

        // $this->app->make([
        //     CreateRepositoryCommand::class
        // ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
