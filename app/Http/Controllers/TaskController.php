<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;

class TaskController extends Controller
{
    public function index()
    {

        return view('task.task_list');
    }

    public function addTasks()

    {

        $teams=Team::all();
        $jobcategories=JobCategories::all();
        return view('task.task_list',['teams'=>$teams,'jobcategories'=>$jobcategories]);
    }
    public function addTaskSubmit(Request $request)
    {
        $data=$request->except('_token');

        $task=Task::create($data);
       // Task::create($data);
        return redirect('tasks')->with('success','Invoice added successfully!');
    }

}
