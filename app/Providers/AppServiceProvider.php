<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ProductCreated;
use App\Listeners\CheckLowStock;
use App\Events\CategoryDeleted;
use App\Listeners\LogCategoryDeletion;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(ProductCreated::class, CheckLowStock::class);
        Event::listen(CategoryDeleted::class, LogCategoryDeletion::class);

    }
}
