<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('students', [\App\Http\Controllers\StudentController::class, 'index'])->name('index');
Route::put('students/{student}', [\App\Http\Controllers\StudentController::class, 'update'])->name('update');
Route::get('students/logout', [\App\Http\Controllers\StudentController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
