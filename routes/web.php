<?php

use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('categorias', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

    Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
    Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
    Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
    Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

});

require __DIR__.'/auth.php';
