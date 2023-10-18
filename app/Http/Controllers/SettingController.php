<?php

namespace App\Http\Controllers;

use App\Models\CalendarCategory;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;
use App\Models\Category;
use App\Models\InvoiceType;
use App\Models\SubCategory;
use App\Models\MaterialCategory;
use App\Models\ReferralType;
use App\Models\MaterialSubCategory;

class SettingController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $subcategories=SubCategory::all();
        $materialcategories=MaterialCategory::all();
        $invoicecategories=InvoiceType::all();
        $calendarcategories=CalendarCategory::all();
        $jobcategories=JobCategories::all();
        $campanycategories=Company::all();
        $referraltypies=ReferralType::all();
        $materialSubCat=MaterialSubCategory::all();
        return view('settings.setting_list',[ 'categories'=>$categories, 'subcategories'=>$subcategories, 'materialcategories'=>$materialcategories, 'invoicecategories'=>$invoicecategories, 'jobcategories'=>$jobcategories, 'campanycategories'=>$campanycategories, 'calendarcategories'=>$calendarcategories, 'referraltypies'=>$referraltypies,'materialSubCats'=>$materialSubCat]);
    }

    //contact category
    public function addCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $categories=Category::create($data);
        return redirect('general-settings')->with('success','Category added successfully!');
    }

    public function editContact($id)
    {
        $category=Category::where('id',$id)->first();
        return response()->json($category);
    }

    public function editCatSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        Category::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteContact(Request $request)
    {
        $id=$request->category_id;
        Category::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //ContSubcategory
    public function addSubCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $subcategories=SubCategory::create($data);
        return redirect('general-settings')->with('success','Category added successfully!');
    }

    public function editSubContact($id)
    {
        $subcategory=SubCategory::where('id',$id)->first();
        return response()->json($subcategory);
    }

    public function editSubSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        SubCategory::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteSubContact(Request $request)
    {
        $id=$request->sub_category_id;
        SubCategory::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //ContReferralType
    public function addRefTypeSubmit(Request $request)
    {
        $data=$request->except('_token');
        $referraltypies=ReferralType::create($data);
        return redirect('general-settings')->with('success','Category added successfully!');
    }

    public function editRefType($id)
    {
        $referraltype=ReferralType::where('id',$id)->first();
        return response()->json($referraltype);
    }

    public function editRefTypeSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        ReferralType::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteRefType(Request $request)
    {
        $id=$request->referral_id;
        ReferralType::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //Mterial Category
    public function addMaterialCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $materialcategories=MaterialCategory::create($data);
        return redirect('general-settings')->with('success','Category added successfully!');
    }

    public function editMaterial($id)
    {
        $materialcategory=MaterialCategory::where('id',$id)->first();
        return response()->json($materialcategory);
    }

    public function editMaterialSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        MaterialCategory::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteMaterial(Request $request)
    {
        $id=$request->mcategory_id;
        MaterialCategory::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //material subcategory

    public function addMaterialSubCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $materialcategories=MaterialSubCategory::create($data);
        return redirect('general-settings')->with('success','Category added successfully!');
    }

    public function editMaterialSubCat($id)
    {
        $materialsubcategory=MaterialSubCategory::where('id',$id)->first();
        return response()->json($materialsubcategory);
    }

    public function editMaterialSubCatSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        MaterialSubCategory::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteMaterialSubCat(Request $request)
    {
        $id=$request->msubcategory_id;
        MaterialSubCategory::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //FinanceCat
    public function addInvoiceCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $invoicecategories=InvoiceType::create($data);
        return redirect('general-settings')->with('success','Category added sucessfully!');
    }

    public function editInvoice($id)
    {
        $invoicecategory=InvoiceType::where('id',$id)->first();
        return response()->json($invoicecategory);
    }

    public function editInvoiceSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        InvoiceType::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteInvoice(Request $request)
    {
        $id=$request->type_id;
        InvoiceType::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //JobCat
    public function addJobCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $jobcategories=JobCategories::create($data);
        return redirect('general-settings')->with('success','Category added sucessfully!');
    }

    public function editJob($id)
    {
        $jobcategory=JobCategories::where('id',$id)->first();
        return response()->json($jobcategory);
    }

    public function editJobSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        JobCategories::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteJob(Request $request)
    {
        $id=$request->job_cat_id;
        JobCategories::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //CalendarCat
    public function addCalenderCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $calendarcategories=CalendarCategory::create($data);
        return redirect('general-settings')->with('success','Category added sucessfully!');
    }

    public function editCalender($id)
    {
        $calendarcategory=CalendarCategory::where('id',$id)->first();
        return response()->json($calendarcategory);
    }

    public function editCalenderSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        CalendarCategory::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteCalender(Request $request)
    {
        $id=$request->calendar_id;
        CalendarCategory::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

    //CompanyCat
    public function addCompanyCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $campanycategories=Company::create($data);
        return redirect('general-settings')->with('success','Category added sucessfully!');
    }

    public function editCompany($id)
    {
        $jobcategory=Company::where('id',$id)->first();
        return response()->json($jobcategory);
    }

    public function editCompanySubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        Company::where('id',$id)->update($data);
        return redirect('general-settings')->with('success','Category Updated successfully!');
    }

    public function deleteCompany(Request $request)
    {
        $id=$request->id;
        Company::where('id',$id)->delete();
        return redirect('general-settings')->with('success','Category Deleted successfully!');
    }

}
