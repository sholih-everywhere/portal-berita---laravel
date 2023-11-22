<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;

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


Route::get('/', [DashboardController::class,
'home'])->name('home');


Route::get('/about', [DashboardController::class,
'about'])->name('about');

Route::get('/categories/categories',[CategoriesController::class,
'create'])->name('category.create');

Route::post('/categories', [CategoriesController::class,
'store'])->name('category.store');

Route::get('/categories', [CategoriesController::class,
'index'])->name('category.index');

//Update Data Category
Route::get('/categories/{id}/edit', [CategoriesController::class,
'edit'])->name('category.edit');

Route::put('/categories/{id}', [CategoriesController::class,
'update'])->name('category.update');

Route::delete('/categories/{id}', [CategoriesController::class,
'destroy'])->name('category.destroy');


