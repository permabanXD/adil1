<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galerie;
use App\Contact;
use App\Team;

class WelcomeController extends Controller
{
    public function index(){

        $galeries= Galerie::all();
        $contact= Contact::all();
        $team = Team::all();
        return view('welcome',compact('galeries','contact','team'));


    }


    public function admin(){

        return view('home');

    }
}
