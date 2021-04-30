<?php

namespace App\Providers;

use App\Services\Visitor;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use PDO;
use Stevebauman\Location\Facades\Location;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(DebitPament::class, function () {

        //     if (request()->routeIs('withDraw')) {

        //         return new DebitPament(request()->cardId);
        //     }
        // });


        $this->app->singleton(Visitor::class, function () {

            return new Visitor(Location::get()->countryCode, Location::get()->regionCode);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $visitor = App::make(Visitor::class);

        $visitor1 = App::make(Visitor::class);

        dd($visitor, $visitor1);

        if (!$visitor->isRecognise()) {
            $visitor->rejester();
        }
    }
}
