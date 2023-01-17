<?php

namespace App\Http\Controllers;

use App\welcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $stazione_partenza = welcome::all();
        return view('home', compact('treni'));
    }
}
