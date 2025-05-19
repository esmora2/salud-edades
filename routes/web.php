<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeFormController;
use App\Http\Controllers\GrupoEtario\{
    BebesController,
    NinosController,
    AdolescentesController,
    JovenesController,
    AdultosController,
    MayoresController,
    LongevosController
};

Route::get('/', [AgeFormController::class, 'showForm']);
Route::post('/procesar-edad', [AgeFormController::class, 'processAge'])->middleware('age.classifier');


// Página de error para edades inválidas
Route::view('/edad-invalida', 'error.edad');

// Rutas por grupo etario
Route::get('/bebes', [BebesController::class, 'index']);
Route::get('/ninos', [NinosController::class, 'index']);
Route::get('/adolescentes', [AdolescentesController::class, 'index']);
Route::get('/jovenes', [JovenesController::class, 'index']);
Route::get('/adultos', [AdultosController::class, 'index']);
Route::get('/mayores', [MayoresController::class, 'index']);
Route::get('/longevos', [LongevosController::class, 'index']);