<?php

use App\Http\Controllers\RequisitionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [RequisitionController::class, 'index'])->name('home');
Route::get('/requisitions', [RequisitionController::class, 'index'])->name('requisitions.index');
Route::get('/requisitions/create', [RequisitionController::class, 'create'])->name('requisitions.create');
Route::post('/requisitions', [RequisitionController::class, 'store'])->name('requisitions.store');
Route::get('/requisitions/{id}', [RequisitionController::class, 'show'])->name('requisitions.show');
Route::get('/requisitions/{id}/edit', [RequisitionController::class, 'edit'])->name('requisitions.edit');
Route::put('/requisitions/{id}', [RequisitionController::class, 'update'])->name('requisitions.update');
Route::delete('/requisitions/{id}', [RequisitionController::class, 'destroy'])->name('requisitions.destroy');
