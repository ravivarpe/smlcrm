<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

use App\Models\Enquiry;
use App\Models\Company;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\EnquiryNote;
use App\Models\ReferralType;


class EnquiryController extends Controller
{
    public function index()
    {
        $companies=Company::all();
        $enquiries=Enquiry::with(['company'])->where('status','!=','Complete')->orderBy('company_id')->get();
        $teams=Team::all();
        $jobcategories=JobCategories::all();

        return view('enquiries.enquiry_list',['enquiries'=>$enquiries,'companies'=>$companies]);
    }

    public function companyWiseEnquiry($id)
    {
        $companies=Company::all();
        $enquiries=Enquiry::with(['company'])->where('company_id',$id)->get();
        return view('enquiries.enquiry_list',['enquiries'=>$enquiries,'companies'=>$companies]);
    }

    public function statusWiseEnquiry($status)
    {
        $companies=Company::all();
        $enquiries=Enquiry::with(['company'])->where('status',$status)->get();
        return view('enquiries.enquiry_list',['enquiries'=>$enquiries,'companies'=>$companies]);
    }

    public function addEnquiry()
    {
        $companies=Company::all();
        return view('enquiries.add_enquiry',['companies'=>$companies]);
    }

    public function addEnquirySubmit(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone' =>'required |numeric|min:11',
            'post_code'=>'required',

             ]);
         $data=$request->except('_token');
         Enquiry::create($data);
         return redirect('enquiries')->with('success','Enquiry added successfully!');
    }

    public function editEnquiry($id)
    {
        $companies=Company::all();
        $enquiry=Enquiry::with(['company'])->where('id',$id)->first();
        return view('enquiries.edit_enquiry',['companies'=>$companies,'enquiry'=>$enquiry]);
    }

    public function editEnquirySubmit(Request $request,$id)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone' =>'required |numeric|min:11',
            'post_code'=>'required |numeric',

             ]);
         $data=$request->except('_token');
         Enquiry::where('id',$id)->update($data);
         return redirect('enquiries')->with('success','Enquiry edited successfully!');
    }

    public function enquiryDetails($id)
    {
        $enquiry=Enquiry::with(['company'])->where('id',$id)->first();
        $companies=Company::all();

        $teams=Team::all();
        $jobcategories=JobCategories::all();

        $notes=EnquiryNote::where('enquiry_id',$id)->orderBy('added_date','DESC')->get();

        $entasks=Task::where('contact_id',$id)->where('en_contact','Enquiry')->get();


        return view('enquiries.view_enquiry',['teams'=>$teams,'jobcategories'=>$jobcategories,'enquiry'=>$enquiry,'notesdata'=>$notes,'entasks'=>$entasks]);

    }

    public function enquiryDelete($id)
    {
        Enquiry::where('id',$id)->update(['isDeleted'=>0]);
        return redirect('enquiries')->with('success','Enquiry added successfully!');
    }

    public function enquiryToContact($id)
    {
        $enquiry=Enquiry::with(['company'])->where('id',$id)->first();
        $companies=Company::all();
        $categories=Category::all();
        $subcategories=SubCategory::all();

        return view('enquiries.add_contact_enq',['companies'=>$companies,'categories'=>$categories,'subcategories'=>$subcategories,'enquiry'=>$enquiry]);

    }

    public function addEnquiryNote(Request $request)
    {
        $data=$request->except('_token');
        EnquiryNote::create($data);

        return redirect('view-enquiry/'.$data['enquiry_id'])->with('success','Note added successfully@');

    }

    public function deleteNote($id)
    {
        EnquiryNote::where('id',$id)->delete();

        return redirect('enquiries')->with('success','Enquiry added successfully!');
    }

}
