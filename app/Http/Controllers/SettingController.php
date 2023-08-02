<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\JobCategories;
use App\Models\Team;
use App\Models\Company;
use App\Models\Category;

class SettingController extends Controller
{
    public function index()
    {
        $categories=Category::all();
           
        return view('settings.setting_list',[ 'categories'=>$categories]);
    }

    public function addCatSubmit(Request $request)
        {
            $data=$request->except('_token');
            $categories=Category::create($data);
            return redirect('general-setting')->with('success','Category added successfully!');
        }
    
    

    public function editContact()
    {

    }
    
    public function deleteContact()
    {

    }
}