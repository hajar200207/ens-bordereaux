<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Test UI routes
|--------------------------------------------------------------------------
| Routes temporaires pour tester le design frontend
*/

Route::view('/', 'auth.login')->name('login.test');
Route::view('/dashboard', 'dashboard.index')->name('dashboard.test');
Route::view('/documents', 'documents.index')->name('documents.index');
Route::view('/documents/create', 'documents.create')->name('documents.create');
Route::view('/documents/1', 'documents.show')->name('documents.show');
Route::view('/assignments', 'assignments.index')->name('assignments.index');
Route::view('/comments', 'comments.index')->name('comments.index');
Route::view('/admin/users', 'admin.users')->name('admin.users');
Route::view('/admin/roles', 'admin.roles')->name('admin.roles');
Route::view('/admin/services', 'admin.services')->name('admin.services');

/*
|--------------------------------------------------------------------------
| Profile (optionnel)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
