<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MaterialCategory;

class SettingController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $subcategories=SubCategory::all();
        $materialcategories=MaterialCategory::all();
        return view('settings.setting_list',[ 'categories'=>$categories, 'subcategories'=>$subcategories, 'materialcategories'=>$materialcategories]);
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

    //Subcategory
    public function addSubCatSubmit(Request $request)
    {
        $data=$request->except('_token');
        $subcategories=SubCategory::create($data);            
        return redirect('general-settings')->with('success','Category added successfully!');
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

}