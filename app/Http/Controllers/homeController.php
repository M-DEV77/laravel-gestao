<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use function Termwind\render;

class homeController extends Controller
{
    public function home(){
      return view('site.home');
    }
}
