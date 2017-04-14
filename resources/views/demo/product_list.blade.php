@extends('demo.layout')


@section('content')
<!--側欄CSS，借放-->
<style>
    .side li:hover {
        background: #FFE100 !important;
    }
</style>

    <h1>D-Mail__test__所有信件清單--測試</h1>

    <!--側邊欄-->
    <div id="sidebar" style="float:left; width:200px; margin:20px;">
        <ul class="side" style="list-style-type: none;">
            @foreach($categories as $category)
                <li>{{$category->name}}</li>
            @endforeach
        </ul>
    </div>

    <!--Products-->
    <div id="body-area" style="float:left; margin:20px;">
        <table class="table table-striped table-hover">
            <caption>Pd</caption>
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
                    <td><a href="#">{{$product->pname}}</a></td>
                    <td>{{$product->pnum}}</td>
                    <td>{{$product->fprice}}</td>
                <!--<td>{{$product->memo}}</td>-->
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>



@stop