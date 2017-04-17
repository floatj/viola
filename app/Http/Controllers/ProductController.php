<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\CategoryMember;
use App\Lib\Common;

class ProductController extends Controller
{
    //
    /**
     * 取得預設 supplier 的所有 Products
     */

    protected $offset = 10;     //預設分頁筆數: 10

    public function showAllProducts()
    {

        $sup_no = \App\Lib\Common::getSupplierNo();

        $products = \App\Product::getAllProducts($sup_no, $this->offset);

        $categories = $this->getAllCategory($sup_no, 1);  //取分類

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
    public function getAllCategory($sup_no, $cno)
    {
        $category_member = \App\CategoryMember::getAllCategoryMember($sup_no, $cno);

        return $category_member;

    }


}
