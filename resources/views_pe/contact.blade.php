@extends('layout')

@section('head-required')
  <!-- Google reCAPTCHA api-->
  <script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section('page')
  <div class="page-header">
         <h1>聯絡我們<small></small></h1>
  </div>

  <!--客戶額外的 html 內容-->
  <div id="sup_message" style="color:#FFF">
  <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
          <tr>
            <td height="30" align="left">親愛的客戶您好:</td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                  <td width="25%" height="30" align="right">本公司帳號 <strong>戶名：</strong></td>
                  <td width="75%" align="left">協和塑膠廠股份有限公司</td>
                </tr>
                <tr>
                  <td height="30" align="right"><strong>銀行：</strong></td>
                  <td align="left" class="a16_03">台中市第二信用合作社 太平分社</td>
                </tr>
                <tr>
                  <td height="30" align="right"><strong>代號：</strong></td>
                  <td align="left" class="a16_05">146</td>
                </tr>
                <tr>
                  <td height="30" align="right"><strong>帳號：</strong></td>
                  <td align="left" class="a16_05"><strong><span style="font-size:24px;">01660020001897</span></strong></td>
                </tr>
                </tbody>
              </table></td>
          </tr>
          <tr>
            <td class="a16_03">請您於完成付款手續後，來電傳真或Mail告知，並書名聯絡人、公司名稱 、發票號碼 、電話、送貨地址，以便公司為您提供訊速完善的服務，謝謝！</td>
          </tr>
          <tr>
            <td height="30" align="right">協和塑膠廠股份有限公司  敬上</td>
          </tr>
          <tr>
            <td height="30" align="right">&nbsp;</td>
          </tr>
          </tbody>
        </table>
  </div>
  <!---->

  <div id="pro_title" class="row">請填妥以下表單資料，我們將會儘快與您聯絡，並提供最優質的服務。（＊必填 ）</div>

  <form name="inquiry_form" id="inquiry_form" action="/contact" method="post" onsubmit="return check_form(this)">
    <!--csrf token-->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div id="contact" class="row">

      <div class="col-md-6 col-xs-12 con_list">* 您的姓名：<br><input class="con_input" type="text" name="author"></div>
      <div class="col-md-6 col-xs-12 con_list">公司名稱：<br><input class="con_input" type="text" name="company"></div>
      <div class="col-md-6 col-xs-12 con_list">電　　話：<br><input class="con_input" type="text" name="tel"></div>
      <div class="col-md-6 col-xs-12 con_list">傳　　真：<br><input class="con_input" type="text" name="fax"></div>
      <div class="col-md-12 col-xs-12 con_list">住　　址：<br><input class="con_input" type="text" name="address"></div>
      <div class="col-md-12 col-xs-12 con_list">* 電子郵件：<br><input class="con_input" type="text" name="email"></div>
      <div class="col-md-12 col-xs-12 con_list">* 主　　旨：<br><input class="con_input" type="text" name="subject"
                                                                  value=""></div>
      <div class="col-md-12 col-xs-12 con_list">內　　容：<br><textarea class="medium con_textarea" name="body"
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