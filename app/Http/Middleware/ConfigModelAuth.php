<?php
/**
 * Created by PhpStorm.
 * User: dungtd
 * Date: 2/15/2017
 * Time: 2:39 PM
 */
namespace App\Http\Middleware;
use Closure;
use Config;

class ConfigModelAuth
{
    public function handle($request, Closure $next)
    {
        Config::set('auth.providers.users.model', \App\Member::class);
        return $next($request);
    }

}