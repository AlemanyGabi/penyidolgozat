<?php
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;

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

Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');
Route::get('/destination/show/{id}', [DestinationController::class, 'show'])->name('destination.show');

Route::get('/destination', [ReservationsController::class, 'display'])->middleware(AdminMiddleware::class)->name('destination.display');
require __DIR__.'/auth.php';
