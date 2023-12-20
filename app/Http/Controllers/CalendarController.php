<?php

namespace App\Http\Controllers;

use App\Models\CalendarCategory;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;
use App\Models\Job;
use App\Models\SiteVisitTask;
use App\Models\User;
use App\Models\PlanningTask;
use App\Models\Asset;
use App\Models\Snagging;

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

    public function planningCalendar($contactId=null)
    {

        $teams=Team::all();

        $companies=Company::all();
        $calanders=CalendarCategory::all();
        $jobcategories=JobCategories::all();
        return view('calendar.planning_cal',['companies'=>$companies, 'calanders'=>$calanders,'teams'=>$teams,'jobcategories'=>$jobcategories,'contactId'=>$contactId]);
    }

    public function addSitVisitTaskSubmit(Request $request)
    {
        $data=$request->except('_token');

        $data['start_date']=date('Y-m-d H:i:s',strtotime($data['start_date']));
        $data['end_date']=date('Y-m-d H:i:s',strtotime($data['end_date']));

        $task=SiteVisitTask::create($data);
        echo 'success';
        //return redirect('get-site-visit')->with('success','Task added successfully!');
    }

    public function getSiteVisitEvents($userid)
    {
       $taskArray=[];
       $start_date=date('Y-m-01');
       $end_date=date('Y-m-t');
       if($userid>0){
       $tasks=SiteVisitTask::with(['team','jobcategories','contact'=>function($q){$q->with(['address']);}])->whereBetween('start_date',[$start_date,$end_date])->where('team_id',$userid)->get();
       }else{
       $tasks=SiteVisitTask::with(['team','jobcategories','contact'=>function($q){$q->with(['address']);}])->whereBetween('start_date',[$start_date,$end_date])->get();
       }

       foreach($tasks as $task)
        {
            $taskArray[]=array(
                "title"=> $task->jobcategories->name .' '. $task->team->staff_name. ": ".$task->task_name.'(Re:<a href="'.url('view-contact/'.$task->contact_id).'">'.$task->contact->name.'</a>)'.$task->contact->address->pincode."(Added ".date('d/m/Y',strtotime($task->added_date_time)). " at ".date('H:i',strtotime($task->added_date_time)).")",
                "start"=> $task->start_date,
                "backgroundColor"=> $task->team->color_code.'!important',
                "color"=> $task->team->color_code,
                "textEscape"=> false,
                "description"=>$task->jobcategories->name .' '. $task->team->staff_name. ": ".$task->task_name.'(Re:<a href="'.url('view-contact/'.$task->contact_id).'">'.$task->contact->name.'</a>)'.$task->contact->address->pincode."(Added ".date('d/m/Y',strtotime($task->added_date_time)). " at ".date('H:i',strtotime($task->added_date_time)).")",
                'eventContent'=>['html'=>$task->jobcategories->name .' '. $task->team->staff_name. ": ".$task->task_name.'(Re:<a href="'.url('view-contact/'.$task->contact_id).'">'.$task->contact->name.'</a>)'.$task->contact->address->pincode."(Added ".date('d/m/Y',strtotime($task->added_date_time)). " at ".date('H:i',strtotime($task->added_date_time)).")"]
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


    public function getPlanningEvents($teamId)
    {
       $taskArray=[];
       $start_date=date('Y-m-01');
       $end_date=date('Y-m-t');
       if($teamId>0){
       $tasks=PlanningTask::with(['team'])->whereBetween('start_date',[$start_date,$end_date])->where('team_id',$teamId)->get();
       }else{
       $tasks=PlanningTask::with(['team'])->whereBetween('start_date',[$start_date,$end_date])->get();
       }

       foreach($tasks as $task)
        {
            $taskType=$task->task_type;
            $record="";

            if($taskType="Job")
            {
               // $record=Job::where('id',$task->ref_id)->first();

            }else if($taskType="Asset")
            {
               // $record=Asset::where('id',$task->ref_id)->first();

            }else if($taskType="Snagging")
            {
               // $record=Snagging::where('id',$task->ref_id)->first();

            }

            $taskArray[]=array(
                "title"=> $task->team->team_name .": ".$task->task_name.'<input type="checkbox" name="taskstatus" class="taststatus" />'."(Added ".date('d/m/Y',strtotime($task->added_date)). " at ".date('H:i',strtotime($task->added_date)).")",
                "start"=> $task->start_date,
                "end"=> $task->end_date,
                "backgroundColor"=> $task->team->color_code.'!important',
                "color"=> $task->team->color_code,
                "textEscape"=> false,

            );

        }
        return response()->json($taskArray);
    }


}
