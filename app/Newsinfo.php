<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsinfo extends Model
{
    //table 名稱為 newsinfo
    protected $table = 'newsinfo';

    //欄位名稱
    const FIELD_SUP_NO = 'sup_no';

    /**
     *
     * 取得 newsinfo 頁面顯示所有 newsinfo 資料
     *
     * @int $sup_no  supplier number for identity
     */

    public static function getAllNewsinfo($sup_no)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->get();

        return $query;
    }
}
