<?php


namespace App\Http\Controllers;

use App\Models\CalendarCategory;
use Illuminate\Http\Request;
use App\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions=Role::all();
        return view('permission.permission_list',['permissions'=>$permissions]);
    }

    //User permission
    public function addPermissionSubmit(Request $request)
    {
        $data=$request->except('_token');
        $permissions=Role::create($data);            
        return redirect('user-permission')->with('success','Permission added successfully!');
    }

    public function editPermission($id)
    {
        $permission=Role::where('id',$id)->first();
        return response()->json($permission);
    }
    
    public function editPermissionSubmit(Request $request,$id)
    {
        $data=$request->except('_token');
        Role::where('id',$id)->update($data);
        return redirect('user-permission')->with('success','Category Updated successfully!');
    }
  
    public function deletePermission(Request $request)
    {
        $id=$request->permission_id;
        Role::where('id',$id)->delete();
        return redirect('user-permission')->with('success','Category Deleted successfully!');
    }

}