<?php

namespace App\Lib;
use Illuminate\Support\Facades\Config;
/*  reCaptcha CURL lib  */
/*  Ver 0.1             */
/*  170201.floatj: 送出 POST 給 google reCaptcha API 並回傳驗證碼結果*/
/*  因為官方提供的 lib 不支援 PHP 5.2 ，故以此 lib 實作送出 POST */

//reference: https://developers.google.com/recaptcha/docs/verify

//reCaptcha 類別


class ReCaptcha {

    //Google 官方提供的 reCaptcha API Url
    public $curl_url = ""; //https:www.google.com/recaptcha/api/siteverify";
    public $recaptcha_secret = ""; // 6LdvzBMUAAAAAH8C09sk3cdRuU4JhWY1bMReVG2f";

    //reCaptcha API 參數
    //static public $curl_parm;
    //$curl_parm = array('secret' => $recaptcha_secret);

    function __construct () {
        $this->curl_url = "https://www.google.com/recaptcha/api/siteverify";
        $this->recaptcha_secret = "6LdvzBMUAAAAAH8C09sk3cdRuU4JhWY1bMReVG2f";
    }

    /* verify function */
    function verify($response) {
        $url = $this->curl_url;
        //$parm = $this->curl_parm;
        //$parm['response'] = $response;

        //送出 Curl 查詢
        //$result = this->curl_post($url, $parm);
        $result = $this->curl_post($url, array('secret' => $this->recaptcha_secret , 'response' => $response));

        //debug
        //var_dump($result);

        // 回傳值格式：（參考 google recaptcha API 文件）
        //  { "success": true, "challenge_ts": "2017-01-31T19:03:48Z", "hostname": "tw.bysources.com" }NULL
        $ret=json_decode($result, true);

        //須同時檢查 (1) google api 是否回傳驗證通過 (2) 回傳 hostname 是否與網站設定一致 避免漏洞
        if($ret['success'] == true AND $ret['hostname'] == Config::get('viola.recaptcha_hostname'))
            return 1;  //驗證通過
        else
            return 0;  //驗證失敗
    }


    /* Curl post adapter */
    function curl_post($url, $parm) {

        //組 curl 參數
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);   //method: POST
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //hide output
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  //???
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $parm ));
        $ret = curl_exec($ch);

        //回傳值及錯誤處理
        if (curl_errno($ch)) {
            print "CURL Error: " . curl_error($ch);
            return 0;
        } else {
            curl_close($ch);
            return $ret;        //return value
        }
    }

    /*  */

}