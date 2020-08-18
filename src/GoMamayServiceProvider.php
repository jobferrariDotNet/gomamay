<?php
namespace Jobferrari\Gomamay;
use Illuminate\Support\ServiceProvider;

class GoMamayServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
        $this->loadViewsFrom(__DIR__ .'/views','gomamay');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/gomamay.php','gomamay');
        $this->publishes([__DIR__.'/config/gomamay.php'=>config_path('gomamay.php')]);
    }

    public function register(){

    }
}
