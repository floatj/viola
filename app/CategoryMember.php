<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryMember extends Model
{
    //table 名稱
    protected $table = 'category_member';

    //欄位名稱
    const FIELD_SUP_NO = 'sup_no';
    const FIELD_REC_NO = 'recno';

    const FIELD_CLASS_DEPTH = 'cno';        //分類屬於第幾層 (階層/深度)

    const FIELD_SORT = 'rank';              //排序欄位 ??? //@TODO: 待確認

    const FIELD_CLASS_LEVEL_1 = 'c_no_1';   //階層1 : 對於階層1自身項目而言等於自身的ID，對於階層2自身項目而言等於上層的ID
    const FIELD_CLASS_LEVEL_2 = 'c_no_2';   //階層2 : 對於階層2自身項目而言等於自身的ID，對於階層3自身項目而言等於上層的ID
    const FIELD_CLASS_LEVEL_3 = 'c_no_3';   //階層3 : 對於階層3自身項目而言等於自身的ID


    /* 取得所有分類 */
    public static function getAll($sup_no)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->get();

        return $query;
    }

    /**
     *  取得屬於該 supplier no 的指定層級 (c_no) 分類
     *
     *  int sup_no : supplier id
     *  int depth : 階層深度 (1, 2, 3)，預設階層深度為 1
     *  array parents : 上層 ID 陣列 (只適用於階層深度 2, 3）
     */
    public static function getAllCategoryMember($sup_no, $cno1=null, $cno2=null)
    {
        //驗證參數，檢查提供的上層ID陣列的元素數量，與階層深度的關係是否正確
        //if (! self::checkParams($depth, $parents) ) return false;

        $query = self::getCategoryMember($sup_no, 1); //取第1層分類

        //取第一層分類數量
        for($i=0;$i<count($query);$i++)
        {
            $class_no = $query[$i]->c_no_1;
            $count = \App\Product::getProductsCount(1, $class_no);

            //設定分類階層物件該項目的 count
            $query[$i]->count = $count;
        }

        //預設只取到第一層分類，故第二、三層指定預設值為 null
        $query2 = null;
        $query3 = null;

        //echo count($query)."<br>";

        //取第二層分類
        if(!empty($cno1)) {
            $query2 = self::getCategoryMember($sup_no, 2, $cno1);

            //取第2層分類數量
            //dd($query2);
            for($i=0;$i<count($query2);$i++)
            {
                $class_no2 = $query2[$i]->c_no_2;   //取Level2目前分類id
                $count = \App\Product::getProductsCount(2, $cno1, $class_no2);

                //設定分類階層物件該項目的 count
                $query2[$i]->count = $count;
            }
        }

        //取第三層分類
        if(!empty($cno2)) {
            $query3 = self::getCategoryMember($sup_no, 3, $cno1, $cno2);

            //取第2層分類數量
            for($i=0;$i<count($query3);$i++)
            {
                $class_no3 = $query3[$i]->c_no_3;   //取Level3目前分類id
                $count = \App\Product::getProductsCount(3, $cno1, $cno2, $class_no3);

                //設定分類階層物件該項目的 count
                $query3[$i]->count = $count;
            }
        }


        //@TODO: need to be refactor = =
        return array($query, $query2, $query3);
    }

    /**
     *
     * 檢查傳入 getAllCategoryMemeber 的參數
     *s
    */
    public static function checkParams($depth, $parents)
    {
        //先不檢查
        return true;
    }


    /**
     *  取得指定層級 (c_no) 分類
     *
     *  int sup_no : supplier id
     *  int depth : 階層深度 (1, 2, 3)，預設階層深度為 1
     *  array parents : 上層 ID 陣列 (只適用於階層深度 2, 3）
     */
    public static function getCategoryMember($sup_no, $depth=1, $cno1=null, $cno2=null)
    {

        //驗證參數，檢查提供的上層ID陣列的元素數量，與階層深度的關係是否正確
        //if (! self::checkParams($depth, $parents) ) return false;
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->where(self::FIELD_CLASS_DEPTH, $depth)        //取指定階層深度（1, 2, 3）的分類
            
            //判斷取Level2 or Level3 分類
            ->where(function($query) use ($cno1, $cno2) {
                ($cno1 != null) AND $query->where(self::FIELD_CLASS_LEVEL_1, $cno1); //取Level2
                ($cno2 != null) AND $query->where(self::FIELD_CLASS_LEVEL_2, $cno2); //取Level3
            })

            //->orderBy(self::FIELD_CLASS_LEVEL_1, 'ASC')   //@TODO: 排序欄位，會依照階層不同異動？ 應該是 自身為階層幾，就要用階層幾的ID排序
            ->orderBy(self::FIELD_SORT, 'ASC')
            //@TODO: 不確定是要用哪一個欄位排序 = =
            //以下為推測....
            //排序有可能是
            // 1. 先按照 RANK 欄位排序
            // 2. 再按照 自身階層ID c_no_1/2/3 去排序
            ->get();

        return $query;
    }

}
