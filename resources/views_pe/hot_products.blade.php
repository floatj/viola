@extends('layout') 

@section('page')
    <div class="page-header">
         <h1>熱門產品<small> / Hot Products</small></h1>
    </div>
<!--
    <div id="hotprod" class="row">
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
      <div class="col-md-3 col-xs-6"><a href="products_d.php"><img class="img-responsive img-portfolio img-hover" src="img/pp.jpg" alt=""></a></div>
    </div>
-->

<!-- 熱門產品 一排 4 個產品圖 -->
<!-- 所以 div class="row" 要有多排 -->
    @for ($i=0; $i<count($products); $i++)
    {{--@foreach($products as $product)--}}
    @if ($i%4 == 0)
        <div id="hotprod" class="row"><!--start of hotprod row-->
    @endif
        <div id="prodbox" class="col-md-3 col-xs-6">
            <a href="/product/{{$products[$i]->recno}}">
                <img class="img-responsive" src="{{$products[$i]->image_path}}" alt="{{$products[$i]->pname}}" />
                <p>{{$products[$i]->pname}}</p>
            </a>
        </div>

    @if (($i+1)%4 == 0)
        </div><!--end of hotprod row-->
    @endif
    {{--@endforeach--}}
    @endfor
    {{ $products->links() }}
@stop
