<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
class DestinationController extends Controller
{
    public function index(){
        $Destinations = Destination::all();
        return view('destination.index', compact("Destinations")); 
    }
   
    public function show($id)
    {
        $Destinations = Destination::find($id);
        return view('destination.show', compact('Destinations'));
    }
}
