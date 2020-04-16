<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galerie;
use App\Contact;

class WelcomeController extends Controller
{
    public function index(){

        $galeries= Galerie::all();
        $contact= Contact::all();
        return view('welcome',compact('galeries','contact'));


    }


    public function admin(){

        return view('home');

    }
}
