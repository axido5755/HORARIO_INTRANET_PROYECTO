<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RamosController;
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

Route::get('/Horario', function () {
    return view('Horario');
});

Route::get('/' , '\App\Http\Controllers\RamosController@getramos');

Route::resource('ramos', RamosController::class);