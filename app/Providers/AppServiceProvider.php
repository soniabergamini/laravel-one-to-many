<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Project;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $projects = Project::all();
        view()->share('projects', $projects);
    }
}
