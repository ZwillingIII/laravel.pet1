<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//				dd($request);

        $token = config("test.token");

        if ($request->input("token") == $token) {
            return $next($request);
        }

        info("Error request: ", [
					"code" => 400,
					"message" => "Неверный токен и твоя жизнь",
					"return" => false,
				]);

				abort(400);
    }
}
