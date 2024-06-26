<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerUser;
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

Route::get('/', function () {
    return view('welcome');
});



Route::controller(ControllerUser::class)->group(function() {
    Route::get('CRUD', 'CRUD')->name('CRUD');
    Route::post('/user/create','create')->name('user.create');
});

Route::get('/formulario', function () {
    return view('formulario');
});


