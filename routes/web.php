<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    // dashboard route
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    // toy route
    Route::controller(ToyController::class)->prefix('toy')->name('toy.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'createView')->name('create.view');
        Route::post('/create', 'createAction')->name('create.action');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
});
