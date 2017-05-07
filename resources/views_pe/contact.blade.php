@extends('layout')

@section('page')
  <div class="page-header">
         <h1>聯絡我們<small></small></h1>
  </div>

    <div id="contact" class="row">
    
      <div id="con_list" class="col-md-6 col-xs-12">您的姓名<br><input class="con_input" type="text" name="input"></div>
      <div id="con_list" class="col-md-6 col-xs-12">公司名稱<br><input class="con_input" type="text" name="input"></div>
      <div id="con_list" class="col-md-6 col-xs-12">電　　話<br><input class="con_input" type="text" name="input"></div>
      <div id="con_list" class="col-md-6 col-xs-12">傳　　真<br><input class="con_input" type="text" name="input"></div>
      <div id="con_list" class="col-md-12 col-xs-12">住　　址<br><input class="con_input" type="text" name="input"></div>
      <div id="con_list" class="col-md-12 col-xs-12">電子郵件<br><input class="con_input" type="text" name="input"></div>
      <div id="con_list" class="col-md-12 col-xs-12">主　　旨<br><input class="con_input" type="text" name="input"></div>
      <div id="con_list" class="col-md-12 col-xs-12">內　　容<br><textarea class="medium" name="textarea" rows="5" style="width:99%;"></textarea></div>
      <div id="con_list" class="col-md-12 col-xs-12">防止廣告<br><input class="con_inputs" type="text" name="input"><img src="captcha/showrandimg.php" style="margin-left:5px; margin-right:5px;">請輸入左方認證數字</div>
      
      
    </div>
    
    <div id="con_btn" class="row"><a href="#" class="btn_gray" style="margin-right:20px;">清除</a><a href="#" class="btn_gray">送出</a></div>
@stop