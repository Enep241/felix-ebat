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
    if($user->hasRole('customer')) {
        return view('archive', ['devis' => $user->devis()->get()]);
    } elseif($user->hasRole('supervisor')) {
        return view('archive', ['devis' => App\Models\Devis::all()]);
    }
})->middleware(['auth'])->name('archive');

Route::get('/archive/{id}', [DevisController::class,'show'])->middleware(['auth'])->name('analyze');

Route::post('/devis/create', [DevisController::class,'store'])->middleware(['auth']);
Route::post('/devis/{id}/validate', [DevisController::class,'validate'])
    ->middleware(['auth'])->name('validate');
Route::post('/devis/{id}/unvalidate', [DevisController::class,'unvalidate'])
    ->middleware(['auth'])->name('unvalidate');

Route::get('/demande', function () {
    return view('demande');
})->middleware(['auth'])->name('demande');

# une route pour telecharger / voir le pdf
Route::get('pdfview',array('as'=>'pdfview','uses'=>'DevisController@pdfview'));
Route::get('pdf_download', 'DevisController@pdfDownload');

require __DIR__.'/auth.php';
