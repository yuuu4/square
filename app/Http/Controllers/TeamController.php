<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{
     public function registration(Team $team)
    {
        $team = $team->get();
      return view('posts.registration',compact('teams'));

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
}