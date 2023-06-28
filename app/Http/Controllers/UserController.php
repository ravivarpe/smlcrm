<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users=User::with(['team','role'])->get();
        $roles=Role::all();
        $teams=Team::all();
        return view('staff.staff_list',['teams'=>$teams,'roles'=>$roles,'users'=>$users]);
    }

    public function addUserSubmit(Request $request)
    {
        $data=$request->except('_token');
        $data['password'] = Hash::make($request->password);
        $user=User::create($data);
        if($request->hasFile('profile_image')){

            $file=$request->file('profile_image');
            $image_name = time()."_".uniqid().".".$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/profiles'),$image_name);
            User::where('id',$user->id)->update(['profile_image'=>$image_name]);
        }

        return redirect('users')->with('success','User added successfully!');
    }

    public function deleteUser(Request $request){
        $id=$request->user_id;
        User::where('id',$id)->delete();
        return redirect('users')->with('success','User Deleted successfully!');
    }

    public function editUser($id){
       $user=User::where('id',$id)->first();
       return response()->json($user);
    }

    public function editUserSubmit(Request $request,$id){
        $data=$request->except('_token');
        unset($data['confirm_pass']);
        $data['password'] = Hash::make($request->password);
        User::where('id',$id)->update($data);
        if($request->hasFile('profile_image')){

            $file=$request->file('profile_image');
            $image_name = time()."_".uniqid().".".$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/profiles'),$image_name);
            User::where('id',$id)->update(['profile_image'=>$image_name]);
        }

        return redirect('users')->with('success','User Deleted successfully!');
    }

}
