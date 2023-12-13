<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewAccountnoControllerController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/newAccountPost', [NewAccountnoControllerController::class, 'store'])->name('new_account.store');
Route::post('/check-account-number', [NewAccountnoControllerController::class, 'checkAccountNumber'])->name('checkAccountNumber');


require __DIR__.'/auth.php';
