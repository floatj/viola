@extends('layout')

@section('page')

    <div class="page-header">
         <h1>交通指引<small> / Map</small></h1>
    </div>

    <!--google map embed-->
    <div class="embed-responsive embed-responsive-4by3">
        <!--<iframe  class="col-lg-12 col-md-12 col-sm-12" width=100% height='400' frameborder='0' style="border:0; margin:0 auto;" allowfullscreen scrolling='no' marginheight='0' marginwidth='0' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.429933640024!2d120.72149841498913!3d24.15665028439065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469180881764e19%3A0x71e3adb7927b5562!2zNDA25Y-w5Lit5biC5aSq5bmz5Y2A6IKy5LuB6LevNDflt7c36Jmf!5e0!3m2!1szh-TW!2stw!4v1489073500893'></iframe>-->
        <iframe class="col-lg-12 col-md-12 col-sm-12" width="100%" height="400" frameborder="0" style="border:0; margin:0 auto;" allowfullscreen scrolling='no' marginheight='0' marginwidth='0' src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q={{$address}}&z={{$zoom}}&output=embed&t=></iframe>
    </div>
@stop
