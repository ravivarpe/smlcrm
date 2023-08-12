<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;
use App\Models\User;
use App\Models\Role;
use App\Models\Company;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\StaffAddress;

class UserController extends Controller
{
    public function index()
    {
        $users=User::with(['team','role'])->get();
        $roles=Role::all();
        $teams=Team::all();
        return view('staff.staff_list',['teams'=>$teams,'roles'=>$roles,'users'=>$users]);
    }


    public function addUser()
    {
        $roles=Role::all();
        $teams=Team::all();
        $companies=Company::all();
        $categories=Category::all();
        $subcategories=SubCategory::all();
        return view('staff.add_staff',['teams'=>$teams,'roles'=>$roles,'companies'=>$companies,'categories'=>$categories,'subcategories'=>$subcategories]);
    }

    public function addUserSubmit(Request $request)
    {
        $request->validate([
            'staff_name' =>'required',
            'email' =>'required|email',
            'phone' =>'required |numeric',
            'licence_id' =>'required',
            'color_code' =>'required',
            'team_id' =>'required',
            'added_date'=>'required',
            'color_code'=>'required',
            'line1'=>'required',
            'pincode'=>'required',

            ]);

        $data=$request->except('_token');
        $data['password'] = Hash::make($request->password);
        $data['expiration_date']=date('Y-m-d',strtotime($data['expiration_date']));
        $data['contract_start_date']=date('Y-m-d',strtotime($data['contract_start_date']));
        $data['contract_end_date']=date('Y-m-d',strtotime($data['contract_end_date']));
        $data['added_date']=date('Y-m-d',strtotime($data['added_date']));
        $user=User::create($data);
        if($request->hasFile('profile_image')){

            $file=$request->file('profile_image');
            $image_name = time()."_".uniqid().".".$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/profiles'),$image_name);
            User::where('id',$user->id)->update(['profile_image'=>$image_name]);
        }

        StaffAddress::create(['staff_id'=>$user->id, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['pincode']]);


        return redirect('users')->with('success','User added successfully!');
    }

    public function deleteUser(Request $request){
        $id=$request->user_id;
        User::where('id',$id)->delete();
        return redirect('users')->with('success','User Deleted successfully!');
    }

    public function editUser($id){
        $user=User::with(['team','company','role','address'])->where('id',$id)->first();
        $roles=Role::all();
        $teams=Team::all();
        $companies=Company::all();
        $categories=Category::all();
        $subcategories=SubCategory::all();
        return view('staff.edit_staff',['teams'=>$teams,'roles'=>$roles,'companies'=>$companies,'categories'=>$categories,'subcategories'=>$subcategories,'user'=>$user]);
    }

    public function editUserSubmit(Request $request,$id)
    {
        $request->validate([
            'staff_name' =>'required',
            'email' =>'required|email',
            'phone' =>'required |numeric',
            'licence_id' =>'required',
            'color_code' =>'required',
            'team_id' =>'required',
            'added_date'=>'required',
            'color_code'=>'required',
            'line1'=>'required',
            'pincode'=>'required',

            ]);

        $data=$request->except('_token');
        unset($data['confirm_pass']);
        $data['password'] = Hash::make($request->password);

        $data['expiration_date']=date('Y-m-d',strtotime($data['expiration_date']));
        $data['contract_start_date']=date('Y-m-d',strtotime($data['contract_start_date']));
        $data['contract_end_date']=date('Y-m-d',strtotime($data['contract_end_date']));
        $data['added_date']=date('Y-m-d',strtotime($data['added_date']));


        $addr=StaffAddress::where('staff_id',$id)->first();
        if($addr!=null)
        {
            StaffAddress::where('staff_id',$id)->update(['line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['pincode']]);
        }else{
            StaffAddress::create(['staff_id'=>$id, 'line1'=>$data['line1'], 'line2'=>$data['line2'], 'line3'=>$data['line3'], 'country'=>$data['country'], 'state'=>$data['state'], 'city'=>$data['city'], 'pincode'=>$data['pincode']]);

        }

        unset($data['line1']);
        unset($data['line2']);
        unset($data['line3']);
        unset($data['country']);
        unset($data['state']);
        unset($data['city']);
        unset($data['pincode']);
        unset($data['sub_category_id']);

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
