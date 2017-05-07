@extends('layout')

@section('page')
    <div id="pro_menu" class="col-md-3 col-xs-12">

        <!--第一層分類-->
        <ul class="phh">
            <h4>產品分類</h4>
        @foreach($categories[0] as $category)
            <!--分類名稱和該分類項目的數量-->
                <li class="pmm"><a href="/category/{{$category->c_no_1}}">{{$category->name}}</a> <span style="color:gray;">({{$category->count or '???'}})</span>
                    <!--第二層分類，如果有則顯示-->
                    @if(!empty($categories[1][0]) AND $category->c_no_1 == $categories[1][0]->c_no_1)
                        <ul class="phh">
                            @foreach($categories[1] as $category_lv2)
                                <li class="pmm"><a href="/category/{{$category_lv2->c_no_1}}/{{$category_lv2->c_no_2}}">{{$category_lv2->name}}</a> <span style="color:blue;">({{$category_lv2->count or '???'}})</span></li>
                                <!--第三層分類，如果有則顯示-->
                                @if(!empty($categories[2][0]) AND $category_lv2->c_no_2 == $categories[2][0]->c_no_2)
                                    <ul class="phh">
                                        @foreach($categories[2] as $category_lv3)
                                            <li class="pmm"><a href="/category/{{$category_lv3->c_no_1}}/{{$category_lv3->c_no_2}}/{{$category_lv3->c_no_3}}">{{$category_lv3->name}}</a> <span style="color:blue;">({{$category_lv3->count or '???'}})</span></li>
                                        @endforeach
                                    </ul>

                                @endif
                            <!--category lv3-->
                            @endforeach
                        </ul>

                @endif
                <!--category lv2-->
                </li>
            @endforeach
        </ul>

    </div>


<div id="main" class="col-md-9 col-xs-12">

  <div class="page-header">
         <h1>產品型錄<small></small></h1>
  </div>

    <div id="products" class="row">
        @foreach($products as $product)
            <div id="prodbox" class="col-md-3 col-xs-6">
                <a href="/product/{{$product->recno}}">
                    <img class="img-responsive" src="{{$product->image_path}}" alt="product_image_not_found" />
                    <p>{{$product->pname}}</p>
                </a>
            </div>
        @endforeach
        {{ $products->links() }}

    </div>

</div>
@stop