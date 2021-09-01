<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $data = [
            ['name'=>'taro', 'mail'=>'taro@yamada.com'],
            ['name'=>'hanako', 'mail'=>'hanako@happy.com'],
            ['name'=>'kaoru', 'mail'=>'kaoru@flower.com']
        ];

        $request->merge(['data'=>$data]);

        return $next($request);
    }
}
