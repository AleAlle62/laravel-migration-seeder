<?php

namespace App\Http\Controllers;

use App\Treni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $treni = Treni::all();
        return view('welcome', compact('treni'));
    }
}
