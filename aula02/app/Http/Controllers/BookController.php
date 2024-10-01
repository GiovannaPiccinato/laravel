<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view("books.index", ["books" => Book::all()]);
    }

    public function show(Book $book) {
        return view("books.show", ["book" => $book]);
    }

    public function create(){
        return view('books.create', ["authors" =>Author::all()]);
    }

    public function store(Request $request) { // vamos receber uma requisição e afunção vai imprimir essa requisição
        $book = Book::create($request->all());
        $book->Tags()->attach($request['tags']);
        // return redirect('/book'); //vai ser inserido e irá voltar pra index
        dd($book->Tags);
    }

    public function edit(Book $book) {
        return view('books.edit', ['book'=>$book]);
    }

    public function update(Book $book, Request $request){
        $book->update($request->all());
        return redirect('/book');
    }

    public function delete(Book $book) {
        $book->delete();
        $book->Tags()->detach(($book->Tags));
        return redirect('/book');
    }
}
