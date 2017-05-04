<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsinfo extends Model
{
    //table 名稱為 newsinfo
    protected $table = 'newsinfo';

    //欄位名稱
    const FIELD_SUP_NO = 'sup_no';
    const FIELD_REC_NO = 'recno';

    /**
     *
     * 取得 newsinfo 頁面顯示所有 newsinfo 資料
     *
     * @int $sup_no  supplier number for identity
     */

    public static function getAllNewsinfo($sup_no, $offset=6)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
        //->get();

        ->paginate($offset);     //分頁

        return $query;
    }

    /**
     * 取得單一 news 詳細
     */
    public static function getNewsInfo($recno)
    {
        $query = self::where(self::FIELD_REC_NO, $recno)
            ->get();

        return $query;

    }

}
