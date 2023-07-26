<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams=Team::all();
        return view('team.team_list',['teams'=>$teams]);
    }

    public function addTeamSubmit(Request $request)
    {
        $data=$request->except('_token');
        $data['added_date']=date('Y-m-d',strtotime($data['added_date']));
        $team=Team::create($data);
        return redirect('team')->with('success','Team added successfully!');
    }

    public function deleteTeam(Request $request){
        $id=$request->team_id;
        Team::where('id',$id)->delete();
        return redirect('team')->with('success','Team Deleted successfully!');
    }

    public function editTeam($id){
       $team=Team::where('id',$id)->first();
       return response()->json($team);
    }

    public function editTeamSubmit(Request $request,$id){
        $data=$request->except('_token');
        $data['added_date']=date('Y-m-d',strtotime($data['added_date']));
        Team::where('id',$id)->update($data);
        return redirect('team')->with('success','Team Deleted successfully!');
    }

}
