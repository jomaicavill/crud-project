<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🔹 Redirect homepage → students list
Route::get('/', function () {
    return redirect()->route('students.index');
});

// 🔹 Student CRUD (index, create, store, show, edit, update, destroy)
Route::resource('students', StudentController::class);

// 🔹 About Page
Route::view('/about', 'about')->name('about');