@extends('demo.layout')


@section('content')

    <h1>D-Mail S 信件內容--測試</h1>

    <!--image-->
    <h2>img:</h2>
    path:
    <code>
        {{$image_path}}
    </code>
    <br />
    image:
    <img src="{{$image_path}}" alt="dm img not found alter txt"/>

    <hr>

    <!--dm information from db-->
    <h2>table:</h2>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>column name</th>
            <th>value</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>recno</td>
                <td>{{$product->sup_no}}</td>
            </tr>
            <tr>
                <td>pname</td>
                <td>{{$product->pname}}</td>
            </tr>
            <tr>
                <td>pnum</td>
                <td>{{$product->pnum}}</td>
            </tr>
            <tr>
                <td>delivery</td>
                <td>{{$product->delivery}}</td>
            </tr>
            <tr>
                <td>fprice</td>
                <td>{{$product->fprice}}</td>
            </tr>
            <tr>
                <td>min order</td>
                <td>{{$product->morder}}</td>
            </tr>
            <tr>
                <td>pdesc</td>
                <td>{{$product->pdesc}}</td>
            </tr>
            <tr>
                <td>memo</td>
                <td>{{$product->memo}}</td>
            </tr>
            <tr>
                <td>keytime</td>
                <td>{{$product->keytime}}</td>
            </tr>
            <tr>
                <td>check_sys</td>
                <td>{{$product->check_sys}}</td>
            </tr>
            <tr>
                <td>check_prod</td>
                <td>{{$product->check_prod}}</td>
            </tr>
            <tr>
                <td>click</td>
                <td>{{$product->click}}</td>
            </tr>
            <tr>
                <td>grade</td>
                <td>{{$product->grade}}</td>
            </tr>
            <tr>
                <td>keywords</td>
                <td>{{$product->keywords}}</td>
            </tr>
            <tr>
                <td>rank(sort?)</td>
                <td>{{$product->rank}}</td>
            </tr>
            <tr>
                <td>category_class_new(?)</td>
                <td>{{$product->category_class_new}}</td>
            </tr>
        </tbody>
    </table>

@stop