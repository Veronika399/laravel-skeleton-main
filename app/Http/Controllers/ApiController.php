<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('api_key');
    }

    public function handleAction(Request $request, $action)
    {
        $apiKey = $request->attributes->get('api_key');

        if (method_exists($this, $action)) {
            return $this->{$action}($request);
        } else {
            abort(404, 'Not Found');
        }
    }

    public function ping()
    {
        return response()->json(['ok' => 1]);
    }
}
