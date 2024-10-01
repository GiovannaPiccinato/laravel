<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function index() {
        return view('tag.index', ["tags" => Tag::all()]);
    }

    public function create(){ 
        return view('tag.create');
    }

    public function show(Tag $tag) {
        return view('tag.show', ['tag' => $tag]);
    }

    public function store(Request $request) {
        Tag::create($request->all());
        return redirect('/tag');
    }

    public function delete(Tag $tag) {
        $tag->delete();
        return redirect(('/tag'));
    }

    public function edit(Tag $tag) {
        return view('tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, Tag $tag){
        $tag -> update($request->all());
        return redirect('/tag' .$tag->id);
    }
}
