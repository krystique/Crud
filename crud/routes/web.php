<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/{students}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{students}/update', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/{students}/destroy', [StudentController::class, 'destroy'])->name('students.destroy');


Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');

Route::get('/teachers/{teachers}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{teachers}/update', [TeacherController::class, 'update'])->name('teachers.update');

Route::delete('/teachers/{teachers}/destroy', [TeacherController::class, 'destroy'])->name('teachers.destroy');