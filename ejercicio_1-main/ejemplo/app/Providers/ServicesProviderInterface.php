<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\SalonInterface;
use App\Repositories\Eloquent\SalonRepository; 

class ServicesProviderInterface extends ServiceProvider
{
    public function register(): void
    {
        // Bind: interfaz -> implementación
        $this->app->bind(SalonInterface::class, SalonRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
