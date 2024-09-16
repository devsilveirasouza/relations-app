<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('home');
// Rotas de Usuários
Route::get('/users',                             [UserController::class,'index'])           ->name('users.index');
Route::get('/users/create',                      [UserController::class, 'create'])         ->name('users.create');
Route::post('/users/store',                      [UserController::class, 'store'])          ->name('users.store');
Route::get('/users/show/{user}',                 [UserController::class, 'show'])           ->name('users.show');
Route::get('/users/edit/{user}',                 [UserController::class, 'edit'])           ->name('users.edit');
Route::put('/users/update/{user}',               [UserController::class, 'update'])         ->name('users.update');
Route::delete('/users/delete/{user}',            [UserController::class, 'destroy'])        ->name('users.destroy');
// Rotas de Fornecedores
Route::get('/suppliers',                         [SupplierController::class,'index'])       ->name('suppliers.index');
Route::get('/suppliers/create',                  [SupplierController::class, 'create'])     ->name('suppliers.create');
Route::post('/suppliers/store',                  [SupplierController::class, 'store'])      ->name('suppliers.store');
Route::get('/suppliers/show/{supplier}',         [SupplierController::class, 'show'])       ->name('suppliers.show');
Route::get('/suppliers/edit/{supplier}',         [SupplierController::class, 'edit'])       ->name('suppliers.edit');
Route::put('/suppliers/update/{supplier}',       [SupplierController::class, 'update'])     ->name('suppliers.update');
Route::delete('/suppliers/delete/{supplier}',    [SupplierController::class, 'destroy'])    ->name('suppliers.destroy');
// Rotas de Categorias
Route::get('/categories',                        [CategoryController::class,'index'])       ->name('categories.index');
Route::get('/categories/create',                 [CategoryController::class,'create'])      ->name('categories.create');
Route::post('/categories/store',                 [CategoryController::class,'store'])       ->name( 'categories.store');
Route::get('categories/show/{category}',         [CategoryController::class,'show'])        ->name('categories.show');
Route::get('categories/edit/{category}',         [CategoryController::class,'edit'])        ->name('categories.edit');
Route::put('categories/update/{category}',       [CategoryController::class,'update'])      ->name('categories.update');
Route::delete('categories/delete/{category}',    [CategoryController::class,'destroy'])     ->name('categories.destroy');
// Rotas de Produtos
Route::get('/products',                      [ProductController::class,'index'])        ->name('products.index');