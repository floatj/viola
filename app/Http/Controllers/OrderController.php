<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use \App\Product;
use \App\Guest;
use \App\Supplier;
use \App\CategoryMember;
use App\Lib\Common;
use \App\Lib\ReCaptcha;
use \App\Lib\Mailer;
use Log;

class OrderController extends Controller
{

    /**
     * 訂購單
     */
    public function showOrderForm()
    {
        //取 products 與 categories
        return view('orderform');
    }

    /**
     * 送出訂購單
     */
    public function OrderFormSubmit(Request $request)
    {

        //(debug) 設定是否檢查 captcha
        $check_captcha = true;

        $input = $request->all();

        //取得 POST 參數 前端送過來的 google recaptcha 驗證代碼
        $captcha_code = $request->input('g-recaptcha-response');

        //echo "captcha = $captcha_code<br>";
        $reCaptcha = new ReCaptcha();

        //檢查 recaptch 是否驗證成功
        //先只在 production / staging 環境檢查
        if (App::environment('production', 'staging')) {
            if (!$reCaptcha->verify($captcha_code) AND $check_captcha) {
                //驗證失敗，請使用者重新驗證
                //@TODO: 暫時先用舊方法，以後須修改為較現代化的錯誤訊息 UI
                echo "驗證碼驗證失敗！<br>";
                echo "\n<SCRIPT LANGUAGE='JavaScript'>\n" .
                    "  <!-- \n" .
                    "  alert(\"非常抱歉，系統為防止廣告信，您尚未完成驗證碼測試或驗證失敗。請完成驗證碼測試後，再試一次！\");\n" .
                    "  javascript:history.back();\n" .
                    "  // --> \n" .
                    "</SCRIPT>\n";

                //170201.floatj:　如果使用者停用 javascript 的狀況，也要顯示錯誤訊息
                echo "<p>非常抱歉，系統為防止廣告信，您尚未完成驗證碼測試或驗證失敗。請完成驗證碼測試後，再試一次！</p>";
                exit;
            }
        }

        $input['ordermsg'] = nl2br($input['ordermsg']);
        //exit;

        //@todo: 完整檢查前端傳入參數

        //檢查 email
        if(! filter_var( $input['email'] ,FILTER_VALIDATE_EMAIL ) )
        {
            //電子郵件檢查失敗
            $err_msg = "非常抱歉，您輸入的 Email 有誤，請您修改後再重新送出！";
            echo "錯誤：產品詢問函送出失敗!!<br>";
            echo "<p>$err_msg</p>";

            echo "\n<SCRIPT LANGUAGE='JavaScript'>\n" .
                "  <!-- \n" .
                "  alert(\"$err_msg\");\n" .
                "  javascript:history.back();\n" .
                "  // --> \n" .
                "</SCRIPT>\n";

            //如果使用者停用 javascript 的狀況，防止繼續執行
            exit;
        }


            //取得廠商資料
        $sup_no = \App\Lib\Common::getSupplierNo();
        $supplier = \App\Supplier::getSupplierInfo($sup_no);

        //從表單陣列刪除不需要的資料
        unset($input['_token']);
        unset($input['g-recaptcha-response']);

        //寄信
        $this->OrderSendMails($input, $supplier, $sup_no);


        //@todo: 暫時先這樣，以後再改成較為現代化的提示訊息
        //提示訊息，跳轉回首頁
        echo "\n<SCRIPT LANGUAGE='JavaScript'>\n".
            "  <!-- \n".
            "  alert(\"---- 訂購單已寄出，我們會儘快與您聯繫！----\");\n".
            "  javascript:location.replace(\"/\");\n".
            "  // --> \n".
            "</SCRIPT>\n";


        //exit;
        return redirect('/');

    }

    /**
     * 寄出訂購單 (1->客戶公司信箱   2->詢問者)
     *
     * @param $input_data
     *
     */
    public function OrderSendMails($insert_data, $supplier, $sup_no)
    {

        //@todo: need to refactor, too dirty to be production (?)

        //寄信初始設定
        $http_root = 'http://'.$_SERVER['SERVER_NAME'];

        $ordermsg = "";

        //1.通知客戶公司信箱
        $body_ins = "<font face=Arial color=#333333 size=3>";

        //訂購單內容存至 ordermsg 稍後重複使用
        $ordermsg = "<b>".$supplier[0]->name."-產品訂購單"." </b>";
        $ordermsg .= "<br><br>訂購產品：<br>".$insert_data['ordermsg'];
        $ordermsg .= "<br><br><hr><br><br>聯絡人員：".$insert_data['author'];
        $ordermsg .= "<br>公司名稱：".$insert_data['company'];
        $ordermsg .= "<br>聯絡電話：".$insert_data['tel'];
        //$body_ins .= "<br>傳真號碼：".$insert_data['fax'];
        //$body_ins .= "<br>聯絡地址：".$insert_data['address'];
        $ordermsg .= "<br>聯絡信箱：".$insert_data['email'];
        $ordermsg .= "<br>其他需求：".$insert_data['body'];
    
        $body_ins .= $ordermsg;

        $body_ins  .= "<br>---------------------------------------------------------------";
        $body_ins  .= "<font  face=Arial color=#333333 size=2>";
        $body_ins  .= "<br><a href=".$http_root." target=_blank><font color=#005599 size=3><b>".$supplier[0]->name."</b></font></a> ";
        $body_ins  .= "<br>TEL：".$supplier[0]->tel."　　FAX：".$supplier[0]->fax."　　E-mail：".$supplier[0]->email."";
        $body_ins  .= "</font>";


        //廠商的收信email

        $service_email = "service@bysources.com";       //百索信箱
        $sup_mail=$supplier[0]->email;        //廠商 email

        /* DEBUG */
        //$sup_mail = "float@childish.tw";         //廠商  email (debug)

        $user_email  = $insert_data['email'];   //詢問者 email

        $subject="=?UTF-8?B?".base64_encode("產品訂購單")."?=";
        //$other="From:$user_email\nReply-To:$mail\nContent-Type:text/html;charset=big5";       //這邊不知道為何用charset=big5, 先改掉

        //信件內容
        $message = $body_ins;

        //$other="From:$user_email\nReply-To:$sup_mail\nContent-Type:text/html; charset=utf-8";     //eip作法
        $other="From:百索商情網 < $service_email >\nReply-To:$sup_mail\nContent-Type:text/html; charset=utf-8";     //中文版作法
        //$subject=mb_convert_encoding ($subject, 'BIG5', 'UTF-8' );    //先不轉編碼
        //$message=mb_convert_encoding ($message, 'BIG5', 'UTF-8' );

   	    //使用 Mailer 寄信 (給廠商)
        $mailer = new Mailer;
        $ret = $mailer->sendMail( $sup_mail, $subject, $message, $other );


        //Log //@todo: Log 日後有時間要修改的完善一點
        if($ret == "202 Accepted")
        {
            //寄信成功
            Log::info('產品訂購單 - 寄信給廠商成功!'.$sup_mail);
        }else{
            //寄信失敗
            Log::info('產品訂購單 - 寄信給廠商失敗!!'.$sup_mail."。錯誤訊息：$ret");
        }

        //------------------------------------------------------//

        //2.通知詢問者信箱
        //給詢問者回函
        $message2  = "<font  face=Arial color=#333333 size=2>";
        $message2 .= "<b><font color=#000000 size=3> ".$supplier[0]->name." - 系統自動通告</font></b>";
        $message2 .= "<br><br>本公司已收到您的產品訂購單，副本如下：";      //EIP舊系統這邊好像有錯字 = =
        $message2 .= "<br><hr><br>".$ordermsg."<br><hr><br>";
        $message2 .= "<br>感謝您的訂購，本公司將盡快與您接洽。謝謝！";
        $message2  .= "<br><br><a href=".$http_root." target=_blank><font color=#005599 size=3><b>".$supplier[0]->name."</b></font></a> ";
        $message2  .= "<br><br>TEL：".$supplier[0]->tel."　　FAX：".$supplier[0]->fax."　　E-mail：".$supplier[0]->email."";
        $message2  .= "</font>";

        //詢問者mail
        $subject= "=?UTF-8?B?".base64_encode('系統自動通告-已收到您的訂購單!')."?=";
        //$other="From:$mail\nReply-To:$user_email\nContent-Type:text/html;charset=big5"; //原本 EIP 作法
        $other="From:百索商情網 < $service_email >\nReply-To:$user_email\nContent-Type:text/html; charset=utf-8";     //中文版作法
        //$subject=mb_convert_encoding ($subject, 'BIG5', 'UTF-8' );
        //$message2=mb_convert_encoding ($message2, 'BIG5', 'UTF-8' );


        //使用 Mailer 寄信 (給填詢問表單的訪客)
        //@todo 這只是 workaround ，需要修正!!
        $ret = $mailer->sendMail($user_email, $subject, $message2, $other);

        //Log //@todo: Log 日後有時間要修改的完善一點
	if($ret == "202 Accepted")
	{
            //寄信成功
            Log::info('訂購單 - 寄信給填寫人成功! '.$user_email);
        }else{
            //寄信失敗
            Log::info('訂購單 - 寄信給填寫人失敗!! '.$user_email."。錯誤訊息：$ret");
        }

    }




}
