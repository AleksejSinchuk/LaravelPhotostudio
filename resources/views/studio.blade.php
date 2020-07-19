@extends('layouts.studio')
@section('content')
{{--    <style>--}}
{{--        .cont{--}}
{{--            /*margin: 5px;*/--}}
{{--            float: left;--}}
{{--            padding: 5px;--}}

{{--        }--}}
{{--        .cont img{--}}
{{--            /*height: 200px;*/--}}
{{--            /*width: 200px;*/--}}
{{--        }--}}
{{--        .catalog{--}}
{{--            margin: 5px;--}}
{{--            float: left;--}}
{{--            padding: 5px;--}}
{{--        }--}}
{{--        .catalog img{--}}
{{--            height: 100px;--}}
{{--            width: 100px;--}}
{{--        }--}}

{{--    </style>--}}


{{--    @if(isset($imgs))--}}
{{--    <div class="container">--}}
{{--        @foreach($imgs as $img)--}}
{{--            <div class="catalog"><img src="{{$dir}}/{{$catname}}/{{$img}}"/></div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    <div class="clearfix"></div>--}}
{{--    @endif--}}

{{--    <div class="container"  >--}}
{{--        @for($i=0;$i<count($catalogs);$i++)--}}

{{--            <div class="cont"><a href="{{$catalogs[$i]}}"><img src="{{$dir}}/{{$catalogs[$i]}}/{{$photoes[$i]}}"/></a></div>--}}

{{--        @endfor--}}
{{--    </div>--}}
{{--<div class="clearfix"></div>--}}







{{--<style>--}}

{{--     .content li{--}}
{{--         height: 300px;--}}

{{--        float: left;--}}
{{--        margin: 5px;--}}
{{--        display: inline-block;--}}

{{--    }--}}


{{--</style>--}}

{{--@if(isset($imgs))--}}
{{--    <div class="content">--}}
{{--        <ul>--}}
{{--        @foreach($imgs as $img)--}}

{{--            <li><a ><img class="img-responsive"  src="{{$dir}}/{{$catname}}/{{$img}}"/></a></li>--}}

{{--        @endforeach--}}
{{--            </ul>--}}
{{--    </div>--}}
{{--    <br style="clear:both" />--}}
{{--    <hr>--}}
{{--@endif--}}



{{--    <div class="content">--}}
{{--    <ul>--}}
{{--    @for($i=0;$i<count($catalogs);$i++)--}}
{{--                <li>  <a href="{{$catalogs[$i]}}"><img  src="{{$dir}}/{{$catalogs[$i]}}/{{$photoes[$i]}}"/></a></li>--}}
{{--    @endfor--}}
{{--    </ul>--}}
{{--    </div>--}}
{{--    <br>--}}
{{--<br style="clear:both" />--}}






@if(isset($imgs))
    <div class="row" style="padding-top: 50px;">
        @foreach($imgs as $img)
            <div class="col-md-4"style="height:300px;height: 300px; padding-top: 50px;">
                <div class="thumbnail" >
                    <a href="/w3images/lights.jpg">
                        <img  class="img-responsive "src="{{$dir}}/{{$catname}}/{{$img}}"  alt="Lights">
                        <div class="caption">
                            <p>Lorem ipsum...</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endif





<div class="row">
    @for($i=0;$i<count($catalogs);$i++)
    <div class="col-md-4"style="height:300px;height: 300px;">
        <div class="thumbnail" >
            <a href="{{$catalogs[$i]}}">
                <img  class="img-responsive "src="{{$dir}}/{{$catalogs[$i]}}/{{$photoes[$i]}}"  alt="Lights">
                <div class="caption">
                    <p>Lorem ipsum...</p>
                </div>
            </a>
        </div>
    </div>
    @endfor
</div>


@endsection

