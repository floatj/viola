<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsinfo extends Model
{
    //table 名稱為 newsinfo
    protected $table = 'newsinfo';

    //欄位名稱
    const FIELD_SUP_NO = 'sup_no';
    const FIELD_A_TIME = 'a_time';
    const FIELD_REC_NO = 'recno';

    /**
     *
     * 取得 newsinfo 頁面顯示所有 newsinfo 資料
     *
     * @int $sup_no  supplier number for identity
     */

    public static function getAllNewsinfo($sup_no, $offset = 9)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->orderBy(self::FIELD_A_TIME, 'DESC')
            //->get();
            ->paginate($offset);     //分頁

        return $query;
    }

    public static function getNews($sup_no, $recno, $offset = 9)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->where(self::FIELD_REC_NO, $recno)
            ->orderBy(self::FIELD_A_TIME, 'DESC')
            ->get()
            ->first();  //只會有一項，所以直接取那一項，避免在 view 還要指定 collection[0]

        return $query;
    }
}
