<?php

use App\Http\Controllers\ParcourController;
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

Route::get('/', [ParcourController::class,'index'])->name('accueil');
Route::post('/cyclo/store', [ParcourController::class,'store'])->name('parcour.store');
Route::get('/cyclo/all', [ParcourController::class,'liste'])->name('parcour.all');

