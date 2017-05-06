@extends('layout')
@section('page')
  <div class="page-header">
         <h1>最新消息<small></small></h1>
  </div>

    <div id="news" class="row">
    
        <div id="news_list" class="row">
            @foreach($newsinfo as $news)
                <div id="news_date" class="col-lg-2 col-xs-12">{{$news->a_time}}</div>
                <div id="news_title" class="col-lg-10 col-xs-12"><a href="news_d.php">{{$news->a_name}}</a></div>
            @endforeach
        </div>

        {{ $newsinfo->links() }}
    </div>


@stop