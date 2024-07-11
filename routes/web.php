<?php

use App\Http\Controllers\AxController;
use App\Http\Controllers\Cp\ControlPanelController;
use App\Http\Controllers\Cp\SettingsController;
use App\Http\Controllers\Cp\UserController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('http.auth')->group(function () {
    // Redirect to Control Panel (used to show welcome page)
    Route::get('/', fn() => Redirect::route('home'));
    

    // Auth routes
    Auth::routes(['register' => true]);

    Route::middleware('auth')->group(function () {
        // Control Panel
        Route::get('/cp', [ControlPanelController::class, 'home'])->name('home');

        // Users
        Route::get('/cp/users', [UserController::class, 'users'])->name('users');
        Route::get('/cp/users/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/cp/users/edit', [UserController::class, 'edit'])->name('users.edit');

        //Groups
        Route::get('/cp/groups',[GroupController::class,'index'])->name('groups.index');
        Route::get('/cp/groups/{group}/edit', [GroupController::class, 'edit'])->name('groups.edit');
        Route::put('/cp/groups/{group}', [GroupController::class, 'update'])->name('groups.update');
        Route::delete('/cp/groups/{group}', [GroupController::class, 'destroy'])->name('groups.destroy');

        Route::get('/cp/groups/create', [GroupController::class, 'create'])->name('groups.create');
        Route::post('/cp/groups', [GroupController::class, 'store'])->name('groups.store');
        // Route::post('/cp/groups/{group}', [GroupController::class, 'update'])->name('groups.update');


        // Settings
        Route::get('/cp/settings', [SettingsController::class, 'settings'])->name('settings');
        Route::post('/cp/settings', [SettingsController::class, 'settings'])->name('settings');
    });

    Route::middleware('auth')->group(function () {
        Route::get('ax/{action}', [AxController::class, 'handleAction']);
        Route::post('ax/{action}', [AxController::class, 'handleAction']);
        Route::put('ax/{action}', [AxController::class, 'handleAction']);
    });
});
