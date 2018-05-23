@extends('layout')

@section('page')
  <div class="page-header">
         <h1>最新消息<small></small></h1>
  </div>

    <div id="news" class="row">
    
            <div id="news_ddate" class="col-md-12">發佈時間：{{$news->a_time}}</div>
            <div id="news_dtitle" class="col-md-12">{{$news->a_name}}</div>
            <div id="news_content" class="col-md-12"><p>{!! $news->a_text !!}</p></div>
            @if(!empty($image[0]))
            <div id="news_pic" class="col-md-12"><img src="{{$image[0]}}" class="img-responsive" alt=""/></div>
            @endif
            @if(!empty($image[1]))
            <div id="news_pic" class="col-md-12"><img src="{{$image[1]}}" class="img-responsive" alt=""/></div>
            @endif
      
      
    </div>
    
    <div id="news_btn" class="row"><a href="/news" class="btn_gray">Back</a></div>
@stop

@section('js')
<script>
    <!--temportary fix: 修正 news_detail 圖片沒有指定 css class 的問題-->
    <!--workaround: 強制把所有讀出的最新消息 html 內容 的圖片加上 bootstrap css class-->

    $(document).ready(function(){ 
        //因為 div 跟 p 都有可能出現 img  所以都套 
        $('#news_content div img').addClass('img-responsive');
        $('#news_content p img').addClass('img-responsive');
    });
</script>
@stop
