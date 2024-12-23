<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    $totalTask = Task::all()->count();
    $pendingTask = Task::where('status', 'pending')->count();
    $progressTask = Task::where('status', 'in_progress')->count();
    $completeTask = Task::where('status', 'completed')->count();
    return view('pages.erp.home', compact('totalTask', 'pendingTask', 'progressTask', 'completeTask'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::get('/filter', [TaskController::class, 'filtering'])->name('filter');
    Route::get('users', [UserController::class, 'index'])->name('users');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
