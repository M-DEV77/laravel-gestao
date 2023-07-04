<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function Produtos(string $nome='',int $preco){
        //echo "você escolheu o produto: ".$nome." que custa: R$:".$preco;
       return view('app.Produtos',['produto'=>$nome],['preco'=>$preco]);
    }
}
