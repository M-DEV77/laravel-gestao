<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function Produto(string $nome='',int $preco){
       return view('app.produto',['nome'=>$nome],['preco'=>$preco]);
    }



    public function Produtos(){
        return view('app.produtos');
    }
}

