<?php

use App\Http\Controllers\BusController;
use Illuminate\Http\Request;
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
    return view('welcome');
});

// 1. Register route, 
// 2. define a controller with action, 
// 3.hit the route
Route::get('/form', [BusController::class, 'showForm']);

Route::get('/bus-info', [BusController::class, 'showInfo']);

Route::get('/buses', [BusController::class, 'index'])->name('buses.index');

Route::get('/buses/{bus}', [BusController::class, 'show'])->name('buses.show');
