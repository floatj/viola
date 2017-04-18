<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\CategoryMember;
use App\Lib\Common;

class ProductController extends Controller
{
    //

    protected $offset = 10;     //預設分頁筆數: 10
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
     * 取得預設 supplier 指定分類的 Products_list 頁面資料 (含分類及 products)
     *
     * 參數：$class_no = 分類 ID, 若未指定則預設值為 0 表示不分類
     *
     */
    public function showProductsList($class_no = null)
    {

        $sup_no = \App\Lib\Common::getSupplierNo();

        $products = \App\Product::getAllProducts($sup_no, $class_no, $this->offset);

        $categories = $this->getAllCategory($sup_no);  //取所有階層分類

        return view('demo/product_list', ["products"=>$products, "categories"=>$categories]);
    }

    /**
     * 取得單一 product 詳細資料
     */
    public function showProduct($recno)
    {
        //$sup_no = \App\Lib\Common::getSupplierNo();

        $product = \App\Product::getProduct($recno);

        return view('demo/product', ["product"=>$product]);
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
