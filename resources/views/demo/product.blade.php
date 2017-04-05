@extends('demo.layout')


@section('content')

    <h1>D-Mail S 信件內容--測試</h1>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>column name</th>
            <th>value</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>recno</td>
                <td>{{$product->recno}}</td>
            </tr>
            <tr>
                <td>pname</td>
                <td>{{$product->pname}}</td>
            </tr>
            <tr>
                <td>pnnum</td>
                <td>{{$product->pnum}}</td>
            </tr>
        </tbody>
    </table>

@stop