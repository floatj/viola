@extends('demo.layout')


@section('content')

    <h1>DM</h1>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>[P-key] recno</th>
            <th>pname</th>
            <th>pnum</th>
            <th>fprice</th>
            <!--<th>memo</th>-->
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->recno}}</td>
                <td>{{$product->pname}}</td>
                <td>{{$product->pnum}}</td>
                <td>{{$product->fprice}}</td>
                <!--<td>{{$product->memo}}</td>-->
            </tr>
        @endforeach
        </tbody>
    </table>


@stop