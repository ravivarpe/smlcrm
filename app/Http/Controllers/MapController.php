<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class MapController extends Controller
{

    public function index()
    {
        $companies=Company::all();
        return view('map.map_list',['companies'=>$companies]);
    }
}
