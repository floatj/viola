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

    //顯示單一則最新消息
    public function showNews($recno)
    {
        $sup_no = \App\Lib\Common::getSupplierNo();

        $news = \App\Newsinfo::getNews($sup_no, $recno);
        $image = $this->getNewsImage($recno);

        return view('news_detail', ["news"=>$news, "image"=>$image]);
    }

    /**
     * 取得單一則最新消息圖片
     *
     * @param $recno
     * @return string
     */
    public function getNewsImage($recno, $prefix="")
    {
        $host = \Config::get('viola.news_image_path'.$prefix);      //網址
        //備用，原本中文版是判斷檔案是否存在，現在先暫時用網址 + curl 判斷圖片是否存在
        $fs_host= \Config::get('viola.news_image_filepath_docker');        //檔案系統

        $image_path = intval($recno);  //數值化
        $ext = ".jpg";

        //測試img是否存在
        //原本作法拭去找檔案是否存在, 上線後再改回 file_exists

        //$path = ["http://".$host."/"."$image_path".'a'.$ext, "http://".$host."/"."$image_path".'b'.$ext];
        $path = [$image_path.'a'.$ext , $image_path.'b'.$ext];

        foreach($path as $key=>$img)
        {
            //沿襲中文版作法，因為目前看起來 DB 內似乎沒有紀錄該則最新消息是否有搭配 $recno a/b .jpg 之類的圖片的機制
            //@TODO: 已知此方法在本機開發測試時會有問題 (因為本機無法判斷圖片檔是否存在)，待解決

            //如果圖片存在，則回傳圖片網址，反之若圖片不存在，則從回傳陣列中移除圖片，避免最新消息顯示出來
            if(file_exists($fs_host."/".$img))
                $path[$key] = "//".$host."/".$img;
            else
                unset($path[$key]);

        }

        return $path;
    }


}
