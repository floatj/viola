@extends('layout')

@section('head-required')
    <!-- Google reCAPTCHA api-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section('page')
    <!-- Page Content -->
      <form id="order_form" name="order_form" action="/order" method="POST">


    <div class="page-header">
         <h1>訂購單<small> / Price</small></h1>
    </div>


    <div class="sub-title">
         <h1>總計：<span id="total_price">0</span>元</h1>
    </div>

    <div id="spec">
    
      <div class="orbox col-lg-6 col-md-6 col-xs-12">

          <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
          <tbody>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
                <tbody>
                  <tr>
                    <td height="40" colspan="6" align="center" valign="middle" background="./img/b.jpg" class="a13_05">AB小口徑系列63mm（安全蓋)</td>
                  </tr>
                  <tr>
                    <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">縮圖</td>
                    <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">品名</td>
                    <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">容量</td>
                    <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
                    <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">組/箱</td>
                    <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A204.jpg" alt="A204"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A204</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">378<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A240.jpg" alt="A240"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A240</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">240 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">210<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A258.jpg" alt="A258"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A258</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">250 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">252<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A287.jpg" alt="A287"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A287</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">280 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A310N.jpg" alt="A310N"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A310N</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">310 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A320.jpg" alt="A320"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A320</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B300.jpg" alt="B300"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B300</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">300 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">180<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B401.jpg" alt="B401"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B401</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">400 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B508.jpg" alt="B508"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B508</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">500 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B508N.jpg" alt="B508N"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B508N</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">500 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">168<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B600N.jpg" alt="B600N"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B600N</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">600 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">215<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B648.jpg" alt="B648"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B648</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">600 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">140<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B756.jpg" alt="B756"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B756</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1"> 720 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">180<br></td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/B460.jpg" alt="B460"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">B460</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">600 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">192</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td height="40" colspan="6" align="center" background="./img/b.jpg" class="tw1">D中口徑系列</td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D464.jpg" alt="D464"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D464</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">500 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">27</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">336</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D574.jpg" alt="D574"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D574</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">600cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">27</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">288</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D650.jpg" alt="D650"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D650</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">650cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D652.jpg" alt="D652"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D652</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">650cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">252</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D694.jpg" alt="D694"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D694</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">760 cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">280</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D730.jpg" alt="D730"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D730</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">650cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">27</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D750.jpg" alt="D750"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D750</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">800cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D804.jpg" alt="D804"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D804</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">800cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">280</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input6" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D808.jpg" alt="D808"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D808</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">850cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">240</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D858.jpg" alt="D858"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D858</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">900cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">210</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D1000.jpg" alt="D1000"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D1000</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1050cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D1009.jpg" alt="D1009"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D1009</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1000cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">216</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D1038.jpg" alt="D1038"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D1038</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1050cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D1100.jpg" alt="D1100"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D1100</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1150cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D1258.jpg" alt="D1258"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D1258</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1100cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">210</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D1450.jpg" alt="D1450"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D1450</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1400cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">160</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/D2000.jpg" alt="D2000"></td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">D2000</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1900cc</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">120</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input7" type="text" class="con_inputs2" value="0"></td>
                  </tr>
                  <tr>
                    <td height="80" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="80" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="80" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                  </tr>
                </tbody>
              </table></td>
            </tr>
          </tbody>
          </table>
        
      </div>
      
      
      <div class="orbox col-lg-6 col-md-6 col-xs-12">

      <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
          <tbody>
            <tr>
              <td height="40" colspan="6" align="center" valign="middle" background="./img/b.jpg" class="a13_05"><span class="tw1">J大口徑系列</span></td>
            </tr>
            <tr>
              <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1" sdval="1001" sdnum="1028;">縮圖</td>
              <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1" sdval="1001" sdnum="1028;">品名</td>
              <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">容量</td>
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">組/箱</td>
              <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J1000.jpg" alt="J1000"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J1000</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2000cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">80<br></td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J1120.jpg" alt="J1120"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J1120</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2800cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">80</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J1500s.jpg" alt="J1500s"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J1500S</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">3250cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">41</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">80</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J1504.jpg" alt="J1504"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J1504</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1550cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J1704.jpg" alt="J1704"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J1704</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1800cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">140</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J2301.jpg" alt="J2301"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J2301</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2300cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">120</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J2000.jpg" alt="J2000" width="80" height="80"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J2000</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1900cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">112</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J2004.jpg" alt="J2004" width="80" height="80"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J2004</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2200cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">120</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J2036.jpg" alt="J2036"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J2036</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2200cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">120</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J2700.jpg" alt="J2700"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J2700</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2700cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">41</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">84</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/J4001.jpg" alt="J4001"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">J4001</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">4000cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">52</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">60</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td height="40" colspan="6" align="center" valign="middle" background="./img/b.jpg" class="a13_05">F系列口徑</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/F230.jpg" alt="F230"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">F230</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">240cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">252<br></td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/F308.jpg" alt="F308"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">F308</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">310cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">216</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td height="80" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/PET5000.jpg" alt="PET5000"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">PET5000</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">5000cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">40</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">40</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td height="80" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
            </tr>
            <tr>
                <td height="40" colspan="6" align="center" valign="middle" background="./img/b.jpg" class="a13_05">WM八爪鐵罐系列</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/WM328.jpg" alt="WM328"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">WM328</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">330cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">22</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">240</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/WM438.jpg" alt="WM438"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">WM438</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">460cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">22</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/WM588.jpg" alt="WM588"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">WM588</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">590cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/WM658.jpg" alt="WM658"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">WM658</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">670cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td height="80" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/C600.jpg" alt="C600"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">C600</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">680cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">200</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/C1030.jpg" alt="C1030"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">C1030</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1130cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td height="80" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
            </tr>
            <tr>
                <td height="40" colspan="6" align="center" valign="middle" background="./img/b.jpg" class="a13_05">W蜂蜜瓶-寶特瓶系列</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W261.jpg" alt="W261"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W261</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">260cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270<br></td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W351.jpg" alt="W351"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W351</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">360cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">180</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W503.jpg" alt="W503"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W503</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">510cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">144</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W600.jpg" alt="W600"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W600</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">620cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">12</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">138</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W900.jpg" alt="W900"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W900</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">950cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">19</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">154</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W1500.jpg" alt="W1500"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W1500</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1500cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">19</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">108</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W2000.jpg" alt="W2000"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W2000</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1950cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">126</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W2500.jpg" alt="W2500"></td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W2500</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2450cc</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">31</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">108</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input8" type="text" class="con_inputs2" value="0"></td>
            </tr>
            <tr>
              <td height="85" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
            </tr>
          </tbody>
</table>
      </div>
      
      <div class="orbox col-lg-6 col-md-6 col-xs-12">
      
          <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
            <tbody>
              <tr>
                <td height="40" colspan="6" align="center" valign="middle" background="./img/b.jpg" class="a13_05">易開罐系列(塑膠拉環)</td>
              </tr>
              <tr>
                <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">縮圖</td>
                <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">品名</td>
                <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">容量</td>
                <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
                <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">組/箱</td>
                <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-300p.jpg" alt="307-300p"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-300P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">250cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">22</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-450p.jpg" alt="307-450p"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-450P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">400cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">22</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">315</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-460p.jpg" alt="307-460p"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-460P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">460cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-600p.jpg" alt="307-600p"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-600P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">500cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-800p.jpg" alt="307-800p"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-800P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">600cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-825p.jpg" alt="307-825p"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-825P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">740cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-900p.jpg" alt="307-900p"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-900P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">900cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">25</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">252</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W401-1300P.jpg" alt="W401-1300P"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W401-1300P</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1180cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">34</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">196</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/38-300.jpg" alt="38-300"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">38-300</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">16</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">288</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/38-400.jpg" alt="38-400"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">38-400</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">400cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">16</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">216</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/38-480.jpg" alt="38-480"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">38-480</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">480cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">16</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">216</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/38-540.jpg" alt="38-540"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">38-540</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">520cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">17</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">192</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td height="30" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/M3500.jpg" alt="M3500"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">M3500</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">3500cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">72</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">48</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input5" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/M5000.jpg" alt="M5000"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">M5000</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">5000cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">75</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">36</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input5" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/M6000.jpg" alt="M6000"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">M6000</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">6000cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">76</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">36</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input5" type="text" class="con_inputs2" value="0"></td>
              </tr>
            </tbody>
          </table>
      </div>
      

      <div class="orbox col-lg-6 col-md-6 col-xs-12">
          <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
            <tbody>
              <tr>
                <td height="40" colspan="6" align="center" valign="middle" background="./img/b.jpg" class="a13_05">Easy Open Cans易開罐系列鋁罐</td>
              </tr>
              <tr>
                <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">縮圖</td>
                <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">品名</td>
                <td width="20%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">容量</td>
                <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
                <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">組/箱</td>
                <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/211-300.jpg" alt="211-300"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">211-300</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">300cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">240</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-300.jpg" alt="307-300"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-300</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">250cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">22</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-450.jpg" alt="307-450"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-450</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">400cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">22</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">315</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-460.jpg" alt="307-460"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-460</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">460cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-600.jpg" alt="307-600"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-600</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">500cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-800.jpg" alt="307-800"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-800</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">600cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-825.jpg" alt="307-825"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-825</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">740cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">23</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/307-900.jpg" alt="307-900"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">307-900</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">900cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">25</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">252</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/209-360.jpg" alt="209-360"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">209-360</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">350cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">240</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/211-440.jpg" alt="211-440"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">211-440</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">390cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">240</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/W401-1300.jpg" alt="W401-1300"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">W401-1300</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1180cc</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">34</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">196</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td height="30" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">如意筒:</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A001.jpg" alt="A001"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A001</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">0.6 L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">15</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">144</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A002.jpg" alt="A002"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A002</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1 L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">72</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><img src="./img/A003.jpg" alt="A003"></td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">A003</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2 L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">29</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">72</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input2" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td height="85" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
              </tr>
            </tbody>
          </table>
      </div>

      
      <div class="orbox col-lg-6 col-md-6 col-xs-12">
          <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
            <tbody>
              <tr>
                <td height="40" colspan="5" align="center" valign="middle" background="./img/b.jpg" class="a13_05">雙象牌</td>
              </tr>
              <tr>
                <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">縮圖</td>
                <td width="35%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">品名</td>
                <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">規格</td>
                <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
                <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1001.jpg" alt="1001"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸橘色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">26斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">650</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1002.jpg" alt="1002"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸橘色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">430</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1003.jpg" alt="1003"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸白色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">26斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">640</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1004.jpg" alt="1004"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸白色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">18斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">420</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1006.jpg" alt="1006"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸白色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">10斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">340</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1007.jpg" alt="1007"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸白色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">8斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">320</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1008.jpg" alt="1008"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸白色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">5斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">220</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/1009.jpg" alt="1009"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象水缸白色</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">3斗</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">190</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2001.jpg" alt="2001"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象大口</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">250</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2002.jpg" alt="2002"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象大口【大型】</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2003.jpg" alt="2003"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象大口【小型】</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2004.jpg" alt="2004"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象大口</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">10L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">90</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2009.jpg" alt="2009"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象四角大口</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">235</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2005.jpg" alt="2005"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象大口水龍頭</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">285</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2006.jpg" alt="2006"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象大口水龍頭</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">180</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2007.jpg" alt="2007"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象大口水龍頭</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">10L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">130</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/2008.jpg" alt="2008"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象四角大口水龍頭</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td rowspan="2" align="left" valign="middle" bgcolor="#FFFFFF" class="tw1"><img src="./img/3001.jpg" alt="301"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象四角桶【白.藍】</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">25L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">235</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象四角桶【白.藍】</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">220</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/3003.jpg" alt="3003"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">40L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">345</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
              <tr>
                <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/3004.jpg" alt="3004"></td>
                <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30L</td>
                <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">270</td>
                <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
              </tr>
            </tbody>
          </table>
      </div>
      



    

    
      <div class="orbox col-md-6 col-xs-12">
          <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
            <tbody>
              <tr>
                <td height="40" align="left" bgcolor="#FFFFFF"><table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
                  <tbody>
                    <tr>
                      <td height="40" colspan="5" align="center" valign="middle" background="./img/b.jpg" class="a13_05">雙象牌</td>
                    </tr>
                    <tr>
                      <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">縮圖</td>
                      <td width="35%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">品名</td>
                      <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">規格</td>
                      <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
                      <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/5001.jpg" alt="5001"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">40台斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">160</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/5002.jpg" alt="5002"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30台斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/5003.jpg" alt="5003"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">25台斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">110</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/5004.jpg" alt="5004"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20台斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">100</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/5005.jpg" alt="5005"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">10台斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">65</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/5006.jpg" alt="5006"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2台斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td height="80" align="left" valign="top" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶【大型】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6002.jpg" alt="6002"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6003.jpg" alt="6003"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶【活動頭】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">20L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">150</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td height="80" align="left" valign="top" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶【活動頭】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">16L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">110</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6005.jpg" alt="6005"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">16L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">110</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6006.jpg" alt="6006"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶【活動頭】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">10L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">90</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6007.jpg" alt="6007"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">10L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">90</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6008.jpg" alt="6008"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶【活動頭】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">8L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">70</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6009.jpg" alt="6009"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">8L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">70</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6010.jpg" alt="6010"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">5L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">50</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6011.jpg" alt="6011"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">4L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">40</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6012.jpg" alt="6012"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">3L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">35</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" bgcolor="#FFFFFF" class="tw1"><img src="./img/6014.jpg" alt="6014"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象油桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td height="85" align="left" valign="top" bgcolor="#FFFFFF" class="tw1"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    </tr>
                  </tbody>
                </table></td>
              </tr>
            </tbody>
          </table>
      </div>
    
      <div class="orbox col-md-6 col-xs-12">
          <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
            <tbody>
              <tr>
                <td height="40" align="left" bgcolor="#FFFFFF"><table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
                  <tbody>
                    <tr>
                      <td height="40" colspan="5" align="center" valign="middle" background="./img/b.jpg" class="a13_05">雙象牌</td>
                    </tr>
                    <tr>
                      <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">縮圖</td>
                      <td width="35%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">品名</td>
                      <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">規格</td>
                      <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
                      <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
                    </tr>
                    <tr>
                      <td rowspan="3" align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/c12.jpg"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象蜜桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input4" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象蜜桶【安全蓋】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">28</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象蜜桶【安全蓋】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">3台斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">25</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/7001.jpg" alt="7001"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象軟桶【天王雙】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">46L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">365</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/7002.jpg" alt="7002"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象軟桶【特大雙】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">22L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">220</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/7003.jpg" alt="7003"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象軟桶【大雙】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">16L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">160</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/7004.jpg" alt="7004"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象軟桶【中雙】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">13L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">130</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td rowspan="2" align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/9005.jpg" alt="9005"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象果汁桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">5斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象果汁桶</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">6斤</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">30</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle" bgcolor="#FFFFFF" class="tw1"><img src="./img/o01.jpg"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">水龍頭</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">個</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">40</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw2">&nbsp;</td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/o02.jpg"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">菲歐米象</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">1000ml</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">38</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input3" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                    </tr>
                  </tbody>
                </table></td>
              </tr>
            </tbody>
          </table>
      </div>
      
      <div class="orbox col-md-6 col-xs-12">
          <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
            <tbody>
              <tr>
                <td height="40" align="left" bgcolor="#FFFFFF"><table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" cols="7" bgcolor="#000000">
                  <tbody>
                    <tr>
                      <td height="40" colspan="5" align="center" valign="middle" background="./img/b.jpg" class="a13_05">雙象牌</td>
                    </tr>
                    <tr>
                      <td width="15%" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">縮圖</td>
                      <td width="35%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">品名</td>
                      <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">規格</td>
                      <td width="10%" height="40" align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">單價</td>
                      <td align="center" valign="middle" bgcolor="#FFFFDF" class="tw1">數量</td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/8001.jpg" alt="8001"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象灑水器【天王大】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">13L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">195</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/8002.jpg" alt="8002"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象灑水器【超特大】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">12L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">145</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/8003.jpg" alt="8003"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象灑水器【特大A】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">10L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">130</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/8007.jpg" alt="8007"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象灑水器【特大】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">8L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">115</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/8004.jpg" alt="8004"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象灑水器【大】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">5L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">85</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/8005.jpg" alt="8005"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象灑水器【中】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">3L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">75</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/8006.jpg" alt="8006"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象灑水器【小】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">2L</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">65</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/9001.jpg" alt="9001"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象便器【特大】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">140</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/9002.jpg" alt="9002"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象便器【大】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">90</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/9003.jpg" alt="9003"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象便器【中】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">75</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                    <tr>
                      <td align="left" bgcolor="#FFFFFF" class="tw1"><img src="./img/9004.jpg" alt="9004"></td>
                      <td height="40" align="left" bgcolor="#FFFFFF" class="tw2">雙象便器【小】</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">&nbsp;</td>
                      <td height="40" align="center" bgcolor="#FFFFFF" class="tw1">68</td>
                      <td align="center" bgcolor="#FFFFFF" class="tw1"><input name="input" type="text" class="con_inputs2" value="0"></td>
                    </tr>
                  </tbody>
                </table></td>
              </tr>
            </tbody>
          </table>
        </div><!--spec-->
    </div><!--orbox-->

    <!--聯絡資訊-->
    <div class="sub-title">
         <h1>聯絡資訊</h1>
    </div>

    <div id="contact" class="row">
          <div class="col-md-6 col-xs-12 con_list">* 您的姓名：<br><input class="con_input" type="text" name="author"></div>
          <div class="col-md-12 col-xs-12 con_list">* 電子郵件：<br><input class="con_input" type="text" name="email"></div>
          <div class="col-md-6 col-xs-12 con_list">公司名稱：<br><input class="con_input" type="text" name="company"></div>
          <div class="col-md-6 col-xs-12 con_list">電　　話：<br><input class="con_input" type="text" name="tel"></div>
          <!--<div class="col-md-6 col-xs-12 con_list">傳　　真：<br><input class="con_input" type="text" name="fax"></div>-->
          <div class="col-md-12 col-xs-12 con_list">其他需求：<br><textarea class="medium con_textarea" name="body"
                                                                       rows="5" style="width:99%;"></textarea></div>
          <div class="col-md-12 col-xs-12 con_list">防止廣告：<br>

              <div class="g-recaptcha" data-sitekey="6LdvzBMUAAAAACjl2MJYsIn8RaHhgMWCFsgdWEaX"
                   data-callback="captcha_done"></div>
              <span class="con_list_title">為避免廣告訊息，請點選「我不是機器人」。</span>
          </div>
    </div>

    <div id="con_btn2" class="row">
      <a href="http://demo.bysources.com/test/order.php#" class="btn_gray" style="margin-right:20px;">清除</a>
      <a href="#" id="submit_button" class="btn_gray btn_disabled">確認送出</a>
    </div>

      <!--csrf token-->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>


@stop
@section('js')
<script>


    function checkInputs(mode) {
    
    var flag=0;
    var result = new Array();
    var ret  = "";
    var total_price = 0; //總價格
    var item_price = 0;

    /*
    //Sol2:
    //跑所有表格
    //因為原作者用 Dreamweaver 拉的結構的關係 所以要對每一列判斷是否為標題列 or 內容列
    $(".orbox > table > tbody > tr > td > table > tbody > tr").each(function() {
      //判斷是否為標題列
      //標題列：只有一個 td 
      //內容列：有很多個 td
      //console.log ("w");
      var td_count = $(this).children('td').length;
      
      if(td_count == 1) {
        //標題列
        var title_txt = $(this).find('td').text();
        console.log(title_txt);
      }

    });
    //debug
    return;
    */

    $("form#order_form :input.con_inputs2[type=text]").each(function(){

        //單品價格歸零
        item_price = 0;

        var input = $(this); 
        
        if(input.val() > 0 && input.val() !== '' ) {
          //有填寫購買數量的產品的 input ，執行以下動作取得該產品的訂購單資訊:
          
          //1.品名 - 找該行第二個欄位-第N個欄位 (N=數量前一欄)
          //2.分類 - 找該table標題
          //3.數量 - 取得填寫的數量

          //找出表格標題 (分類)
          //@TODO: 有Bug 先拔掉
          /*
          var item_class = $(this.parentNode.parentNode.parentNode).find("tr:first > td:first ").text();
          ret = ret+"產品分類 : "+item_class+"\n"
          */

          var td_index = $(this).parent().index();
          console.log ("td_index = "+td_index);
          var item_fullname = "";
          var item_col= "";
          var seperator  = "";
          
          for(i=0;i<td_index;i++) {
            //各欄位文字
            //if(i!=0) seperator  = " ";
            item_fullname = $(this.parentNode.parentNode).find("td:eq("+i+")").text();
            item_col = $(this.parentNode.parentNode.parentNode).find("tr:eq(1) > td:eq("+i+")").text();
            
            //計算價格
            if(item_col == "單價"){
                console.log("計算單價");
                item_price = item_fullname*input.val();
                total_price += item_price;
            }

            //不要加入縮圖欄位
            if(item_col != "縮圖"){
              ret = ret + item_col+" : "+item_fullname+"\n";
            }
          }
          
          //訂購數量及單價
          ret = ret + "訂購數量 : "+input.val()+"\n"; 
          ret = ret + "金額小計 : "+item_price+"\n";

          /*seperator = "";
          
          for(i=0;i<td_index;i++) {
            //找出位於表格第二列的各欄位標題
            if(i!=0) seperator  = " ";
            item_col = item_col + seperator + $(this.parentNode.parentNode.parentNode).find("tr:eq(1) > td:eq("+i+")").text();
          } */
               
          
    
          //var order_item = $(this.parentNode.parentNode).find("td:eq(1)").text();
         // console.log("class="+item_class);
          console.log("item_col = "+item_col);
          console.log("item_fullname = "+item_fullname+", count="+input.val());

          //換行
          ret=ret+"\n\n";
        } 

        
    });
    
    //附加總金額在訂單文字
    ret = ret + "\n訂單總金額: "+total_price+"\n";

    //更新網頁顯示價格
    document.getElementById("total_price").innerHTML = total_price;
    //如只需要更新顯示，不送出表單
    if(mode == "checkprice") return;
    
    //檢查如訂購單有數量則送出表單
    if(ret.length > 0){
      console.log("訂購單有內容:\n"+ret);

      //附加訂購單訊息內容至表單
      $('<input />').attr('type', 'hidden')
          .attr('name', "ordermsg")
          .attr('value', ret)
          .appendTo('#order_form');

      //送出表單
      document.getElementById("order_form").submit();
      
    } else {
      alert("您尚未選購任何產品!");
    }
    
    }

    /* 計算價格 */
    function updatePrice() {
        console.log('update price!');
        checkInputs("checkprice");
    }

    //註冊送出表單按鈕連結    
    var submit_btn = document.getElementById("submit_button");
    submit_btn.addEventListener('click', checkInputs, false);

    //對每一列產品的單價輸入框進行註冊 input 改變的事件 (計算單價用)
    //document.addEventListener('input',updatePrice, false);
    var classname = document.getElementsByClassName("con_inputs2");
    for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('input',updatePrice, false);
    }

    //recaptcha 驗證完成後 啟用送出按鈕
    function captcha_done()
    {
        //開啟送出按鈕
        $('#submit_button').removeClass('btn_disabled');
        $('#submit_button').addClass('btn_gray');
    };    

    $(document).ready(function() {
        //更新網頁顯示總金額
        updatePrice();

        //防止輸入非數值的數量
        $(".con_inputs2").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // Allow: Ctrl/cmd+A
                (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                 // Allow: Ctrl/cmd+C
                (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                 // Allow: Ctrl/cmd+X
                (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                 // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });

    </script>
@stop
