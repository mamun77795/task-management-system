<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        return view('pages.erp.task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date|after:today',
            'status'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $data  = array();
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['status'] = $request->input('status');
        $data['due_date'] = $request->input('due_date');
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        $task = Task::create($data);
        if ($task) {
            return redirect('tasks')->with(['msg' => "Task has been successfully added"]);
        } else {
            return redirect('tasks')->with(['msg' => "Something went wrong"]);
        }
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
        return view('pages.erp.task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date|after:today',
            'status'=>'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $data  = array();
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['status'] = $request->input('status');
        $data['due_date'] = $request->input('due_date');
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        $task = Task::where('id', $task->id)->update($data);
        if ($task) {
            return redirect('tasks')->with(['msg' => "Task has been updated successfully"]);
        } else {
            return redirect('tasks')->with(['msg' => "Something went wrong"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('tasks')->with(['msg' => "Something went wrong"]);
    }

    public function filtering(Request $request)
    {
        $query = Task::query();

        if ($request->has('status')) {
            if ($request->status == 'all') {
                $tasks = $query->orderBy('due_date', 'asc')->get();
                return view('pages.erp.task.index', compact('tasks'));
            }
            $query->where('status', $request->status);
        }

        $tasks = $query->orderBy('due_date', 'asc')->get();

        return view('pages.erp.task.index', compact('tasks'));
    }
}
