<?php

namespace App\Http\Controllers;

use App\Models\CalendarCategory;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;
use App\Models\SiteVisitTask;
use App\Models\User;

class CalendarController extends Controller
{

    public function index()
    {
        $tasks=Task::with(['team','jobcategories'])->get();
        $calanders=CalendarCategory::all();
        $companies=Company::all();
        return view('calendar.calendar_list',['tasks'=>$tasks,'companies'=>$companies, 'calanders'=>$calanders]);
    }

    public function siteVisit($contactId)
    {

        $teams=User::all();
        $jobcategories=JobCategories::all();
        $companies=Company::all();
        $calanders=CalendarCategory::all();

        return view('calendar.sitevisit',['companies'=>$companies, 'calanders'=>$calanders,'teams'=>$teams,'jobcategories'=>$jobcategories,'contactId'=>$contactId]);
    }

    public function addSitVisitTaskSubmit(Request $request)
    {
        $data=$request->except('_token');
        $data['start_date']=date('Y-m-d',strtotime($data['start_date']));
        $data['end_date']=date('Y-m-d',strtotime($data['end_date']));
        $task=SiteVisitTask::create($data);
        echo 'success';
        //return redirect('get-site-visit')->with('success','Task added successfully!');
    }

    public function getSiteVisitEvents()
    {
       $taskArray=[];
       $start_date=date('Y-m-01');
       $end_date=date('Y-m-t');
       $tasks=SiteVisitTask::with(['team','jobcategories'])->whereBetween('start_date',[$start_date,$end_date])->get();
        foreach($tasks as $task)
        {
            $taskArray[]=array(
                "title"=> $task->jobcategories->name .' '. $task->team->staff_name. ": ".$task->task_name,
                "start"=> $task->start_date,
                "color"=> $task->team->colour_code
            );

        }
        return response()->json($taskArray);
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
