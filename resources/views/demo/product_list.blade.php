@extends('demo.layout')


@section('content')

    <h1>D-Mail__test__所有信件清單--測試</h1>

    <!--側邊欄-->
    <div id="sidebar" style="float:left; width:200px; margin:20px;">
        <table class="table table-striped table-hover">
            <caption>Category</caption>
            <thead>
            <tr>
                <!--<th>[P-key] recno</th>-->
                <!--<th>c_no</th>-->
                <th>name</th>
                <!--<th>memo</th>-->
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                <!--<td>{{$category->recno}}</td>-->
                <!--<td>{{$category->c_no}}</td>-->
                    <td>{{$category->name}}</td>
                <!--<td>{{$category->memo}}</td>-->
                </tr>
            @endforeach
            </tbody>
            </tbody>
        </table>
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