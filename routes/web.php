<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Login;

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

Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/home', Home::class)->name('home');
});

Route::get(
    '/{any?}',
    fn () => auth()->check() ? abort(404) : redirect()->to(route('login'))
);
