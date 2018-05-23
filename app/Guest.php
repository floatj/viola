<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //table 名稱
    protected $table = 'Guest'; //G要大寫 = =

    //關閉 model 預設的 timestamp 操作行為 (updated_at, created_at)
    public $timestamps  = false ;

    //欄位名稱
    const FIELD_AUTO_ID = 'messageid';      //Primary key

    const FIELD_SUP_NO = 'sup_no';
    const FIELD_REC_NO = 'recno';

    const FIELD_AUTHOR = 'author';

    const FIELD_POST_DATE = 'postdate';

    const FIELD_EMAIL = 'Email';
    const FIELD_BODY = 'body';
    const FIELD_SUBJECT = 'Subject';

    //userid 與 sex 這兩個欄位看起來沒用到，先不新增到 Model 中
    //const FIELD_USERID = 'userid';
    //const FIELD_SEX = 'sex';

    const FIELD_IP = 'ip';
    const FIELD_COMPANY = 'company';
    const FIELD_TEL = 'tel';

    //const FIELD_TEL_2 = 'telex';
    const FIELD_FAX = 'fax';

    const FIELD_ADDRESS = 'address';
    //const FIELD_GOOD = 'good';
    const FIELD_CHECK_SYS = 'check_sys';
    const FIELD_SERVICE = 'service';

    //組合性質 (???)
    //const FIELD_CONTENT_TYPE = 'content_type';


    /**
     * 新增產品詢問函 / 聯絡函資料
     * $insert_data: 要新增到 DB 的 array
     * $supplier:    廠商資料
     * $sup_no:     廠商編號
     * $recno:      商品編號, 如沒有表示新增聯絡函 (產品詢問函才有商品編號)
     */
    public function addGuestInquiryRecord($insert_data, $supplier, $sup_no, $recno=null)
    {



        //組資料
        //產品連結網址
        $http_root = 'http://'.$_SERVER['SERVER_NAME'];

        //如為產品詢問函，才產生產品網址
        if ($recno != null) $d_url="$http_root/product/$recno";

        //帶入後台標題
        $subject_ins = "<font color=#FF0033>EIP 網站</font>－<font color=#660099>產品</font>詢問信";
        $subject_ins .= "<br>".$insert_data['subject']." ";

        //帶入後台內容
        $body_ins = "聯絡人員：".$insert_data['author'];
        $body_ins .= "<br>公司名稱：".$insert_data['company'];
        $body_ins .= "<br>聯絡電話：".$insert_data['tel'];
        $body_ins .= "<br>傳真號碼：".$insert_data['fax'];
        $body_ins .= "<br>聯絡地址：".$insert_data['address'];
        $body_ins .= "<br>聯絡信箱：".$insert_data['email'];

        //如為產品詢問函，才包含產品編號與產品名稱
        if ($recno != null)
        {
            $body_ins .= "<br>產品編號：" . $insert_data['pnum'];
            $body_ins .= "<br>產品名稱：<a href=" . $d_url . " target=_blank><font color=#005599><b>" . $insert_data['pname'] . "</b></font></a>";
        }

        $body_ins .= "<br>詢問主旨："."<b>".$insert_data['subject']." </b>";
        $body_ins .= "<br>詢問內容：".$insert_data['body'];
        $body_ins  .= "<br>---------------------------------------------------------------";
        $body_ins  .= "<font  face=Arial color=#333333 size=2>";
        $body_ins  .= "<br><a href=".$http_root." target=_blank><font color=#005599 size=3><b>".$supplier[0]->name."</b></font></a> ";
        $body_ins  .= "<br>TEL：".$supplier[0]->tel."　　FAX：".$supplier[0]->fax."　　E-mail：".$supplier[0]->email."";
        $body_ins  .= "</font>";


        //寫入 Eloquent Model
        //表單資料
        $this->author = $insert_data['author'];
        $this->company = $insert_data['company'];
        $this->tel = $insert_data['tel'];
        $this->fax = $insert_data['fax'];
        $this->address = $insert_data['address'];
        $this->recno =  ($recno != null) ? $recno : 0;  //如果是產品詢問函帶入產品編號, 反之如果是聯絡信則產品編號帶入0
        $this->sup_no =  $sup_no;
        $this->postdate = date('Y-m-d G:i:s');
        $this->Email = $insert_data['email'];
        $this->Subject = $subject_ins;
        $this->body = $body_ins;

        //系統資料
        $this->ip = getenv("REMOTE_ADDR");

        //其他欄位可能是中文版才有的，EIP這邊先填寫0
        $this->department = 0;
        $this->content_type = "";
        $this->deadline_date = '1970-01-01'; //MySQL 5.7 之後不再支援 '0000-00-00';
        //$this->service_date = NULL;
        //$this->sales_no = 0;

        $this->save();

    }


}
