@extends('layout')

@section('page')
  <div class="page-header">
         <h1>最新消息<small></small></h1>
  </div>

    <div id="news" class="row">
    
            <div id="news_ddate" class="col-md-12">發佈時間：{{$news->a_time}}</div>
            <div id="news_dtitle" class="col-md-12">{{$news->a_name}}</div>
            <div id="news_content" class="col-md-12">123123<p>{!! $news->a_text !!}</p></div>
            <div id="news_pic" class="col-md-12"><img src="img/news_pic.jpg" class="img-responsive" alt=""/></div>
      
      
    </div>
    
    <div id="news_btn" class="row"><a href="news.php" class="btn_gray">Back</a></div>
@stop