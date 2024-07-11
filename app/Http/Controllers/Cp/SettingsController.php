<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    public function settings(Request $request)
    {
        if($request->post()){
            // Za svaki post podatak ako nije token updateOrCreate AppSetting
            foreach ($request->post() as $key => $value) if ($key != "_token") AppSetting::updateOrCreate(
                ['data_key' => $key],
                ['data_value' => $value]
            );

            return Redirect::route('settings')->with('message', __('Settings have been successfully updated!'));
        }

        $data = AppSetting::all();
        return view('cp.settings', compact('data'));
    }

    public static function getAppSetting($name, $default = "")
    {
        return AppSetting::firstWhere('data_key', $name)?->data_value ?? $default;
    }
}
