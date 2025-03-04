<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Restaurant;

class ShareRestaurant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Change the logic here based on your requirements
        // For example, share the first restaurant from the database
        $restaurant = Restaurant::first(); // Or use logic to get the restaurant

        // Share restaurant data with all views
        view()->share('restaurant', $restaurant);

        return $next($request);
    }
}
