@extends('demo.layout')


@section('content')
    <h1>字典系統--測試頁面</h1>
    <h2>測試blalalalaalala</h2>
    <p>{{$supplier[0]->name}}</p>
    <p>{{$supplier[0]->memo}}</p>
    <p>{{$supplier[0]->addr_road}}</p>
    <p>{{$supplier[0]->tel}}</p>
@stop