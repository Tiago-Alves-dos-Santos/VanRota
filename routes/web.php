<?php

use App\Http\Controllers\LoginController;
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

Route::get('/{tipo?}', [LoginController::class, 'index'])->name('login');
Route::get('/login/teste', function(){
    return view('developer.donos');
})->name('rota_dois');
Route::get('/login/teste2', function(){
    return view('developer.dashboard');
})->name('rota_um');
