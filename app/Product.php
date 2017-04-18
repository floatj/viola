<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //table 名稱為 dm
    protected $table = 'dm';

    //欄位名稱
    const FIELD_SUP_NO = 'sup_no';
    const FIELD_REC_NO = 'recno';
    const FIELD_CLASS_NO = 'c_no_1';  //分類欄位名稱
    const FIELD_CLASS_MC1 = 'mc1';    //分類欄位名稱

    /**
     *
     * 取得 DM 頁面顯示所有 Product 資料
     *
     * @int $sup_no  supplier number for identity
     */

    public static function getAllProducts($sup_no, $c_no = null, $offset)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->where(function($query) use ($c_no) {
                ($c_no != null) and $query->where(self::FIELD_CLASS_MC1, $c_no);     //取指定層數的分類;
            })
            ->paginate($offset);     //分頁
            //->get();

        return $query;
    }

    /**
     * 取得單一 product 的詳細資料 (by recno)
     *
     * @int $recno record_no
     */
    public static function getProduct($rec_no)
    {
        $query = self::where(self::FIELD_REC_NO, $rec_no)
            ->paginate(10);
        //->get();

        return $query;
    }

}
