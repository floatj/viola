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

class ProductController extends Controller
{
    //

    protected $offset = 12;     //預設分頁筆數
    const ALL_CATEGORY = 0;     //不分類

    /**
     * 取得預設 supplier 所有分類的 Products
     */
    /*
    public function showAllProductsList()
    {
        //指定 class_no = 0 不分類
        $this->showProductsList(self::ALL_CATEGORY);
    }
    */

    /**
     * (RWD 版暫無使用)
     * 取得預設 supplier 指定分類的 Products_list 頁面-以清單顯示 (list-based) (含分類及 products)
     *
     * 參數：$class_no = 分類 ID, 若未指定則預設值為 0 表示不分類
     *
     */
    public function showProductsList($class_no = null, $class_no2=null, $class_no3=null)
    {
        //取 products 與 categories
        list($products, $categories) = $this->getProductsAndCategories($class_no, $class_no2, $class_no3);

        return view('demo/product_list', ["products"=>$products, "categories"=>$categories]);
    }

    /**
     * 取得預設 supplier 指定分類的 Products_list 頁面-以縮圖顯示 (img based) (含分類及 products)
     *
     * 參數：$class_no = 分類 ID, 若未指定則預設值為 0 表示不分類
     *
     */
    public function showProductsList2($class_no = null, $class_no2=null, $class_no3=null)
    {
        //取 products 與 categories
        list($products, $categories) = $this->getProductsAndCategories($class_no, $class_no2, $class_no3);

        //取得 image 路徑
        foreach($products as $key=>$product) {
            $products[$key]->image_path = $this->getProductImage($product->recno, "_min");
        }

        return view('products', ["products"=>$products, "categories"=>$categories]);
    }


    /**
     *  關鍵字搜尋產品
     */
    public function searchProduct($product_keyword)
    {
        //取 products 與 categories
        list($products, $categories) = $this->getProductsAndCategories(null, null, null, $product_keyword);

        //取得 image 路徑
        foreach($products as $key=>$product) {
            $products[$key]->image_path = $this->getProductImage($product->recno, "_min");
        }

        return view('products', ["products"=>$products, "categories"=>$categories, "product_keyword"=>$product_keyword]);
    }


    /**
     *  顯示熱門產品
     */
    public function showHotProducts()
    {
        //取 products 與 categories
        list($products, $categories) = $this->getProductsAndCategories(null, null, null, null, true);

        //取得 image 路徑
        foreach($products as $key=>$product) {
            $products[$key]->image_path = $this->getProductImage($product->recno, "_min");
        }

        return view('hot_products', ["products"=>$products]);
    }


    /**
     * 列舉或搜尋 products 與 categories
     *
     * 搜尋產品：  $keyword 須帶入搜尋關鍵字
     * 熱門產品：  $hot_products 需指定為 true
     */
    public function getProductsAndCategories($class_no = null, $class_no2=null, $class_no3=null, $keyword=null, $hot_product=null)
    {

        $sup_no = \App\Lib\Common::getSupplierNo();
        //取得所有products 
        $products = \App\Product::getAllProducts($sup_no, $this->offset, $class_no, $class_no2, $class_no3, $keyword, $hot_product);

        //取所有階層分類
        $categories = $this->getAllCategory($sup_no, $class_no, $class_no2);

/*        //取第一層分類數量
        for($i=0;$i<count($categories);$i++)
        {
            $class_no = $categories[0][$i]->c_no_1;
            $count = \App\Product::getProductsCount(1, $class_no);

            //設定分類階層物件該項目的 count
            $categories[0][$i]->count = $count;
        }
        //@TODO: 取第二、三階層分類數量
*/

        return [$products, $categories];
    }

    /**
     * 取得單一 product 詳細資料
     */
    public function showProduct($recno)
    {
        //$sup_no = \App\Lib\Common::getSupplierNo();

        $product = \App\Product:: getProduct($recno);   //取得 product 資料
        $image_path = $this->getProductImage($recno, "_real");   //取得 image 路徑

        return view('product', ["product"=>$product, "image_path"=>$image_path]);
    }

    /**
     * 取得單一 product image 路徑
     *
     * @param $recno
     * @return string
     */
    public function getProductImage($recno, $prefix="")
    {
        $host = \Config::get('viola.dm_image_path'.$prefix);
        //$host = \Config::get('viola.dm_image_path_min');
        $image_path = $recno;
        $ext = ".jpg";

        return "http://".$host."/"."$image_path".$ext;
    }

    /**
     * 取得所有分類
     */
    public function getAllCategory($sup_no, $cno1=null ,$cno2=null)
    {
        $category_member = \App\CategoryMember::getAllCategoryMember($sup_no, $cno1, $cno2);
        return $category_member;

    }

    /**
     * 詢問產品--表單 (GET)
     */
    public function inquiryProduct($recno)
    {

        //取得產品資料及圖片
        $product = \App\Product:: getProduct($recno);   //取得 product 資料
        $image_path = $this->getProductImage($recno, "_real");   //取得 image 路徑

        //詢問產品頁面
        return view('inquiry', ["product"=>$product, "image_path"=>$image_path]);
    }

    /**
     * 詢問產品--送出 (POST)
     */
    public function inquiryProductSubmit(Request $request)
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
                    "  alert(\"非常抱歉，系統為防止廣告信，您尚未完成驗證碼測試，或是驗證失敗，無法送出。請完成驗證碼測試後，再試一次！\");\n" .
                    "  javascript:history.back();\n" .
                    "  // --> \n" .
                    "</SCRIPT>\n";

                //170201.floatj:　如果使用者停用 javascript 的狀況，也要顯示錯誤訊息
                echo "<p>非常抱歉，系統為防止廣告信，您尚未完成驗證碼測試，或是驗證失敗，無法送出。請完成驗證碼測試後，再試一次！</p>";
                exit;
            }
        }

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

            //170201.floatj:　如果使用者停用 javascript 的狀況，防止繼續執行
            exit;
        }


            //取得廠商資料
        $sup_no = \App\Lib\Common::getSupplierNo();
        $supplier = \App\Supplier::getSupplierInfo($sup_no);

        //從表單陣列刪除不需要的資料
        unset($input['_token']);
        unset($input['g-recaptcha-response']);

        //設定 recno
        $recno = $input['recno'];

        //寫入 Model (DB)
    	// debug 測試時不寫入
	    // @TODO: 新增測試開關功能
	     
        $guest = new Guest();
        $guest->addGuestInquiryRecord($input, $supplier, $sup_no, $recno);

        //寄信
        $this->inquiryProductSendMails($input, $supplier, $sup_no, $recno);


        //@todo: 暫時先這樣，以後再改成較為現代化的提示訊息
        //提示訊息，並跳轉回詢問的產品的頁面
        echo "\n<SCRIPT LANGUAGE='JavaScript'>\n".
            "  <!-- \n".
            "  alert(\"---- 產品詢問信已寄出，我們會儘快處理或與您聯繫！----\");\n".
            "  javascript:location.replace(\"/product/$recno\");\n".
            "  // --> \n".
            "</SCRIPT>\n";


        //跳轉回詢問的產品的頁面
        exit;
        //return redirect('/product/'.$recno);

    }

    /**
     * 寄出產品詢問信 (1->客戶公司信箱   2->詢問者)
     *
     * @param $input_data
     *
     */
    public function inquiryProductSendMails($insert_data, $supplier, $sup_no, $recno )
    {

        //@todo: need to refactor, too dirty to be production (?)

        //寄信初始設定
        $http_root = 'http://'.$_SERVER['SERVER_NAME'];
        $d_url="$http_root/products_show.php?queryrecno=$recno&sup_no=$sup_no";

        //1.通知客戶公司信箱
        $body_ins = "<font face=Arial color=#333333 size=3>";
        $body_ins .= "<b>百索商情網EIP網站產品詢問信-".$insert_data['subject']." </b>";
        $body_ins .= "<br><br>聯絡人員：".$insert_data['author'];
        $body_ins .= "<br>公司名稱：".$insert_data['company'];
        $body_ins .= "<br>聯絡電話：".$insert_data['tel'];
        $body_ins .= "<br>傳真號碼：".$insert_data['fax'];
        $body_ins .= "<br>聯絡地址：".$insert_data['address'];
        $body_ins .= "<br>聯絡信箱：".$insert_data['email'];
        $body_ins .= "<br>產品編號：".$insert_data['pnum'];
        $body_ins .= "<br>產品名稱：<a href=".$d_url." target=_blank><font color=#005599><b>".$insert_data['pname']."</b></font></a>";
        $body_ins .= "<br>詢問主旨："."<b>".$insert_data['subject']." </b>";
        $body_ins .= "<br>詢問內容：".$insert_data['body'];
        $body_ins  .= "<br>---------------------------------------------------------------";
        $body_ins  .= "<font  face=Arial color=#333333 size=2>";
        $body_ins  .= "<br><a href=".$http_root." target=_blank><font color=#005599 size=3><b>".$supplier[0]->name."</b></font></a> ";
        $body_ins  .= "<br>TEL：".$supplier[0]->tel."　　FAX：".$supplier[0]->fax."　　E-mail：".$supplier[0]->email."";
        $body_ins  .= "</font>";


        //廠商的收信email

        $service_email = "service@bysources.com";       //百索信箱
        $sup_mail=$supplier[0]->email;        //廠商 email
        //$sup_mail = "floatj@gmail.com";         //廠商  email (debug)
        $user_email  = $insert_data['email'];   //詢問者 email

        $subject="=?UTF-8?B?".base64_encode("百索商情網EIP網站產品詢問信- ".$insert_data['subject'])."?=";
        //$other="From:$user_email\nReply-To:$mail\nContent-Type:text/html;charset=big5";       //這邊不知道為何用charset=big5, 先改掉

        //信件內容
        $message = $body_ins;

        //@todo: 這邊有一個寄信的 issue, 原本code看起來會以填表單的人的 email 為寄件者名義, 但這樣可能會被當成 spam
        //原本這樣做法會有風險, EIP 寫法可能是舊的, 先改用中文版的作法試試看
        //$other="From:$user_email\nReply-To:$sup_mail\nContent-Type:text/html; charset=utf-8";     //eip作法
        $other="From::百索商情網 < $service_email >\nReply-To:$sup_mail\nContent-Type:text/html; charset=utf-8";     //中文版作法
        //$subject=mb_convert_encoding ($subject, 'BIG5', 'UTF-8' );    //先不轉編碼
        //$message=mb_convert_encoding ($message, 'BIG5', 'UTF-8' );

	//使用 Mailer 寄信 (給廠商)
        //@todo 這只是 workaround ，需要修正!!
        $mailer = new Mailer;
        $ret = $mailer->sendMail( $sup_mail, $subject, $message, $other );

        //Log //@todo: Log 日後有時間要修改的完善一點
        if($ret == "202 Accepted")
        {
            //寄信成功
            Log::info('產品詢問函 - 寄信給廠商成功!'.$sup_mail);
        }else{
            //寄信失敗
            Log::info('產品詢問聯絡函 - 寄信給廠商失敗!!'.$sup_mail."。錯誤訊息：$ret");
        }

        //------------------------------------------------------//

        //2.通知詢問者信箱
        //給詢問者回函
        $message2  = "<font  face=Arial color=#333333 size=2>";
        $message2 .= "<b><font color=#000000 size=3> ".$supplier[0]->name." - 系統自動通告</font></b>";
        $message2 .= "<br><br>本公司已收到您詢問- ".$insert_data['pname']." 產品詢問函";      //EIP舊系統這邊好像有錯字 = =
        $message2 .= "<br>感謝您的來信，本公司將盡快答覆您的問題。謝謝！";
        $message2  .= "<br><br><a href=".$http_root." target=_blank><font color=#005599 size=3><b>".$supplier[0]->name."</b></font></a> ";
        $message2  .= "<br><br>TEL：".$supplier[0]->tel."　　FAX：".$supplier[0]->fax."　　E-mail：".$supplier[0]->email."";
        $message2  .= "</font>";

        //詢問者mail
        $subject= "=?UTF-8?B?".base64_encode('系統自動通告-已收到您的產品詢問信!')."?=";
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
            Log::info('產品詢問函 - 寄信給訪客成功! '.$user_email);
        }else{
            //寄信失敗
            Log::info('產品詢問函 - 寄信給訪客失敗!! '.$user_email."。錯誤訊息：$ret");
        }

    }




}
