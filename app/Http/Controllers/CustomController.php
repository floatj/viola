<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    //允許顯示的 view 陣列
    protected $page_array = ['plastic', 'spec', 'spec2'];

    //顯示自訂頁面
    public function showCustomPage($page)
    {
        //@todo 有 bug 不能用 = =

        $x=Request::route()->getName();
        echo $x;
        exit;

        //檢查在array內的頁面才能呼叫
        if(in_array($page, $this->page_array))
            return view($page);

        return parent::report("error");
    }

    //顯示自訂頁面
    public function showCustomPage1()
    {
        return view('plastic');
    }

    //顯示自訂頁面
    public function showCustomPage2()
    {
        return view('spec');
    }

    //顯示自訂頁面
    public function showCustomPage3()
    {
        return view('spec2');
    }
}
