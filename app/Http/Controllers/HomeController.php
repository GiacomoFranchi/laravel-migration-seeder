<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index(){
        $currentDate = now()->toDateString();
        $trains = Train::where('data_viaggio', '=', $currentDate)->get();
        return view('home', compact('trains'));
    }
}
