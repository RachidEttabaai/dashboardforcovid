<?php

namespace App\Http\Controllers;

use App\Http\Api\Apicalling;

class MapController extends Controller
{
    private function keyexistinarray(string $key, array $tab)
    {
        if (array_key_exists($key, $tab)) {
            $tab = $tab[$key];
        } else {
            $tab = [];
        }

        return $tab;
    }

    public function show()
    {
        $summaries = (new Apicalling("https://api.covid19api.com/summary"))->apirequest();
        //dd($summaries);
        $countriesresults = $this->keyexistinarray("Countries", $summaries);
        //dd($countriesresults);
        $errorsresults = $this->keyexistinarray("Message", $summaries);
        //dd($errorsresults);

        return view("map",compact("countriesresults","errorsresults"));

    }
}