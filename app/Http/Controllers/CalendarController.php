<?php

namespace App\Http\Controllers;

use App\Models\CalendarCategory;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;

class CalendarController extends Controller
{

    public function index()
    {
        $tasks=Task::with(['team','jobcategories'])->get();
        $calanders=CalendarCategory::all();
        $companies=Company::all();
        return view('calendar.calendar_list',['tasks'=>$tasks,'companies'=>$companies, 'calanders'=>$calanders]);
    }

    public function getEvents()
    {
       $taskArray=[];
       $start_date=date('Y-m-01');
       $end_date=date('Y-m-t');
       $tasks=Task::with(['team','jobcategories'])->whereBetween('start_date',[$start_date,$end_date])->get();
        foreach($tasks as $task)
        {
            $taskArray[]=array(
                "title"=> $task->task_name,
                "start"=> $task->start_date,
                "color"=> $task->team->colour_code
            );

        }
        return response()->json($taskArray);
    }

}
