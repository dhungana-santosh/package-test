<?php

namespace TestVendor\TestPackage;


use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__.'/routes/web.php';
        }

        $this->loadViewsFrom(__DIR__.'/resources/views','test');



    }

}