<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
use App\Models\Support;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', [SiteController::class, 'contact']);

Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');

Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');