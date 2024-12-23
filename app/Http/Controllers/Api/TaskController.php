<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        if (!empty($tasks)) {
            return Response::json(['tasks' => $tasks], 200);
        } else {
            return Response::json(['message' => 'No tasks found'], 404);
        }
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
        $data  = array();
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['status'] = $request->input('status');
        $data['due_date'] = $request->input('due_date');
        $data['user_id'] = $request->input('user_id');
        $data['created_at'] = Carbon::now();

        $task = Task::create($data);

        if ($task) {
            return Response::json(['message' => 'New task has been added successfully'], 200);
        } else {
            return Response::json(['message' => 'Something went wrong'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);

        if ($task) {
            return Response::json(['tasks' => $task], 200);
        } else {
            return Response::json(['message' => 'No tasks found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        if($request->isMethod('PUT')){
            $data  = array();
            $data['title'] = $request->input('title');
            $data['description'] = $request->input('description');
            $data['status'] = $request->input('status');
            $data['due_date'] = $request->input('due_date');
            $data['user_id'] = $request->input('user_id');
            $data['updated_at'] = Carbon::now();

            $task = Task::where('id', $id)->update($data);
        }
        
        if($request->isMethod('PATCH')){
            $find = Task::find($id);
            $task = $find->update($request->all());
        }
        

        if ($task) {
            return Response::json(['message' => 'Task data has been updated successfully'], 200);
        } else {
            return Response::json(['message' => 'Something went wrong'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::where('id', $id)->delete();

        if ($task) {
            return Response::json(['message' => 'Task has been deleted successfully'], 200);
        } else {
            return Response::json(['message' => 'Something went wrong'], 404);
        }
    }
}
