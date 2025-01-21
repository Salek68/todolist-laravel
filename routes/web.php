<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todos/{todo}/completed', [TodoController::class, 'completed'])->name('todo.completed');
Route::post('/todos', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');





// Categories Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');