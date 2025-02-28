<?php

namespace App\Http\Controllers;
use App\Models\SolarSystem;
use Illuminate\Http\Request;

class SolarSystemController extends Controller
{
    public function index()
    {
        dd(SolarSystem::find(1)->planets);
        //SolarSystem::planets()->all();
        //return view('solar-systems');
    }
}
