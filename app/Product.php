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
    const FIELD_CLASS_MC2 = 'mc2';    //分類欄位名稱
    const FIELD_CLASS_MC3 = 'mc3';    //分類欄位名稱

    /**
     *
     * 取得 DM 頁面顯示所有 Product 資料
     *
     * @int $sup_no  supplier number for identity
     */

    public static function getAllProducts($sup_no, $c_no = null, $offset = 12)
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
            //->paginate(10);
        ->get()
        ->first();  //只會有一項，所以直接取那一項，避免在 view 還要指定 collection[0]
        //->toArray();
        //print_r ($query);
        //exit;

        return $query;
    }

    /**
     * 取 特定階層 / 特定 class 的 dm 數量 (先指定階層(1,2,3)，再指定class_id / mc[1,2,3] )
     *
     * @int $level      階層(1,2,3)，如不指定預設值為1
     * @int $class_no   分類ID，如不指定預設值為 null 表示查詢所有分類dm 總數量
     */
    public static function getProductsCount($level=1, $class_no=null, $class_no2=null, $class_no3=null)
    {
        $query = self::where(function($query) use ($class_no, $level, $class_no2, $class_no3) {
                ($level >= 1) and $query->where(self::FIELD_CLASS_MC1, $class_no);    //第1層取 mc1
                ($level >= 2) and $query->where(self::FIELD_CLASS_MC2, $class_no2);   //第2層取 mc2
                ($level >= 3) and $query->where(self::FIELD_CLASS_MC3, $class_no3);   //第3層取 mc3

            })
            ->count();

        return $query;
    }


}
