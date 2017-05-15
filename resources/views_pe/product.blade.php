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
    <div class="table-responsive">
        {!! $product->memo !!}
    </div>
  <div id="news_btn" class="row"><a href="/products" class="btn_gray">Back</a></div>
@stop