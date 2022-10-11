<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmbrellaController extends Controller
{
    public function home(){
        return view('home');
    }
    public function tVirus(){
        return view('t_virus');
    }
    public function gVirus(){
        return view('g_virus');
    }
    public function parasite(){
        return view('parasite');
    }
}
