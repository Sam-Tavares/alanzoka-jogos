<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/dashboard', function () {
    $user = User::all();
    return view('dashboard',['user'=>$user]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/{id}', [ProfileController::class, 'destroy2'])->name('profile.destroy2');

    Route::get('/cadastrar', [JogosController::class, 'cadastrar'])->name('jogos-cadastrar');
    Route::post('/cadastrar', [JogosController::class, 'store'])->name('jogos-store');

    Route::get('/editar/{id}', [JogosController::class, 'editar'])->name('jogos-editar');
    Route::put('/editar/{id}', [JogosController::class, 'update'])->name('jogos-update');

    Route::delete('jogo/{id}', [JogosController::class, 'destroy'])->name('jogos-destroy');

    Route::get('/historico', [JogosController::class, 'historico'])->name('jogos-historico');

    Route::get('/baixar', [JogosController::class, 'export'])->name('jogos-export');

});

require __DIR__.'/auth.php';

Route::controller(JogosController::class)->group(function () {

    Route::get('/', [JogosController::class, 'index'])->name('jogos-home');

    Route::get('/progamados', [JogosController::class, 'programados'])->name('jogos-programados');

    Route::get('/lancamentos', [JogosController::class, 'lancamentos'])->name('jogos-lancamentos');

    Route::get('/finalizados/{ano}', [JogosController::class, 'finalizados'])->name('jogos-finalizados');
    Route::post('/finalizados', [JogosController::class, 'ano'])->name('jogos-ano');

    Route::get('/jogo/{id}', [JogosController::class, 'visualizar'])->name('jogos-visualizar');

    Route::get('/game', [JogosController::class, 'game'])->name('jogos-game');

});
