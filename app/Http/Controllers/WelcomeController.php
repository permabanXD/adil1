<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galerie;

class WelcomeController extends Controller
{
    public function index(){

        $galeries= Galerie::all();
        return view('welcome',compact('galeries'));

    }


    public function admin(){

        return view('home');

    }
}
