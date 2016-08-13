<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function about(){
    	$name = "Vasiluk Dmitrij";
    	return view('about.about')->with('name',$name);
    }
}
