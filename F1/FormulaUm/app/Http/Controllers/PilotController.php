<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilot;

class PilotController extends Controller
{
    public function index(){
        return view('pilot.index', ['pilots'=>Pilot::all()]);
    }

    public function create(){
        return view('pilot.create');
    }

    public function store(Request $request){
        Pilot::create($request->all());
        return redirect('/pilot');
    }

    public function edit(Pilot $pilot){
        return view('pilot.edit', ['pilot'=> $pilot]);
    }

    public function update(Request $request, Pilot $pilot){
        $pilot->update($request->all());
        return redirect('/pilot/' . $pilot->id);
    }

    public function show(Pilot $pilot) {
        return view('pilot.show', ['pilot' => $pilot]);
    }

    public function delete(Pilot $pilot) {
        $pilot->delete();
        return redirect('/pilot');
    }
}
