@extends('layout')

@section('page')

<style>
/* workaround: 修正公司介紹 圖片重複的問題 */
#about table{
    display: none;
}
</style>

  <div class="page-header">
         <h1>公司  簡介<small></small></h1>
  </div>

    <div id="about" class="row">
    	<p><img class="img-responsive" src="img/about_pic.png" alt="" align="left" style="margin-right:10px; margin-bottom:10px;">
        {!!$supplier[0]->memo!!}
        </p>

    </div>
@stop
