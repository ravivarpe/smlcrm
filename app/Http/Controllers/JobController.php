<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;
use App\Models\Contact;
use App\Models\User;

class JobController extends Controller
{
    public function index()
    {
       $jobcategories=JobCategories::all();
       $companies=Company::all();
       $jobs=Job::with(['company','category','team','contact','staff'])->get();
       return view('jobs.job_list',['jobs'=>$jobs,'jobcategories'=>$jobcategories,'companies'=>$companies]);
    }

    public function categoryWiseJob($id)
    {
       $jobcategories=JobCategories::all();
       $companies=Company::all();
       $jobs=Job::with(['company','category','team','contact','staff'])->where('job_cat_id',$id)->get();
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
        Job::create($data);

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

        Job::where('id',$id)->update($data);


        return redirect('jobs')->with('success','Job added successfully!');

    }

    public function deleteJob($id)
    {
        Job::where('id',$id)->delete();
        return redirect('jobs')->with('success','Job deleted successfully!');
    }
}
