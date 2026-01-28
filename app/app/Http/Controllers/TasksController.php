<?php

namespace App\Http\Controllers;

use App\Models\Tasks;

class TasksController extends Controller
{
    //
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Tasks::all()
        ]);
    }

    public function create()
    {
        return view('tasks/create');
    }

    public function store()
    {
        $validateData = request()->validate([
            'title' => 'required|min:3|max:255',
            'description' => ['required', 'min:4'],
        ]);

        $validateData['completed'] = is_null(request('completed')) ? 0 : 1;

        Tasks::create($validateData);

        return redirect('project1/tasks/');
    }

    public function show($id)
    {
        $task = Tasks::findOrFail($id);
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function edit($id)
    {
        $task = Tasks::findOrFail($id);
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update($id)
    {
        $task = Tasks::findOrFail($id);
        $task->title = request('title');
        $task->description = request('description');
        $task->completed = is_null(request('completed')) ? 0 : 1;
        $task->save();
        return redirect('project1/tasks');
    }

    public function destroy($id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();
        return redirect('project1/tasks');
    }

}
