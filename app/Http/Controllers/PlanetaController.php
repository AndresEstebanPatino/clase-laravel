<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetaController extends Controller
{
    public function index(){
        return view('planeta.index');
    }

    public function create(){
        return view('planeta.create');
    }

    public function show($planeta, $galaxia){

        //return view('planeta.show', ['planeta' => $planeta, 'galaxia' => $galaxia]); 
        return view('planeta.show', compact('planeta', 'galaxia')); // === [planeta' => $planeta, 'galaxia' => $galaxia]
        
    }
}
