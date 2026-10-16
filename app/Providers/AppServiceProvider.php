<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Layanans;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Bagikan data $footerLayanans ke semua view (termasuk footer)
        View::share('footerLayanans', Layanans::select('id', 'namalayanan')->take(3)->get());
    }
}