<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class AllController extends Controller
{
    
    public function ix(){
        $trains = Train::limit(20)->get();
        return view('all', compact('trains'));
    }
}
