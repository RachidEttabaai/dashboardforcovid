<?php

namespace App\Http\Controllers;

use App\Http\Api\Apicalling;

class HomeController extends Controller
{
    public function show()
    {
        $countries = (new Apicalling("https://api.covid19api.com/countries"))->apirequest();
        //dd($countries);
        return view("home",compact("countries"));
    }
}
