<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;


class CountCartItemsMiddleware {
    public function handle($request, Closure $next) {
        if(auth()->check()) {
            $count = Cart::where('user_id', auth()->user()->id)->count();
            view()->share('count', $count);
        } else {
            view()->share('count', 0);
        }
        return $next($request);
    }
}
