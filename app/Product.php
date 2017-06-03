<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lib\Common;

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

    const FIELD_PRODUCT_NAME = 'pname';   //產品名稱
    
    const FIELD_HOT_PRODUCT = 'new';      //是否為熱門產品 (Y or N)

    /**
     *
     * 取得 DM 頁面顯示 ( 所有 | 指定關鍵字 ) Product 資料
     *
     * 如有帶入 $keyword 關鍵字，則僅顯示產品名稱符合指定關鍵字 (LIKE %product_name%) 的產品
     *
     * @int $sup_no  supplier number for identity
     */

    public static function getAllProducts($sup_no, $offset = 12, $c_no1=null, $c_no2=null, $c_no3=null, $keyword=null, $hot_product=null)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->where(function($query) use ($c_no1, $c_no2, $c_no3, $keyword, $hot_product) { //注意：下面 function($query) 若有新增變數，此處要記得也要新增變數 = =

                 //如有帶入產品名稱關鍵字，則取名稱符合之產品
                ($keyword != null) and $query->where(self::FIELD_PRODUCT_NAME, 'LIKE', "%$keyword%");

                //如有帶入 $hot_product = true 則只撈熱門產品
                ($hot_product == true) and $query->where(self::FIELD_HOT_PRODUCT, 'Y'); //中文版 DB schema:  Y=熱門產品， N=非熱門產品

                ($c_no1 != null) and $query->where(self::FIELD_CLASS_MC1, $c_no1);      //取分類屬於第1層class_id的product;
                ($c_no2 != null) and $query->where(self::FIELD_CLASS_MC2, $c_no2);      //取分類屬於第2層class_id的product;
                ($c_no3 != null) and $query->where(self::FIELD_CLASS_MC3, $c_no3);      //取分類屬於第3層class_id的product;
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

	//取得 sup_no
  	//TOSO: temportary fix, need to improve
        $sup_no = \App\Lib\Common::getSupplierNo();    

        $query = self::where(self::FIELD_SUP_NO, $sup_no)
                 ->where(function($query) use ($class_no, $level, $class_no2, $class_no3) {
                ($level >= 1) and $query->where(self::FIELD_CLASS_MC1, $class_no);    //第1層取 mc1
                ($level >= 2) and $query->where(self::FIELD_CLASS_MC2, $class_no2);   //第2層取 mc2
                ($level >= 3) and $query->where(self::FIELD_CLASS_MC3, $class_no3);   //第3層取 mc3

            })
            ->count();

        return $query;
    }


}
