<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use App\Models\Planet;
use App\Models\SolarSystem;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('index', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $planet = Planet::where('name', $planet)->get();
        return view('show', ['planet' => $planet[0]]);
    } 
}
