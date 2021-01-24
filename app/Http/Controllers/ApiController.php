<?php

namespace App\Http\Controllers;

use App\Http\Api\Apicalling;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function jsondata(Request $request)
    {
        $data = (new Apicalling($request->url))->apirequest();

        return response()->json($data);
    }
}
