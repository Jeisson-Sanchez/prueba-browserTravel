<?php

use App\Http\Controllers\HumidityController;
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
    return view('viewHumidity');
});

// Route::get('/', [HumidityController::class, 'index']);

Route::post('/humidity', [HumidityController::class, 'show']);
Route::get('/history', [HumidityController::class, 'indexHistory']);
