<?php

namespace App\Http\Controllers;

use App\Http\Api\Apicalling;

class DataController extends Controller
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
        $globalresults = $this->keyexistinarray("Global", $summaries);
        $countriesresults = $this->keyexistinarray("Countries", $summaries);
        $errorsresults = $this->keyexistinarray("Message", $summaries);

        return view("data", compact("globalresults", "countriesresults", "errorsresults"));

    }
}
