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
}
