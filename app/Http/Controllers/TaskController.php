<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('pages.erp.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }

    public function filtering(Request $request)
    {
        $query = Task::query();

        if ($request->has('status')) {
            if($request->status == 'all'){
                $tasks = $query->orderBy('due_date', 'asc')->get();
                return view('pages.erp.task.index', compact('tasks'));
            }
            $query->where('status', $request->status);
        }

        $tasks = $query->orderBy('due_date', 'asc')->get();

        return view('pages.erp.task.index', compact('tasks'));
    }
}
