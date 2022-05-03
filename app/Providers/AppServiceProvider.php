<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Room;
use App\Observers\RoomObserver;
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
        Room::observe(RoomObserver::class);
    }
}
