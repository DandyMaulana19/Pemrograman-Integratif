<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Main Feature

    // Collection Router
    Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi');
    Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksiRegistration');
    Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('addKoleksi');
    Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksiDetail');

    // User Router
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/userRegistration', [UserController::class, 'create'])->name('userRegistration');
    Route::post('/userStore', [UserController::class, 'store'])->name('addUser');
    Route::get('/userView/{user}', [UserController::class, 'show'])->name('userDetail');
});



require __DIR__ . '/auth.php';
