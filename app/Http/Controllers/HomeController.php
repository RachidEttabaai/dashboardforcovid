<?php

namespace App\Http\Controllers;

use App\Http\Api\Apicalling;

class HomeController extends Controller
{
    public function show()
    {
        $countries = (new Apicalling("https://api.covid19api.com/countries"))->apirequest();
        $iso2 = array_column($countries,"ISO2");
        $country = array_column($countries,"Country");
        array_multisort($iso2,SORT_ASC,$country,SORT_ASC,$countries);
        //dd($countries);
        return view("home",compact("countries"));
    }
}
