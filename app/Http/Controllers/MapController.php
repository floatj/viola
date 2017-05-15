<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Lib\Common;

class MapController extends Controller
{
    //顯示地圖
    public function showMap()
    {
        $sup_no = \App\Lib\Common::getSupplierNo();
        $supplier = \App\Supplier::getSupplierInfo($sup_no);

        //地址取 addr1 欄位
        $address = $supplier[0]->addr1;
        //縮放係數 1-18，先設定 16
        $zoom = 16;

        return view('map', ['address' => $address, 'zoom' => $zoom]);
    }
}
