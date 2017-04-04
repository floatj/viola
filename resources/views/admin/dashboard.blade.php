@extends('admin.layout')


@section('content')
    <h1>字典系統--測試A頁面</h1>
    <h2>測試blalalalalalalalal......</h2>

    
    <h2>Status</h2>
    <p>Nothing to worry about.</p>

    <h2>Config</h2>
    <table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>item</th>
            <th>value</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>sup_no</td>
                <td>{{$sup_no}}</td>
            </tr>
        </tbody>
    </table>

@stop