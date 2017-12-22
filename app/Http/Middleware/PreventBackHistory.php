<?php
//CREATED USING THE ARTISAN COMMAND TO PREVENT
//THE LOGGED OUT CONTENT TO BE ACCESSED THROUGH THE BACK BUTTON OF THE BROWSER
// php artisan make:middleware PreventBackHistory
//https://stackoverflow.com/questions/30118998/prevent-browsers-back-button-login-after-logout-in-laravel-5 
namespace App\Http\Middleware;

use Closure;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        return $response->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
