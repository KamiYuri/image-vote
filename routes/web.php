<?php

use App\Http\Controllers\ImageController;
use App\View\Welcome;
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

Route::get('/', [Welcome::class, 'show'])->name('welcome');

Route::post('/vote', [ImageController::class, 'vote'])->name('vote');
