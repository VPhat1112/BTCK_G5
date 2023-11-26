<?php
// app/Providers/ProvincesApiServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\provincesApiService;

class ProvincesApiServiceProvider extends provincesApiService
{
    public function register()
    {
        $this->app->singleton(provincesApiService::class, function ($app) {
            return new provincesApiService();
        });
    }
}
