<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Treni;

use Illuminate\Http\Request;


// class HomeController extends Controller
// {
//     public function index(){
//         $treni = Treni::all();
//         return view('welcome', compact('treni'));
//     }
// }


class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $treni = Treni::where('stazione_partenza', '>=', $today)->get();
        return view('welcome', compact('treni'));
    }
}

