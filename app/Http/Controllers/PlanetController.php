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
        dd($planets);
    }

    public function show($planet)
    {
        $planet = Planet::where('name', $planet)->get();
        dd($planet[0]->name);
    } 
}
