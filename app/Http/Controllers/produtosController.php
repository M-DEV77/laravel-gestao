<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function Produtos(){
        return view('app.Produtos');
    }
}
