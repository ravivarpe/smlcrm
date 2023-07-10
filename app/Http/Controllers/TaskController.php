<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=Task::with(['team','jobcategories'])->get();
        $teams=Team::all();
        $jobcategories=JobCategories::all();
        $companies=Company::all();
        return view('task.task_list',['teams'=>$teams,'jobcategories'=>$jobcategories,'tasks'=>$tasks,'companies'=>$companies]);
    }

    public function jobCategoryWiseTask($id)
    {
        $tasks=Task::with(['team','jobcategories'])->where('job_cat_id',$id)->get();
        $teams=Team::all();
        $jobcategories=JobCategories::all();
        $companies=Company::all();
        return view('task.task_list',['teams'=>$teams,'jobcategories'=>$jobcategories,'tasks'=>$tasks,'companies'=>$companies]);
    }

    public function addTaskSubmit(Request $request)
    {
        $data=$request->except('_token');
        $task=Task::create($data);
        return redirect('tasks')->with('success','Task added successfully!');
    }

    public function deleteTask(Request $request){
        $id=$request->task_id;
        Task::where('id',$id)->delete();
        return redirect('tasks')->with('success','Task Deleted successfully!');
    }

    public function editTask($id)
    {
       $task=Task::where('id',$id)->first();
       return response()->json($task);
    }

    public function editTaskSubmit(Request $request,$id){
        $data=$request->except('_token');
        Task::where('id',$id)->update($data);
        return redirect('tasks')->with('success','Task Deleted successfully!');
    }



}
