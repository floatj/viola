@extends('layout')

@section('head-required')
    <!-- Google reCAPTCHA api-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section('page')
  <div class="page-header">
         <h1>詢問產品<small> / Inquire</small></h1>
  </div>

    <div id="products" class="row">
    
           <div class="col-md-6 col-sm-6 col-xs-12">
           
             <div id="pro_pic"><img src="{{$image_path}}" class="img-responsive" alt="product image {{$product->pname}}"></div>
           
           </div>

        <div class="col-md-6 col-sm-6 col-xs-12">

            <div id="pro_h1"><h2>{{$product->pname}}</h2></div>

            <div id="pro_h2">產 品 編 號 :{{$product->pnum}}</div>

            <div id="pro_h2">產 品 價 格 : {{$product->fprice}}</div>

            <div id="pro_h2">交 貨 天 數 : {{$product->delivery}} 天</div>

            <div id="pro_h2">最 少 訂 購 量 : {{$product->morder}}</div>

        </div>
    
    </div>
    
    <div id="pro_title" class="row">請填妥以下表單資料，我們將會儘快與您聯絡，並提供最優質的服務。（欄位前面有 ＊ 符號，為必填欄位 ）</div>

  <form id="inquiry_form" name="inquiry_form" action="/inquiry" method="post" onsubmit="return check_form(this)">
      <!--csrf token-->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <input name="recno" type="hidden" id="recno" value="{{$product->recno}}" />
      <div id="contact" class="row">

          <div class="col-md-6 col-xs-12 con_list"><span class="required_mark">* </span> 您的姓名：<br><input class="con_input" type="text" name="author"></div>
          <div class="col-md-6 col-xs-12 con_list">公司名稱：<br><input class="con_input" type="text" name="company"></div>
          <div class="col-md-6 col-xs-12 con_list">電　　話：<br><input class="con_input" type="text" name="tel"></div>
          <div class="col-md-6 col-xs-12 con_list">傳　　真：<br><input class="con_input" type="text" name="fax"></div>
          <div class="col-md-12 col-xs-12 con_list">住　　址：<br><input class="con_input" type="text" name="address"></div>
          <div class="col-md-12 col-xs-12 con_list"><span class="required_mark">* </span>電子郵件：<br><input class="con_input" type="text" name="email"></div>
          <div class="col-md-12 col-xs-12 con_list">編　　號：<br><input class="con_input" type="text" name="pnum" value="{{$product->pnum}}"></div>
          <div class="col-md-12 col-xs-12 con_list">產品名稱：<br><input class="con_input" type="text" name="pname"
                                                                    value="{{$product->pname}}"></div>
          <div class="col-md-12 col-xs-12 con_list"><span class="required_mark">*</span> 主　　旨：<br><input class="con_input" type="text" name="subject"
                                                                       value="詢問 - {{$product->pname}}"></div>
          <div class="col-md-12 col-xs-12 con_list">您的需求：<br><textarea class="medium con_textarea" name="body"
                                                                       rows="5" style="width:99%;"></textarea></div>
          <div class="col-md-12 col-xs-12 con_list">防止廣告：<br>

              <div class="g-recaptcha" data-sitekey="6LdvzBMUAAAAACjl2MJYsIn8RaHhgMWCFsgdWEaX"
                   data-callback="captcha_done"></div>
              <span class="con_list_title">為避免廣告訊息，請點選「我不是機器人」。</span>
          </div>


      </div>

      <div id="con_btn" class="row">
          <a id="submit_btn" href="#" onclick="document.getElementById('inquiry_form').submit(); return false;" class="btn_gray btn_disabled" style="margin-right:20px;">確定送出</a>
          <a href="#" onclick="document.getElementById('inquiry_form').reset(); return false;" class="btn_gray">清除</a>
      </div>
  </form>

@stop

@section('js')
<script type="text/javascript">
    //recaptcha 驗證完成後 啟用送出按鈕
    function captcha_done()
    {
        //開啟送出按鈕
        $('#submit_btn').removeClass('btn_disabled');
        $('#submit_btn').addClass('btn_gray');
    };

    function check_form()
    {
        //檢查表單
        return true;
    }
</script>
@stop
