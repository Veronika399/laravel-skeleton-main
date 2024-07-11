<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;

class ControlPanelController extends Controller
{
    public function home()
    {
        return view('cp.home');
    }
}
