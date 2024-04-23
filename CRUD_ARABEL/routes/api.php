<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


Route::get('/user', [EstudianteController::class, 'index']);
Route::get('/user', [EstudianteController::class, 'store']);
Route::get('/user{id}', [EstudianteController::class, 'destroy']);
