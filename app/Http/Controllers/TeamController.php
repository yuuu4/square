<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\TeamRequest;
use Illuminate\Support\Facades\Log;

class TeamController extends Controller
{
     public function registration(Team $team)
    {
        $team = $team->get();
      return view('posts.registration')->with(['team'=>$team]);
    }
    
    public function team_list()
    {
        $teams = Team::paginate(5); 
      return view('posts.team_list', compact('teams'));
    }
    
    public function submit(TeamRequest $request,team $team)
    {
        $input =$request['team'];
        $team->fill($input)->save();
        return redirect('/posts/registration/team_list');
        
    }
     public function show_team(Team $team)
    {
        return view('posts/show_team')->with(['team'=>$team]);
    }
    
    public function list_edit(Team $team)
    {
        return view('posts/list_edit')->with(['team'=>$team]);
    }
    public function update(TeamRequest $request,Team $team)
    {
    
        $input_team =$request['team'];
        $team->fill($input_team)->save();
        
        return redirect('/posts/registration/team_list/'. $team->id);
    }
    
    public function delete(Team $team)
    {
        $team->delete();
        return redirect('/posts/registration/team_list/');
    }
}