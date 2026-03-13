<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        if ($user->role === 'directeur') {
            return view('director.dashboard');
        }

        return view('dashboard.index');
    })->name('dashboard');

    Route::view('/documents', 'documents.index')->name('documents.index');
    Route::view('/documents/create', 'documents.create')->name('documents.create');
    Route::view('/documents/1', 'documents.show')->name('documents.show');

    Route::view('/assignments', 'assignments.index')->name('assignments.index');
    Route::view('/comments', 'comments.index')->name('comments.index');

    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::view('/admin/users', 'admin.users')->name('admin.users');
        Route::view('/admin/roles', 'admin.roles')->name('admin.roles');
        Route::view('/admin/services', 'admin.services')->name('admin.services');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
