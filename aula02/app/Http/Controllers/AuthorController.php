<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        return view("authors.index", ["authors" => Author::all()]);
    }

    public function show(Author $author) {

        return view("authors.show", ["author" => $author]);
    }

    public function create(){
        return view('authors.create');
    }

    public function store(Request $request) { // vamos receber uma requisição e afunção vai imprimir essa requisição
        $author = Author::create($request->all());
        return redirect('/authors'); //vai ser inserido e irá voltar pra index
    }

    Public function edit(Author $author) {
        Return view ('authors.edit', ['author' => $author]);
    }

    Public function update(Request $request, Author $author) {
        $author->update($request->all());
        Return redirect('/author/' . $author->id);
        }


}
