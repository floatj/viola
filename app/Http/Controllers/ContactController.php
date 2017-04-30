<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //顯示聯絡頁面
    public function showContactPage()
    {
        return view('demo/contact');
    }

    //顯示 map 頁面
    public function showMapPage()
    {
        return view('demo/map');
    }

}
