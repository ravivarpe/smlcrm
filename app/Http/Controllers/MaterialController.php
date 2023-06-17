<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


use App\Models\Company;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Address;
use App\Models\Material;
use App\Models\MaterialCategory;


class MaterialController extends Controller
{
    public function index()
    {
        $companies=Company::all();
        $categories=MaterialCategory::all();
        $materials=Material::with(['company','category'])->get();
        return view('materials.material_list',['materials'=>$materials,'companies'=>$companies,'categories'=>$categories]);
    }

    public function companyWiseMaterial($id)
    {

        $companies=Company::all();
        $categories=MaterialCategory::all();
        $materials=Material::with(['company','category'])->where('company_id',$id)->get();
        return view('materials.material_list',['materials'=>$materials,'companies'=>$companies,'categories'=>$categories]);
    }

    public function categoryWiseMaterial($id)
    {

        $companies=Company::all();
        $categories=Category::all();
        $materials=Material::with(['company','category'])->where('mcategory_id',$id)->get();
        return view('materials.material_list',['materials'=>$materials,'companies'=>$companies,'categories'=>$categories]);
    }

    public function addMaterial()
    {
        $companies=Company::all();
        $categories=MaterialCategory::all();

        return view('materials.add_material',['companies'=>$companies,'categories'=>$categories]);
    }

    public function addMaterialSubmit(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'purchase_price' =>'required|numeric',
            'sale_price' =>'required |numeric',
             ]);
         $data=$request->except('_token');

         $material=Material::create($data);

         return redirect('materials')->with('success','Material added successfully!');
    }

    public function editMaterial($id)
    {
        $companies=Company::all();
        $categories=MaterialCategory::all();
        $material=Material::with(['company','category'])->where('id',$id)->first();
        return view('materials.edit_material',['companies'=>$companies,'categories'=>$categories,'material'=>$material]);
    }

    public function editMaterialSubmit(Request $request,$id)
    {
        $request->validate([
            'title' =>'required',
            'purchase_price' =>'required|numeric',
            'sale_price' =>'required |numeric',
             ]);
         $data=$request->except('_token');
         Material::where('id',$id)->update($data);
         return redirect('materials')->with('success','Material edited successfully!');
    }


    public function materialDelete($id)
    {
        Material::where('id',$id)->delete();
        return redirect('materials')->with('success','Material deleted successfully!');
    }

}
