<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::get('/servicios', [ServiceController::class, 'index'])->name('servicios');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos');
Route::get('/blog', [BlogController::class, 'index'])->name('blogs');



Route::post('contactanos', [ContactController::class,'store'])->name('contacto.store');
