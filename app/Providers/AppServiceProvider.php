<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Message;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $unreadMessageCount = Message::where('is_read', false)->count();
            $view->with('unreadMessageCount', $unreadMessageCount);
        });
    }
}
