<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

use App\Models\Company;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Snagging;
use App\Models\Enquiry;
use App\Models\Team;
use App\Models\SnaggingImage;
use App\Models\ReferralType;
use App\Models\PlanningTask;



class SnaggingController extends Controller
{
    public function index()
    {
        $companies=Company::all();

        $snaggings=Snagging::with(['company','contact','team'])->orderBy('complete_date')->get();
        return view('snagging.snagginglist',['snaggings'=>$snaggings,'companies'=>$companies]);
    }

    public function companyWiseSnagging($id)
    {
        $companies=Company::all();
        $snaggings=Snagging::with(['company','contact','team'])->where('company_id',$id)->get();
        return view('snagging.snagginglist',['snaggings'=>$snaggings,'companies'=>$companies]);
    }

    public function addSnagging()
    {
        $companies=Company::all();
        $categories=Category::all();
        $teams=Team::all();

        return view('snagging.addsnagging',['companies'=>$companies,'categories'=>$categories,'teams'=>$teams]);
    }

    public function addSnaggingSubmit(Request $request)
    {
        $request->validate([
            'title' =>'required',

            ]);
         $data=$request->except('_token');
         $data['report_datetime']=date('Y-m-d',strtotime($request->report_datetime));
         $data['complete_date']=date('Y-m-d',strtotime($request->complete_date));

         $snagging=Snagging::create($data);

         if($data['add_to_cal']==1)
         {
            PlanningTask::create(['task_name'=>$data['title'], 'start_date'=>$data['report_datetime'], 'end_date'=>$data['complete_date'], 'team_id'=>$data['team_id'] ,'ref_id'=>$snagging->id,'task_type'=>"Snagging"]);
         }


         return redirect('snagging-lists')->with('success','Snagging added successfully!');
    }

    public function editSnagging($id)
    {
        $companies=Company::all();
        $categories=Category::all();
        $teams=Team::all();
        $snagging=Snagging::with(['company','contact','team'])->where('id',$id)->first();

        return view('snagging.editsangging',['companies'=>$companies,'categories'=>$categories,'snagging'=>$snagging, 'teams'=>$teams]);
    }

    public function editSnaggingSubmit(Request $request,$id)
    {
        $request->validate([
            'title' =>'required',

             ]);
         $data=$request->except('_token');

        // $snag_images=$data['snag_images'];

         unset($data['contact_name']);
         unset($data['address']);

       //  unset($data['snag_images']);

         $data['report_datetime']=date('Y-m-d',strtotime($request->report_datetime));
         $data['complete_date']=date('Y-m-d',strtotime($request->complete_date));
         $snagging=Snagging::where('id',$id)->update($data);

         if($data['add_to_cal']==1)
         {
            PlanningTask::create(['task_name'=>$data['title'], 'start_date'=>$data['report_datetime'], 'end_date'=>$data['complete_date'], 'team_id'=>$data['team_id'] ,'ref_id'=>$id,'task_type'=>"Snagging"]);
         }

         return redirect('snagging-lists')->with('success','Snagging edited successfully!');
    }



    public function deleteSnagging($id)
    {
        Snagging::where('id',$id)->delete();
        return redirect('snagging-lists')->with('success','Snagging added successfully!');
    }

}
