@extends('demo.layout')


@section('content')
<!--側欄CSS，借放-->
<style>
    /*
    .side li:hover {
        background: #FFE100 !important;
    }
    */

    /* ul 不要有點點 */
    .side{
        list-style-type: none;
    }
</style>

    <h1>D-Mail__test__所有信件清單--測試</h1>

    <!-- sidebar_category -->
    <div id="sidebar" style="float:left; width:200px; margin:20px;">
        <!--第一層分類-->
        <ul class="side">
            @foreach($categories as $category)
                <!--分類名稱和該分類項目的數量-->
                <li>{{$category->name}} <span style="color:blue;">({{$category->count or '???'}})</span>
                    <!--第二層分類，如果有則需要顯示-->
                    @if(!empty($category2))
                    <ul class="side">
                        @foreach($categories2 as $category2)
                            <li>{{$category2->name}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <!---->
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Products -->
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