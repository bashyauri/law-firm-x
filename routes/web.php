<?php

use App\Http\Controllers\ClientController;
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
    return redirect()->route('/');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/clients/register', [ClientController::class,'store'])->name('store');
Route::get('/clients/create', [ClientController::class,'create'])->name('create');
Route::get('/clients', [ClientController::class,'index'])->name('/');
Route::get('/clients/show/{id}', [ClientController::class,'show'])->name('show');
