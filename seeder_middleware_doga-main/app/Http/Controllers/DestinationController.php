<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
class DestinationController extends Controller
{
    public function index(){
        $Destinations = Destination::all()->get();
        return view('destination.index', compact("Destinations")); 
    }
   
}
