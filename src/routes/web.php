<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [RegisteredController::class, 'stamp']);
});
Route::post('/work/start', [RegisteredController::class, 'work_start']);
Route::post('/work/end', [RegisteredController::class, 'work_end']);
Route::post('/break/start', [RegisteredController::class, 'break_start']);
Route::post('/break/end', [RegisteredController::class, 'break_end']);
Route::get('/date', [RegisteredController::class, 'date']);
/*
Route::get('/register', [RegisteredController::class, 'register']);
Route::get('/login', [RegisteredController::class, 'login']);
Route::post('/login', [RegisteredController::class, 'login']);
*/