<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index']); //tampilan index
Route::get('/edit/{id_user}', [IndexController::class, 'edit'])->name('user.edit');
Route::post('/update/{id_user}', [IndexController::class, 'update'])->name('user.update');
Route::get('/add', [IndexController::class, 'add'])->name('user.add');
Route::post('/save', [IndexController::class, 'save'])->name('user.save');
Route::get('/hapus/{id_user?}', [IndexController::class, 'hapus'])->name('user.hapus');
