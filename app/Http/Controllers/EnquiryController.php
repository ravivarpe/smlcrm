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


class EnquiryController extends Controller
{
    public function index()
    {
        $companies=Company::all();
        $enquiries=Enquiry::with(['company'])->get();
        return view('enquiries.enquiry_list',['enquiries'=>$enquiries,'companies'=>$companies]);
    }

    public function companyWiseEnquiry($id)
    {
        $companies=Company::all();
        $enquiries=Enquiry::with(['company'])->where('company_id',$id)->get();
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


             ]);
         $data=$request->except('_token');
         Enquiry::where('id',$id)->update($data);
         return redirect('enquiries')->with('success','Enquiry edited successfully!');
    }

    public function enquiryDetails($id)
    {
        $enquiry=Enquiry::with(['company'])->where('id',$id)->first();

        return view('enquiries.view_enquiry',['enquiry'=>$enquiry]);

    }

    public function enquiryDelete($id)
    {
        Enquiry::where('id',$id)->delete();
        return redirect('enquiries')->with('success','Enquiry added successfully!');
    }

    public function enquiryToContact($id)
    {
        $enquiry=Enquiry::with(['company'])->where('id',$id)->first();

        return view('enquiries.view_enquiry',['enquiry'=>$enquiry]);

    }

}
