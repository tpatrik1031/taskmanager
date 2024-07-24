<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    public function index()
    {
        $tasks = Task::get();
        return view("tasks.index", compact("tasks"));
    }

    public function create()
    {
        return view("tasks.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description'=> 'required',
            'is_active'=> 'sometimes'
        ]);

        Task::create([
            'title' => $request->title,
            'description'=> $request->description,
            'is_active'=>$request->is_active == true ? 1:0

        ]);

        return redirect('tasks/create')->with('status','Success');
    }

    public function edit(int $id)
    {
        $task = Task::find($id);
        return view('tasks/edit', compact('task'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'is_active'=> 'sometimes'
            ]);
        
        Task::findOrFail($id)->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'is_active'=>$request->is_active == true ? 1:0
        ]);

        return redirect()->back()->with('status','success');
    }

    public function delete(int $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('status','deleted');
    }
}
