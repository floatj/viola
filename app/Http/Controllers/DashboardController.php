<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Lib\Common;

class DashboardController extends Controller
{
    //

    public function showDashboard()
    {
        $sup_no = Config::get('viola.sup_no');

        return view('admin/dashboard', ["sup_no"=>$sup_no]);
    }

}
