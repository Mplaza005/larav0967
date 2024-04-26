<?php


namespace App\Http\Controllers;

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
// Route::get('/frmprimo',[CursoController::class,'formularioPrimo']);
// Route::post('/calcularprimo',[CursoController::class,'calcularPrimo'])->name('primo.calcular');
// Route::get('/frmproducto',[ProductController::class,'formularioProducto']);
// Route::post('/calcularprimo',[ProductController::class,'productoStore'])->name('product.store');
//Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'hola'])->name('curso.show');
//Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');


Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('/curso/create',[CursoController::class,'create']);
Route::post('/curso/store',[CursoController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');


