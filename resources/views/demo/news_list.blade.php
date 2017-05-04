@extends('demo.layout')


@section('content')

    <h1>N信件分類info-測試blalalaa</h1>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>[P-key] recno</th>
            <th>a_name</th>
            <th>a_text</th>
            <th>a_time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($newsinfo as $news)
            <tr>
                <td>{{$news->recno}}</td>
                <td><a href="/news/{{$news->recno}}">{{$news->a_name}}</a></td>
                <td>{{$news->a_time}}</td>
                <td>{{$news->a_text}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $newsinfo->links() }}



@stop