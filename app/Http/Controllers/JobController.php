<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;
use App\Models\Snagging;
use App\Models\User;
use App\Models\JobImage;
use App\Models\PlanningTask;
use App\Models\InvoiceType;
use App\Models\Invoice;
use App\Models\CallLog;

class JobController extends Controller
{
    public function index()
    {
       $jobcategories=JobCategories::all();
       $companies=Company::all();
       $jobs=Job::with(['company','category','team','contact','staff'])->where('status','Won')->get();
       return view('jobs.job_list',['jobs'=>$jobs,'jobcategories'=>$jobcategories,'companies'=>$companies]);
    }

    public function categoryWiseJob($id)
    {
       $jobcategories=JobCategories::all();
       $companies=Company::all();
       $jobs=Job::with(['company','category','team','contact','staff'])->where('job_cat_id',$id)->where('status','Won')->get();
       return view('jobs.job_list',['jobs'=>$jobs,'jobcategories'=>$jobcategories,'companies'=>$companies]);
    }

    public function statusWiseJob($status)
    {
       $jobcategories=JobCategories::all();
       $companies=Company::all();
       $jobs=Job::with(['company','category','team','contact','staff'])->where('status',$status)->get();
       return view('jobs.job_list',['jobs'=>$jobs,'jobcategories'=>$jobcategories,'companies'=>$companies]);
    }

    public function companyWiseJob($id)
    {
       $jobcategories=JobCategories::all();
       $companies=Company::all();
       $jobs=Job::with(['company','category','team','contact','staff'])->where('company_id',$id)->get();
       return view('jobs.job_list',['jobs'=>$jobs,'jobcategories'=>$jobcategories,'companies'=>$companies]);
    }

    public function addJob()
    {
        $teams=Team::all();
        $jobcategories=JobCategories::all();
        $companies=Company::all();
        $users=User::where('is_staff',1)->get();
        return view('jobs.add_job',['users'=>$users,'teams'=>$teams,'jobcategories'=>$jobcategories,'companies'=>$companies]);
    }

    public function addJobSubmit(Request $request)
    {
        $request->validate([
            'job_title' =>'required'
             ]);

        $data=$request->except('_token');

        $data['start_date']=date('Y-m-d',strtotime($data['start_date']));
        $data['end_date']=date('Y-m-d',strtotime($data['end_date']));

        $job=Job::create($data);
        if($request->hasFile('photos'))
        {
            foreach($request->file('photos') as $key => $file)
            {
                $fileName = time().rand(1,99).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/jobphotos'), $fileName);
                JobImage::create(['image_name'=>$fileName,'job_id'=>$job->id]);
            }
        }

         if($data['plan_calendar']==1)
         {
            PlanningTask::create(['task_name'=>$data['job_title'], 'start_date'=>$data['start_date'], 'end_date'=>$data['end_date'], 'team_id'=>$data['team_id'] ,'ref_id'=>$job->id,'task_type'=>"Job"]);
         }


        return redirect('jobs')->with('success','Job added successfully!');
    }

    public function editJob($id)
    {
        $job=Job::with(['company','category','team','contact','staff'])->where('id',$id)->first();
        $teams=Team::all();
        $jobcategories=JobCategories::all();
        $companies=Company::all();
        $users=User::where('is_staff',1)->get();
        return view('jobs.edit_job',['users'=>$users,'job'=>$job,'teams'=>$teams,'jobcategories'=>$jobcategories,'companies'=>$companies]);

    }

    public function editJobSubmit(Request $request,$id)
    {
        $request->validate([
            'job_title' =>'required'

             ]);
        $data=$request->except('_token');
        unset($data['address']);
        unset($data['address2']);
        unset($data['address3']);
        unset($data['country']);
        unset($data['state']);
        unset($data['city']);
        unset($data['zip']);
        unset($data['picture']);
        unset($data['old_picture']);
        unset($data['contact_name']);

        $data['start_date']=date('Y-m-d',strtotime($data['start_date']));
        $data['end_date']=date('Y-m-d',strtotime($data['end_date']));

        Job::where('id',$id)->update($data);

        if($data['plan_calendar']==1)
         {
            PlanningTask::create(['task_name'=>$data['job_title'], 'start_date'=>$data['start_date'], 'end_date'=>$data['end_date'], 'team_id'=>$data['team_id'] ,'ref_id'=>$id,'task_type'=>"Job"]);
         }

        return redirect('jobs')->with('success','Job added successfully!');

    }

    public function deleteJob($id)
    {
        Job::where('id',$id)->delete();
        return redirect('jobs')->with('success','Job deleted successfully!');
    }

    public function jobDetails($jobId)
    {
        $job=Job::with(['company','category','team','contact','staff'])->where('id',$jobId)->first();
        $teams=Team::all();
        $jobcategories=JobCategories::all();
        $companies=Company::all();
        $invoiceTypes=InvoiceType::get();

        $quotes=Invoice::with(['invoicetype'])->where('contact_id',$job->contact_id)->get();

        $snaggings=Snagging::with(['company','contact','team'])->where('contact_id',$job->contact_id)->get();

        $callLogs=CallLog::with(['staff','job'])->where('job_id',$jobId)->get();
        return view('jobs.view_job',['job'=>$job,'teams'=>$teams,'jobcategories'=>$jobcategories,'companies'=>$companies,'snaggings'=>$snaggings,'invoiceTypes'=>$invoiceTypes,'quotes'=>$quotes,'callLogs'=>$callLogs]);
    }

    public function changeJobStage(Request $request,$id)
    {
        Job::where('id',$id)->update(['status_two'=>$request->status_two]);
        return redirect('view-job-details/'.$id)->with('success','Job deleted successfully!');
    }

    public function addCallLog(Request $request,$id)
    {
        CallLog::create(['job_id'=>$id,'staff_id'=>$request->staff_id,'calllogs'=>$request->calllogs]);
        return redirect('view-job-details/'.$id)->with('success','Job deleted successfully!');
    }

}
