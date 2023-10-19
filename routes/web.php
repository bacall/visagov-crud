<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MailController;
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

Route::get('/', function () {
    return view('index');
});

Route::get(
    '/libros', [BookController::class, 'index'])->name('viewBooks');


Route::get(
    '/libros/nuevo', [BookController::class, 'create'])->name('createBook');


Route::post(
    '/libros/guardar', [BookController::class, 'store'])->name('saveBook');

Route::get(
    '/libros/editar/{id}', [BookController::class, 'edit'])->name('editBook');

Route::post(
    '/libros/modificar', [BookController::class, 'update'])->name('updateBook');

Route::get(
    '/libros/eliminar/{id}', [BookController::class, 'destroy'])->name('deleteBook');


Route::get('make-email', [MailController::class, 'index'])->name('makeEmail');

Route::get('send-email', [MailController::class, 'send'])->name('sendEmail');



