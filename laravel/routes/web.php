<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SumController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello';
});

Route::get('/hello/sup', function () {
    return 'hello/sup';
});

Route::get('hello/super/{color}', [HelloController::class, 'index']);

Route::get('/hello-blade', [HelloController::class, 'helloBlade']);

Route::get('/bye-blade', [HelloController::class, 'byeByeBlade']);
