<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
        return Produto::all();
    }
    public function store(Request $request)
    {
        return Produto::create($request->all());
    }

    public function show(Produto $produto)
    {
        return $produto;
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());

        return $produto->fresh();
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
    }
}
