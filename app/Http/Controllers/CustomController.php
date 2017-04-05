<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    //

    //顯示自訂頁面
    public function showCustomPage()
    {
        return view('demo/custom1');
    }
}
