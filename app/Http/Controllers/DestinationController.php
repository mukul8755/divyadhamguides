<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{



    public function kashi()
    {
        return view('destinations.kashi');
    }
    public function ayodhya()
    {
        return view('destinations.ayodhya');
    }
    public function prayagraj()
    {
        return view('destinations.prayagraj');
    }
    public function omkareshwar(){
        return view('destinations.omkareshwar');
    }
    public function mahakaleshwar(){
        return view('destinations.mahakaleshwar');
    }
    public function baglamukhi(){
        return view('destinations.baglamukhi');
    }
}
