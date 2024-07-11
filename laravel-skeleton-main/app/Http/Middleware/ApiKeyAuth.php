<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('api-key');

        if (!$apiKey) {
            return response()->json([
                'status' => false,
                'message' => 'Please provide an api key',
                'data' => null
            ], 401);
        }

        $apiKey = ApiKey::firstWhere('api_key', $apiKey);
        if (!$apiKey) {
            return response()->json([
                'status' => false,
                'message' => 'Please provide a valid api key',
                'data' => null
            ], 401);
        }

        if(!$apiKey->active){
            return response()->json([
                'status' => false,
                'message' => 'Your api key is disabled',
                'data' => null
            ], 401);
        }

        $request->attributes->add(['api_key' => $apiKey]);
        return $next($request);
    }
}
