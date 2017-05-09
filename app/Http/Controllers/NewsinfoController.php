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

    //顯示全部最新消息
    public function showAllNewsinfo()
    {
        $sup_no = \App\Lib\Common::getSupplierNo();

        $newsinfo = \App\Newsinfo::getAllNewsinfo($sup_no);

        return view('news', ["newsinfo"=>$newsinfo]);
    }

    //顯示最新消息
    public function showNews($recno)
    {
        $sup_no = \App\Lib\Common::getSupplierNo();

        $news = \App\Newsinfo::getNews($sup_no, $recno);

        return view('news_detail', ["news"=>$news]);
    }
}
