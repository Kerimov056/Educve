<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Qlobal HTTP middleware-lər (hər istəkdə işləyir)
     */
    protected $middleware = [
        // Host/proxy etibarı
        \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,

        // CORS
        \Illuminate\Http\Middleware\HandleCors::class,

        // Texniki fasilə, POST ölçüsü, string trimming
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * Middleware qrupları
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class, // (istəyə bağlı)
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // Lazım olarsa `throttle:api` istifadə edə bilərsən (Route-da: ->middleware('throttle:api'))
            \Illuminate\Routing\Middleware\ThrottleRequests::class . ':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            // İstəyə bağlı: \Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,
        ],
    ];

    /**
     * Route middleware alias-ları
     * (Laravel 10+/11+/12+ - $middlewareAliases istifadə olunur)
     */
    protected $middlewareAliases = [
        // Auth
        'auth'            => \App\Http\Middleware\Authenticate::class,
        'auth.basic'      => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.session'    => \Illuminate\Session\Middleware\AuthenticateSession::class,

        // Səlahiyyət, qonaq, parol təsdiqi
        'can'             => \Illuminate\Auth\Middleware\Authorize::class,
        'guest'           => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,

        // İmza, throttle, verified email
        'signed'          => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle'        => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified'        => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        // (İstəyə bağlı) Pre-cognitive sorğular
        'precognitive'    => \Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,

        // ==== JWT (php-open-source-saver/jwt-auth) ====
        // Qorunan route-larda istifadə: ->middleware('jwt.auth')
        'jwt.auth'        => \PHPOpenSourceSaver\JWTAuth\Http\Middleware\Authenticate::class,

        // Token refresh üçün (lazım olduqda)
        'jwt.refresh'     => \PHPOpenSourceSaver\JWTAuth\Http\Middleware\RefreshToken::class,
    ];
}
