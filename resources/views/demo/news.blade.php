@extends('demo.layout')


@section('content')

    <!--news info from db-->
    <h2>table:</h2>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>column name</th>
            <th>value</th>
            <th>txt</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$news->recno}}</td>
                <td>{{$news->a_name}}</td>
                <td>{{$news->a_text}}</td>

            </tr>
            <tr>
            </tr>
        </tbody>
    </table>

    <br/>
    <a href="/news">back</a>
@stop