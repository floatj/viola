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


    /* 取得所有分類 */
    public static function getAll($sup_no)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->get();

        return $query;
    }

    /* 取得所有該 supplier no 的分類 */
    public static function getAllCategoryMember($sup_no)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->get();

        return $query;
    }


}
