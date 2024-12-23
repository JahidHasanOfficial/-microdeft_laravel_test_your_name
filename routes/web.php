<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequisitionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [RequisitionController::class, 'index'])->name('requisitions.index');
Route::get('/requisitions/create', [RequisitionController::class, 'create'])->name('requisitions.create');
Route::post('/requisitions', [RequisitionController::class, 'store'])->name('requisitions.store');
Route::get('/requisitions/{id}', [RequisitionController::class, 'show'])->name('requisitions.show');
Route::get('/requisitions/{id}/edit', [RequisitionController::class, 'edit'])->name('requisitions.edit');
Route::put('/requisitions/{id}', [RequisitionController::class, 'update'])->name('requisitions.update');
Route::delete('/requisitions/{id}', [RequisitionController::class, 'destroy'])->name('requisitions.destroy');
