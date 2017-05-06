<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsinfo;
use App\Lib\Common;

class NewsinfoController extends Controller
{
    //
    /**
     * 取得預設 supplier 的 newsinfo
     */

    public function showAllNewsinfo()
    {
        $sup_no = \App\Lib\Common::getSupplierNo();

        $newsinfo = \App\Newsinfo::getAllNewsinfo($sup_no);

        return view('news', ["newsinfo"=>$newsinfo]);
    }
}
