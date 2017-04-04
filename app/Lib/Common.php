<?php
namespace App\Lib;
use Illuminate\Support\Facades\Config;
/**
 * 通用函式庫
 */


class Common {

    /**
     *
     * 取得 Sup_no
     *
     */

    static public function getSupplierNo()
    {
        return Config::get('viola.sup_no');
    }
}