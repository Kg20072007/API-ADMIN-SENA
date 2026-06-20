<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;


// 1. APRENDICES (Apprentices)
Route::get('apprentices', [ApprenticeController::class, 'index'])->name('api.v1.apprentices.index');
Route::post('apprentices', [ApprenticeController::class, 'store'])->name('api.v1.apprentices.store');
Route::get('apprentices/{id}', [ApprenticeController::class, 'show'])->name('api.v1.apprentices.show');
Route::put('apprentices/{id}', [ApprenticeController::class, 'update'])->name('api.v1.apprentices.update');
Route::delete('apprentices/{id}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentices.destroy');

// 2. ÁREAS (Areas)
Route::get('areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::post('areas', [AreaController::class, 'store'])->name('api.v1.areas.store');
Route::get('areas/{id}', [AreaController::class, 'show'])->name('api.v1.areas.show');
Route::put('areas/{id}', [AreaController::class, 'update'])->name('api.v1.areas.update');
Route::delete('areas/{id}', [AreaController::class, 'destroy'])->name('api.v1.areas.destroy');

// 3. COMPUTADORES (Computers)
Route::get('computers', [ComputerController::class, 'index'])->name('api.v1.computers.index');
Route::post('computers', [ComputerController::class, 'store'])->name('api.v1.computers.store');
Route::get('computers/{id}', [ComputerController::class, 'show'])->name('api.v1.computers.show');
Route::put('computers/{id}', [ComputerController::class, 'update'])->name('api.v1.computers.update');
Route::delete('computers/{id}', [ComputerController::class, 'destroy'])->name('api.v1.computers.destroy');

// 4. CURSOS / FICHAS (Courses)
Route::get('courses', [CourseController::class, 'index'])->name('api.v1.courses.index');
Route::post('courses', [CourseController::class, 'store'])->name('api.v1.courses.store');
Route::get('courses/{id}', [CourseController::class, 'show'])->name('api.v1.courses.show');
Route::put('courses/{id}', [CourseController::class, 'update'])->name('api.v1.courses.update');
Route::delete('courses/{id}', [CourseController::class, 'destroy'])->name('api.v1.courses.destroy');

// 5. ASIGNACIONES (Course Teachers)
Route::get('course-teachers', [CourseTeacherController::class, 'index'])->name('api.v1.courseteachers.index');
Route::post('course-teachers', [CourseTeacherController::class, 'store'])->name('api.v1.courseteachers.store');
Route::get('course-teachers/{id}', [CourseTeacherController::class, 'show'])->name('api.v1.courseteachers.show');
Route::put('course-teachers/{id}', [CourseTeacherController::class, 'update'])->name('api.v1.courseteachers.update');
Route::delete('course-teachers/{id}', [CourseTeacherController::class, 'destroy'])->name('api.v1.courseteachers.destroy');

// 6. INSTRUCTORES (Teachers)
Route::get('teachers', [TeacherController::class, 'index'])->name('api.v1.teachers.index');
Route::post('teachers', [TeacherController::class, 'store'])->name('api.v1.teachers.store');
Route::get('teachers/{id}', [TeacherController::class, 'show'])->name('api.v1.teachers.show');
Route::put('teachers/{id}', [TeacherController::class, 'update'])->name('api.v1.teachers.update');
Route::delete('teachers/{id}', [TeacherController::class, 'destroy'])->name('api.v1.teachers.destroy');

// 7. CENTROS DE FORMACIÓN (Training Centers)
Route::get('training-centers', [TrainingCenterController::class, 'index'])->name('api.v1.centers.index');
Route::post('training-centers', [TrainingCenterController::class, 'store'])->name('api.v1.centers.store');
Route::get('training-centers/{id}', [TrainingCenterController::class, 'show'])->name('api.v1.centers.show');
Route::put('training-centers/{id}', [TrainingCenterController::class, 'update'])->name('api.v1.centers.update');
Route::delete('training-centers/{id}', [TrainingCenterController::class, 'destroy'])->name('api.v1.centers.destroy');