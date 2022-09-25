<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CircleController;
use App\Http\Controllers\DiameterController;
use App\Http\Controllers\TriangleController;

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
//Triangle
Route::get('triangle/{a}/{b}/{c}', [TriangleController::class, 'index']);
//Circle
Route::get('circle/{radius}', [CircleController::class, 'index']);

//Area of Two Given Objects
// Route::get('area', [AreaController::class, 'index']);

//Area of Two Given Objects
//It is assumed that the two given objects are triangle and Circle
Route::get('area/{a}/{b}/{c}/{radius}', [AreaController::class, 'index']);

//Diameter of Two Given Objects
//It is assumed that the two given objects are triangle and Circle
Route::get('diameter/{a}/{b}/{c}/{radius}', [DiameterController::class, 'index']);
