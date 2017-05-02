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

    <h1>D-Mail__test__所有信件清單(list)--測試</h1>

    <!-- sidebar_category -->
    <div id="sidebar" style="float:left; width:200px; margin:20px;">
        <!--第一層分類-->
        <ul class="side">
        @foreach($categories[0] as $category)
            <!--分類名稱和該分類項目的數量-->
                <li><a href="/category/{{$category->c_no_1}}">{{$category->name}}</a> <span style="color:blue;">({{$category->count or '???'}})</span>
                    <!--第二層分類，如果有則顯示-->
                    @if(!empty($categories[1]) AND $category->c_no_1 == $categories[1][0]->c_no_1)
                        <ul class="side">
                            @foreach($categories[1] as $category_lv2)
                                <li>{{$category_lv2->name}}</li>
                                <!--第三層分類，如果有則顯示-->
                                @if(!empty($categories[2]) AND $category_lv2->c_no_2 == $categories[2][0]->c_no_2)
                                    <ul class="side">
                                        @foreach($categories[2] as $category_lv3)
                                            <li>{{$category_lv3->name}}</li>

                                        @endforeach
                                    </ul>

                                @endif
                                <!--category lv2-->
                            @endforeach
                        </ul>

                    @endif
                    <!--category lv2-->
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
                    <td><a href="/product/{{$product->recno}}">{{$product->pname}}</a></td>
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
