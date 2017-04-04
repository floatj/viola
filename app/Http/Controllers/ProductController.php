<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use App\Lib\Common;

class ProductController extends Controller
{
    //
    /**
     * 取得預設 supplier 的基本資料
     */

    public function showAllProducts()
    {

        $sup_no = \App\Lib\Common::getSupplierNo();

        $products = \App\Product::getAllProducts($sup_no);

        return view('demo/product', ["products"=>$products]);
    }
}
