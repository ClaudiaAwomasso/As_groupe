<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //page/vue home.blade.php
    public function home()
    {
        return view('home.accueil');

    }
    public function a_propos()
    {
        return view('home.a_propos');

    }


    public function services()
    {
        return view('home.services');

    }

    //  public function contact()
    //  {
    //      return view('home.contact');

    //  }
}

