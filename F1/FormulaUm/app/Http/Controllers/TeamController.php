<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        return view('team.index', ['teams'=>Team::all()]);
    }

    public function create(){
        return view('team.create');
    }

    public function store(Request $request){
        Team::create($request->all());
        return redirect('/');
    }

    public function edit(Team $team){
        return view('team.edit', ['team'=> $team]);
    }

    public function update(Request $request, Team $team){
        $team->update($request->all());
        return redirect('/team/' . $team->id);
    }

    public function show(Team $team) {
        return view('team.show', ['team' => $team]);
    }

    public function delete(Team $team) {
        $team->delete();
        return redirect('/');
    }
}
