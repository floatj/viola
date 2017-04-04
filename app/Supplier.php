<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /**
     *
     * Supplier model
     *
     */

    protected $table = 'supplier';

    //編號與名稱
    const FIELD_SUP_NO = 'sup_no';
    const FIELD_NAME = 'name';

    //登入用帳號密碼
    const FIELD_USERID = 'userid';
    const FIELD_PASSWD = 'passwd';

    //系統等級判別
    const FIELD_CHECK_SYS = 'check_sys';
    const FIELD_GRAND = 'grand';
    const FIELD_GRAND_KEY_CHECK = 'grand_key_check';
    const FIELD_V_NO = 'v_no';

    //基本資料
    const FIELD_ADDR = 'addr';                  //完整地址
    const FIELD_ADDR1 = 'addr1';                //精簡地址
    const FIELD_ADDR_ROAD = 'addr_road';        //精簡地址--路

    const FIELD_ZIP = 'Zip';
    const FIELD_COUNTRY = 'Country';
    const FIELD_CANTON  = 'Canton';     //行政區-階層0
    const FIELD_CITY = 'City';          //行政區-階層1
    const FIELD_CITY1 = 'City1';        //行政區-階層2
    const FIELD_TEL = 'tel';            //完整電話
    const FIELD_TEL1 = 'tel1';          //精簡電話
    const FIELD_FAX = 'fax';

    //分類
    const FIELD_BIZ_TYPE = 'BizType';
    const FIELD_CATEGORY_NAME = 'Category_name';
    const FIELD_CATEGORY = 'Category';                  //分類-階層1
    const FIELD_CATEGORY2 = 'Category2';                //分類-階層2
    const FIELD_CATEGORY3 = 'Category3';                //分類-階層3

    //聯絡人及聯絡電子信箱
    const FIELD_PEOPLE = 'people';
    const FIELD_CONTACT_PEOPLE = 'connpeo';             //聯絡人?
    const FIELD_CONTACT_PEOPLE_SEX = 'connpeo_sex';     //聯絡人性別 (先生/小姐)
    const FIELD_EMAIL = 'email';

    //關鍵字
    const FIELD_KEYWORDS = 'keywords';
    const FIELD_DISC = 'disc';

    //簡介及網站
    const FIELD_MEMO = 'memo';
    const FIELD_WEBSITE = 'web';

    /**
     *
     * 取得 Supplier 頁面顯示用基本資料
     *
     * @int $sup_no  supplier number for identity
     */
    public static function getSupplierInfo($sup_no)
    {
        $query = self::where(self::FIELD_SUP_NO, $sup_no)
            ->get();

        return $query;
    }

}
