<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('task.index',compact('tasks'));
    }
    
    public function edit($id){
        $tasks = Task::find($id);
        return view('task.edit',compact('tasks'));
    }
    public function update(TaskRequest $request){
        $validatedData = $request->validated();
        Task::where('id', $request['id'])->update($validatedData);
        return redirect('/task');
    } 
    public function delete(Task $task){
        $task->delete();
        return redirect('/task');
    }
   
    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request){
        $validatedData = $request->validated();
        task::create($validatedData);
        return redirect('/task');
    }

    public function show(Task $task){
        return view('task.show',compact('task'));
    }
}
    