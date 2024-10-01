<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        return view("products.index", ["produtos" => Produto::all()]);
    }

    public function show(Produto $produto) {
        return view("products.show", ["produto" => $produto]);
    }
}
