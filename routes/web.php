<?php

use App\Http\Controllers\ProfileController;
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
Route::get('/imports', function () {
    return view('import.index'); 
});

Route::get('/dashboard', [ProfileController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //======= modulo usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //======= modulo lancamento
    Route::get('/calendario', [ProfileController::class, 'calendario'])->name('profile.calendar');
    Route::get('/lancamento', [ProfileController::class, 'lancamento'])->name('profile.lancamento');
    Route::get('/pacientes', [ProfileController::class, 'pacientesDetalhe']);
    //======= modulo agendamento
    Route::get('/agendamento', [ProfileController::class, 'agendamento'])->name('profile.agendamento');
    Route::get('/lancarAgenda', [ProfileController::class, 'lancarAgenda'])->name('profile.lancarAgenda');

});

require __DIR__.'/auth.php';
