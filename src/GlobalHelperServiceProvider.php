<?php

namespace volmaticmw5\GlobalHelper;

use Illuminate\Support\ServiceProvider;

class GlobalHelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->make('volmaticmw5\GlobalHelper\Converter');
        $this->app->make('volmaticmw5\GlobalHelper\Sorter');
    }

    public function boot()
    {
       
    }
}
