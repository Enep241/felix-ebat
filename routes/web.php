<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/archive', function () {
    $user = Auth::user();
    return view('archive', ['devis' => $user->devis()->get()]);
})->middleware(['auth'])->name('archive');

Route::get('/archive/{id}', [DevisController::class,'show'])->middleware(['auth'])->name('analyze');

Route::post('/devis/create', [DevisController::class,'store'])->middleware(['auth']);

Route::get('/demande', function () {
    return view('demande');
})->middleware(['auth'])->name('demande');

require __DIR__.'/auth.php';
