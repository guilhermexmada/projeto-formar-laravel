<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;

Route::get('/', function () {
    return view('welcome');
});

//route por controlador 
Route::get('/professores', [ProfessorController::class, 'index']);

//route por controlador para página de cadastro
Route::get('/professores/create', [ProfessorController::class, 'create'])->name('professor.create');

//route por controlador para página 
Route::post('/professores/store', [ProfessorController::class, 'store'])->name('professor.store');

//route por controlador para aluno
Route::get('/alunos', [AlunoController::class, 'index']);

//route por controlador para página de cadastro de alunos
Route::get('alunos/create', [AlunoController::class, 'create'])->name('aluno.create');

//route por controlador para página 
Route::post('alunos/store', [AlunoController::class, 'store'])->name('aluno.store');
