<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api') // app
                ->group(base_path('routes/api/v1/app.php'));

            Route::middleware('api') // users
                ->group(base_path('routes/api/v1/users.php'));

            Route::middleware('api') // books
                ->group(base_path('routes/api/v1/books.php'));

            Route::middleware('api') // admin
                ->group(base_path('routes/api/v1/admin.php'));

            Route::middleware('api') // admin
                ->group(base_path('routes/api/v1/logs.php'));
        });
    }
}
