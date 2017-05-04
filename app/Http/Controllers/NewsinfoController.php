<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsinfo;
use App\Lib\Common;

class NewsinfoController extends Controller
{
    //
    /**
     * 取得預設 supplier 的 全部 newsinfod
     */

    public function showAllNewsinfo()
    {
        $sup_no = \App\Lib\Common::getSupplierNo();

        $newsinfo = \App\Newsinfo::getAllNewsinfo($sup_no);

        return view('demo/news_list', ["newsinfo"=>$newsinfo]);
    }

    /**
     * 依 recno 取得特定的 newsinfo 內容
     */

    public function showNewsinfo($recno)
    {
        $sup_no = \App\Lib\Common::getSupplierNo();

        $news = \App\Newsinfo::getNewsinfo($recno);

        $news_ret = $news[0];

        return view('demo/news', ["news"=>$news_ret]);

        // 顯示


    }

}
