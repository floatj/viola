<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\CategoryMember;
use App\Lib\Common;

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
     * 取得預設 supplier 指定分類的 Products_list 頁面 (list-based) (含分類及 products)
     *
     * 參數：$class_no = 分類 ID, 若未指定則預設值為 0 表示不分類
     *
     */
    public function showProductsList($class_no = null)
    {

        $sup_no = \App\Lib\Common::getSupplierNo();
        //取得所有產品清單
        $products = \App\Product::getAllProducts($sup_no, $class_no, $this->offset);
        
        //取所有階層分類
        $categories = $this->getAllCategory($sup_no);
    
        for($i=0;$i<count($categories);$i++)
        {
            $class_no = $categories[$i]->c_no_1;
            $count = \App\Product::getProductsCount(1, $class_no);      //取第一層分類數量

            //設定分類階層物件該項目的 count
            $categories[$i]->count = $count;
        }

        //取所有階層數量

        return view('demo/product_list', ["products"=>$products, "categories"=>$categories]);
    }

    /**
     * 取得預設 supplier 指定分類的 Products_list 頁面 (img based) (含分類及 products)
     *
     * 參數：$class_no = 分類 ID, 若未指定則預設值為 0 表示不分類
     *
     */
    public function showProductsList2($class_no = null)
    {

        $sup_no = \App\Lib\Common::getSupplierNo();
        //取得所有產品清單 (img)
        $products = \App\Product::getAllProducts($sup_no, $class_no, $this->offset);
        
        //取所有階層分類
        $categories = $this->getAllCategory($sup_no);
    
        for($i=0;$i<count($categories);$i++)
        {
            $class_no = $categories[$i]->c_no_1;
            $count = \App\Product::getProductsCount(1, $class_no);      //取第一層分類數量

            //設定分類階層物件該項目的 count
            $categories[$i]->count = $count;
        }

        //取所有階層數量

        return view('demo/products', ["products"=>$products, "categories"=>$categories]);
    }



    /**
     * 取得單一 product 詳細資料
     */
    public function showProduct($recno)
    {
        //$sup_no = \App\Lib\Common::getSupplierNo();

        $product = \App\Product:: getProduct($recno);   //取得 product 資料
        $image_path = $this->getProductImage($recno);   //取得 image 路徑

        return view('demo/product', ["product"=>$product, "image_path"=>$image_path]);
    }

    /**
     * 取得單一 product image 路徑
     *
     * @param $recno
     * @return string
     */
    public function getProductImage($recno)
    {
        $host = \Config::get('viola.dm_image_path');
        $image_path = $recno;
        $ext = ".jpg";

        return "$host"."/"."$image_path".$ext;
    }

    /**
     * 取得所有分類
     */
    public function getAllCategory($sup_no)
    {
        $category_member = \App\CategoryMember::getAllCategoryMember($sup_no);

        return $category_member;

    }


}
