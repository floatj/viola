@extends('layout')
@section('page')

  <div class="row">
    <div class="col-sm-4">
        <!--最新消息-->
        <div class="page-header">
            <h1>最新消息</h1>
        </div>
        <div id="news">
            <div id="news_list">
                @foreach($newsinfo as $news)
                    <div id="news_date">{{$news->a_time}}</div>
                    <div id="news_title"><a href="/news/{{$news->recno}}">{{$news->a_name}}</a></div>
                @endforeach
            </div>
            {{--@TODO: 首頁的最新消息應該限制數量/不顯示頁數?--}}
            {{-- $newsinfo->links() --}}
        </div>
    </div>
    
    <div class="col-sm-4">
        <!--聯絡我們-->
        <div class="page-header">
            <h1>聯絡我們</h1>
        </div>
        <div>
            @foreach($contacts as $c_key=>$c_value)
                <a href="{{$c_key}}" target="_blank">
                    <img src="/img/{{$c_value}}" alt="" title="{{$c_key}}" />
                </a>
            @endforeach
        </div>
    </div>

    <div class="col-sm-4">
        <!--相關連結-->
        <div class="page-header">
            <h1>相關連結</h1>
        </div>
        <div>
            @foreach($links as $c_key=>$c_value)
                <div>
                    <a href="{{$c_value}}" target="_blank">{{$c_key}}</a>
                </div>
            @endforeach
        </div>
    </div>

  </div>

@stop