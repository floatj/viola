<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use App\Lib\Common;

class ProductController extends Controller
{
    //
    /**
     * 取得預設 supplier 的所有 Products
     */
    public function showAllProducts()
    {

        $sup_no = \App\Lib\Common::getSupplierNo();

        $products = \App\Product::getAllProducts($sup_no);

        return view('demo/product_list', ["products"=>$products]);
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
}
