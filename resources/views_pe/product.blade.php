@extends('layout')

@section('page')
<div class="page-header">
         <h1>產品型錄<small></small></h1>
  </div>

    <div id="products" class="row">
    
           <div class="col-md-6 col-sm-6 col-xs-12">
           
             <div id="pro_pic"><img src="{{$image_path}}" class="img-responsive"></div>
           
           </div>
         
          <div class="col-md-6 col-sm-6 col-xs-12">
           
             <div id="pro_h1"><h2>{{$product->pname}}</h2></div>
             
             <div id="pro_h2">產 品 編 號 :{{$product->pnum}}</div>
             
             <div id="pro_h2">產 品 價 格 : {{$product->fprice}}</div>
             
             <div id="pro_h2">交 貨 天 數 : {{$product->delivery}} 天</div>
             
             <div id="pro_h2">最 少 訂 購 量 : {{$product->morder}}</div>
             
             <div id="pro_ask"><a href="/inquiry/{{$product->recno}}" class="btn_gray">詢問產品</a></div>

           </div>
    
    </div>
        

    <div id="pro_title" class="row">產品詳細介紹</div>
    <div class="table-responsive" id="product_intro">
        {!! $product->memo !!}
    </div>
  <div id="news_btn" class="row"><a href="/products" class="btn_gray">Back</a></div>
@stop

@section('js')
<script>

    $(document).ready(function(){
	/* 覆寫表格背景色(如果沒有背景色的話)，覆寫表格 bootstrap css (class="table") 以使表格 responsive 行為正確 */

        //如果 產品介紹撈出來的 html 的 table 內的 td 沒有背景色 套用 attr bgcolor=#FFF (空白底色)
    	//@TODO: 這好像有 Bug 無法完全 cover 到，先暫時拔掉
	/*
	if(! $('div#product_intro table td').attr('bgcolor'))
          $('div#product_intro table td').attr('bgcolor', '#FFF');
	*/


	//為了解決上面的Bug...
	//走訪表格所有 td ，如果該 td 沒有設定 bgcolor ，則強制設定 bgcolor 為 #FFFFFF
	$("td").each(function() {
	    var bgcolor = $(this).attr("bgcolor");
	    if(typeof bgcolor == "undefined") $(this).attr('bgcolor', '#ffffff');
	});	

        //產品介紹表格內的 html 如有 表格 也套用 bootstrap css (移除 width 屬性, 增加 class="table" 屬性)
        $('div#product_intro table').removeAttr('width');
        $('div#product_intro table').attr('class', 'table');
    });
</script>
@stop

