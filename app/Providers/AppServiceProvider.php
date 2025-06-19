<?php

namespace App\Providers;

use App\Models\pengunjungs;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('layout.header', function ($view) {
            $jumlahPending = pengunjungs::where('status', 'pending')->count();
            $view->with('pengunjung', $jumlahPending);
        });
    }
}
