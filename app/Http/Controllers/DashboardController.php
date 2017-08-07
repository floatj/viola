<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Lib\Common;

class DashboardController extends Controller
{
    //

    public function showDashboard(Request $request)
    {

        //先以簡易驗證進行
        //@todo 擴充為完整的驗證方式

        $id = $request->input('id');
        $pw = $request->input('pw');

        if($id != "bysoit" OR $pw != "5566") 
        {
            //驗證失敗
            Config::set('app.debug', false);
            echo "403 You Cannot Pass!";
            //abort(403, 'You Cannot Pass!');   //debug = false 時, 無法顯示訊息
            die();
        }
        
    
        $sup_no = Config::get('viola.sup_no');

        return view('admin/dashboard', ["sup_no"=>$sup_no]);
    }

}
