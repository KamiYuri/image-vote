<?php

use App\Http\Controllers\ImageController;
use App\View\Home;
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

Route::get('/home/{mssv}', [Home::class, 'show'])->name('home.show');
Route::get('/login', [Home::class, 'login'])->name('home.login');

Route::post('/vote', [ImageController::class, 'vote'])->name('vote');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
