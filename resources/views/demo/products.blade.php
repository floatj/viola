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

    <h1>D-Mail__test__所有信件清單(img-based)--測試</h1>

    <!-- sidebar_category -->
    <div id="sidebar" style="float:left; width:200px; margin:20px;">
        <!--第一層分類-->
        <ul class="side">
            @foreach($categories[0] as $category)
                <!--分類名稱和該分類項目的數量-->
                <li><a href="/category/{{$category->c_no_1}}">{{$category->name}}</a> <span style="color:blue;">({{$category->count or '???'}})</span>
                    <!--第二層分類，如果有則需要顯示-->
                    @if(!empty($categories[1]) AND $category->c_no_1 == $categories[1][0]->c_no_1)
                    <ul class="side">
                        @foreach($categories[1] as $category_lv2)
                            <li>{{$category_lv2->name}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <!---->
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Pds -->
    <div id="body-area" style="float:left; margin:20px;">
        @foreach($products as $product)
            <img src="{{$image_path or 'not_found.jpg'}}" alt="dm pic"/>
            <br />
            <a href="/product/{{$product->recno}}">{{$product->pname}}</a>
            <br /><br />
        @endforeach
        {{ $products->links() }}
    </div>



@stop
