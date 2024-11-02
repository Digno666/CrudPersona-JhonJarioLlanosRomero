<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/persona', [PersonaController::class,'index']) ->name('persona.index');
           
Route::get('/persona/new',[PersonaController::class,'create'])->name('persona.new');
Route::post('/persona/save',[PersonaController::class,'store'])->name('persona.save');           
Route::get('/persona/{id}',[PersonaController::class,'show'])->where('id','[0-9]+')->name('persona.show');
Route::get('/persona/{amigo}/edit', [PersonaController::class,'edit'])->name('persona.edit');
Route::put('/persona', [PersonaController::class,'update'])->name('persona.update');               
Route::delete('/persona/rem={id}', [PersonaController::class, 'delete'])
    ->where('id', '[0-9]+')
    ->name('persona.delete');

