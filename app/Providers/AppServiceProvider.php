<?php

namespace App\Providers;

use App\Configuration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        setlocale(LC_ALL, config('app.locale'));

        if( !App::runningInConsole() ){
            $configurations = Configuration::pluck('value','key')->toArray();

            foreach ($configurations as $key => $value){
                config([$key => $value]);
            }
        }

        //si usuario es admin
        Blade::if('useradmin', function () {
            return in_array('1',array_pluck(Auth::user()->plRols->toArray(),"id"));
        });

        //si user no tiene opciones
        Blade::if('usernoops', function () {
            return Auth::user()->opciones->count()==0 ? true : false;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
