<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    //顯示地圖
    public function showMap()
    {
        return view('map');
    }
}
