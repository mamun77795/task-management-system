<?php

namespace App\Providers;

use App\Models\Task;
use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $totalTask = Task::all()->count();
        // view()->share('totalTask', $totalTask);

        // $pendingTask = Task::where('status', 'pending')->count();
        // view()->share('pendingTask', $pendingTask);

        // $progressTask = Task::where('status', 'in_progress')->count();
        // view()->share('progressTask', $progressTask);

        // $completeTask = Task::where('status', 'completed')->count();
        // view()->share('completeTask', $completeTask);
    }
}
