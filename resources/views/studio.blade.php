@extends('layouts.studio')
@section('content')


{{--=========================================================================================--}}
<style>
    .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;
        -ms-box-orient: horizontal;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -moz-flex;
        display: -webkit-flex;
        display: flex;
        align-items: center;
        Justify-content:center;
    }


    .wrap    {
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    .wrap li {

    }

    .wrap-reverse li {
        background: deepskyblue;
    }

    .flex-item {
        background: white;
        padding: 5px;
        width: auto;
        height: 400px;
        margin: 10px;

        line-height: 10px;
        font-weight: bold;
        font-size: 2em;


    }

    .name{
        color: white;
        text-align: center;
        font-size: 20px;
    }
</style>


@if(isset($imgs))
        <ul class="flex-container wrap">
            @foreach($imgs as $img)
            <li>
                <a href="{{$dir}}/{{$catname}}/{{$img}}" >
                    <img  class="flex-item"src="{{$dir}}/{{$catname}}/{{$img}}" width="60%" alt="Lights">
                </a>
            </li>
            @endforeach
        </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endif

<div style="width: 100%; height: auto;text-align: center"> <img src="public/logo.jpg" width="100%"> </div>
<div style="text-align: center;color:white; font-size: 20px;" >Мои работы</div>
<ul class="flex-container wrap">
    @for($i=0;$i<count($catalogs);$i++)
        <li>
            <a href="{{$catalogs[$i]}}">
                <img  class="flex-item" src="{{$dir}}/{{$catalogs[$i]}}/{{$photoes[$i]}}" width="50%" alt="Lights">
                <div class="name">
                    <p>{{$catalogs[$i]}}</p>
                </div>
            </a>
        </li>

    @endfor
</ul>
<br style="clear:both" />
@endsection

