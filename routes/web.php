<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LoginController::class, 'abrirView']);
//Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
//Route::get('/slidebar', [App\Http\Controllers\SlidebarController::class, 'slidebar']);
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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/contato', function () {
    return view('contato');
});
