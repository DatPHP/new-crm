<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE',
        'Access-Control-Allow-Headers' => 'Content-Type, Authorization'
    ];
}
