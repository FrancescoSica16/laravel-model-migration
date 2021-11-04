<?php

namespace App\Http\Controllers;

use App\Models\Travelpack;
use Illuminate\Http\Request;

class TravelPackController extends Controller
{
    public function index(){
        $travels = Travelpack::all();

        return view('home', compact('travels'));
    }
}
