<?php

use App\Http\Controllers\AlumnoControler;
use App\Http\Middleware\EnsureIDIsValid;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumnos', AlumnoControler::class);
Route::get('/alumno', [AlumnoControler::class, 'index']);      // Obtener todos
Route::get('/alumno/{id}', [AlumnoControler::class, 'show']);  // Obtener por ID
Route::post('/alumno', [AlumnoControler::class, 'store']);     // Crear
Route::put('/alumno/{id}', [AlumnoControler::class, 'update'])->middleware(EnsureIDIsValid::class);; // Modificar
Route::delete('/alumno/{id}', [AlumnoControler::class, 'destroy']); // Borrar
