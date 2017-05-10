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
        $host = \Config::get('viola.news_image_path'.$prefix);
        //$host = \Config::get('viola.dm_image_path_min');
        $image_path = $recno;
        $ext = ".jpg";

        //測試img是否存在
        //原本作法拭去找檔案是否存在, 上線後再改回 file_exists

        $path = ["http://".$host."/"."$image_path".'a'.$ext, "http://".$host."/"."$image_path".'b'.$ext];
        foreach($path as $key=>$img)
        {
            //curl test
            $handle = curl_init($img);
            curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

            $response = curl_exec($handle);

            $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
            if($httpCode == 404) {
                unset($path[$key]);
            }

            curl_close($handle);

            /* Handle $response here. */
        }

        return $path;
    }


}
