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

    /**
     *
     * 取得 DM 頁面顯示所有 Product 資料
     *
     * @int $sup_no  supplier number for identity
     */

    public static function getAllProducts($sup_no)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->paginate(10);
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
