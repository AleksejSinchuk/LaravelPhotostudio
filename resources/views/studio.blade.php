@extends('layouts.studio')
@section('content')


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

@endif

<div style="width: 100%; height: auto;text-align: center"> <img src="public/logo.jpg" width="100%"> </div>
<div style="text-align: center;color:white; font-size: 20px;" >Мои работы</div>
<ul class="flex-container wrap">
    @for($i=0;$i<count($catalogs);$i++)
        <li>
            <a class="catlinks" href="{{$catalogs[$i]}}">
                <img  class="flex-item" src="{{$dir}}/{{$catalogs[$i]}}/{{$photoes[$i]}}" width="50%" alt="Lights">
                <div class="name">
                    <p >{{$catalogs[$i]}}</p>
                </div>
            </a>
        </li>

    @endfor
</ul>
<br style="clear:both" />
@endsection

