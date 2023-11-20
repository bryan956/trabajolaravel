<?php

use App\Http\Controllers\Carrera\CarreraController;
use App\Http\Controllers\Estudiantes\EstudianteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;

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

Route::get('/',[PublicController::class,'index'])->name('public.index');

// Route::get('/index', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/estudiantes', EstudianteController::class);
    Route::resource('/carreras', CarreraController::class);
});

require __DIR__.'/auth.php';
require __DIR__.'/api.php';
