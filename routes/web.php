<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\IngredientenController;
use  App\Http\Controllers\EenhedenController;
use  App\Http\Controllers\PizzaController;

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
    return view('home/home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Routes voor eenheden CRUD

Route::get('/eenheden/index', [EenhedenController::class, 'index'])->name('eenheden.index');
Route::get('/eenheden/create', [EenhedenController::class, 'create'])->name('eenheden.create');
Route::post('/eenheden', [EenhedenController::class, 'store'])->name('eenheden.store');
Route::get('/eenheden/{id}/edit', [EenhedenController::class, 'edit'])->name('eenheden.edit');
Route::put('/eenheden/{id}', [EenhedenController::class, 'update'])->name('eenheden.update');
Route::delete('/eenheden/{id}', [EenhedenController::class, 'destroy'])->name('eenheden.destroy');


// Routes voor ingrediënten CRUD

Route::get('/ingrediënten/index', [IngredientenController::class, 'index'])->name('ingrediënten.index');
Route::get('/ingrediënten/create', [IngredientenController::class, 'create'])->name('ingrediënten.create');
Route::post('/ingrediënten', [IngredientenController::class, 'store'])->name('ingrediënten.store');
Route::get('/ingrediënten/{id}/edit', [IngredientenController::class, 'edit'])->name('ingrediënten.edit');
Route::put('/ingrediënten/{id}', [IngredientenController::class, 'update'])->name('ingrediënten.update');
Route::delete('/ingrediënten/{id}', [IngredientenController::class, 'destroy'])->name('ingrediënten.destroy');
Route::get('/ingrediënten', [IngredientenController::class, 'index'])->name('ingrediënten.index');


// Routes voor Pizza CRUD

Route::get('/menu/index', [PizzaController::class, 'index'])->name('menu.index');
Route::get('/menukaart/create', [PizzaController::class, 'create'])->name('menukaart.create');
Route::post('/menu', [PizzaController::class, 'store'])->name('menu.store');
Route::get('/menu/{id}/edit', [PizzaController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{id}', [PizzaController::class, 'update'])->name('menu.update');
Route::delete('/menukaart/{id}', [PizzaController::class, 'destroy'])->name('menukaart.destroy');
Route::get('/menu', [PizzaController::class, 'index'])->name('menu.index');
