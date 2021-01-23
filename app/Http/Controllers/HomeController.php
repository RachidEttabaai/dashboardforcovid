<?php

namespace App\Http\Controllers;

use App\Http\Api\Apicalling;

class HomeController extends Controller
{
    public function show()
    {
        $countries = new Apicalling("https://restcountries.eu/rest/v2/all");
        return view("home",compact("countries"));
    }
}
