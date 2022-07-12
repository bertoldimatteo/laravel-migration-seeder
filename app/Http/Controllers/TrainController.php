<?php

namespace App\Http\Controllers;
use App\Train;
use Carbon\Carbon;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {   
        $trains=Train::where('orario_di_partenza', Carbon::today())->get();
        
        return view('home', compact('trains'));
    }
}
