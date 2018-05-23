<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Supplier;
use App\Lib\Common;

class SupplierController extends Controller
{
    //

    /**
     * 取得預設 supplier 的基本資料
     */

    public function showInfo()
    {
        $sup_no = \App\Lib\Common::getSupplierNo();

        $supplier = \App\Supplier::getSupplierInfo($sup_no);

        return view('about', ["supplier"=>$supplier]);
    }

}
