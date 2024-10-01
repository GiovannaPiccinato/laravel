<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

class RaceController extends Controller
{

    public function index(){
        return view('race.index', ['races'=>Race::all()]);
    }

    public function create(){
        return view('race.create');
    }

    public function store(Request $request){
        $race = Race::create($request->all());
        $race->Pilots()->attach($request['pilot_id']);
        return redirect('/race');
    }

    public function edit(Race $race){
        return view('race.edit', ['race'=> $race]);
    }

    public function update(Request $request, Race $race){
        $race->update($request->all());
        $race->Pilots()->sync($request['pilot_id']);
        return redirect('/race/' . $race->id);
    }

    public function show(Race $race) {
        return view('race.show', ['race' => $race]);
    }

    public function delete(Race $race) {
        $race->Pilots()->detach($race->Pilots);
        $race->delete();

        return redirect('/race');
    }
}
